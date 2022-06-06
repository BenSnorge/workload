<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /*  public function index()
    {
        
        return view('billing', compact('invioces'));
    } */
    public function index()
    {
        $invoices = Auth::user()->invoices();
        return view('dashboard.billing.index', compact('invoices'));
    }

    public function download(Request $request, $invoiceId)
    {

        $id = 1;
        $home = Home::find($id);
        $home->site_title = $request->get('site_title');

        return $request->user()->downloadInvoice($invoiceId, [
            'vendor'  => 'Gym',
            'product' => auth()->user()->subscription(),
        ]);
    }
}
