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

        return redirect()
            ->route('system')
            ->withMessage('Usuário criado com sucesso!');
    }
}
