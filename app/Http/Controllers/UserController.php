<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|unique:users,email',
            'c_password' => 'required',
            'password' => 'required|same:c_password',
        ]);

        $request->password = Hash::make($request->password);

        User::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return $this->signin($request);
    }

    public function login(){
        return view('auth.login');
    }

    public function signin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user != null && Hash::check($request->password, $user->password)){
            $request->session()->put('client', $user);
            return redirect()->route('system');
        } else {
            return redirect(route('user.login')."?e=true");
        }
    }

    function logout(Request $request){
        $request->session()->pull('client');
        return redirect()->route('user.login');
    }
}
