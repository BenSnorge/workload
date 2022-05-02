<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function card()
    {
        return view('/admin/card');
    }

    public function saveCard(Request $request)
    {
        $id = 1;
        $card = Card::find($id);
        $card->card1_icon = $request->get('card1_icon');
        $card->card1_heading = $request->get('card1_heading');
        $card->card1_description = $request->get('card1_description');
        $card->card2_icon = $request->get('card2_icon');
        $card->card2_heading = $request->get('card2_heading');
        $card->card2_description = $request->get('card2_description');
        $card->card3_icon = $request->get('card3_icon');
        $card->card3_heading = $request->get('card3_heading');
        $card->card3_description = $request->get('card3_description');
        $card->save();
        return redirect('admin/card');
    }
}
