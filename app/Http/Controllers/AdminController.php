<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        $users = User::all();
        return view('admin.create', compact('users'));
    }

    public function save()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User;
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = bcrypt(request()->password);
        $user->save();

        return back();
    }

    public function delete(User $user)
    {
        $user->delete();

        return back();
    }

}
