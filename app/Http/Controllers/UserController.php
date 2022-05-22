<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }
    public function index()
    {
        $users = User::all();
        return view('admin/all-users', [
            'users' => $users
        ]);
    }

    public function create()
    {

        return view('admin/create-user');
    }

    public function store()
    {

        $users = new User();
        $users->benefit = request('benefit');
        $users->icon = request('icon');

        $users->save();

        return redirect('/admin/all-users');
    }

    public function edit($id)
    {
        $users = User::where([
            'id' => $id,
        ])->first();
        return view('admin/user-edit', [
            'users' => $users
        ]);

        $roles = Role::where([
            'id' => $id,
        ])->first();
        return view('admin/user-edit', [
            'roles' => $roles
        ]);
    }

    public function update(Request $request, $id)
    {


        $users = User::where([
            'id' => $id,
        ])->first();
        $users->fname = $request->get('fname');
        $users->lname = $request->get('lname');
        $users->role_id = $request->get('role_id');


        $users->save();


        return redirect('admin/all-users');
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/admin/all-users');
    }
}
