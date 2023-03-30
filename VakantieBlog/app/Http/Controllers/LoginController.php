<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateUserRequest;
use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use App\Models\Post;

class LoginController extends Controller
{
    function login()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);

        return redirect('/blog');
    }

    function validate_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('/blog');
        }

        return redirect('login');
    }

    function account(){
        if(Auth::check())
        {
            return view('account')
            ->with('user', auth()->user());
        } 

        return redirect('login')->with('succes', 'Toegang afgewezen');

    }

    public function update(UpdateUserRequest $request){
        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back();
    }

    function logout(){
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

}
