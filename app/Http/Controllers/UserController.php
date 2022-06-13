<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index')->with([
            'users'=>$users,
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users');
    }

    public function delete($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        return redirect()->route('users');
    }

}
