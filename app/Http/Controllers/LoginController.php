<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    function index(){
        return view('login.index');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $inputLogin = $request->only('email', 'password');
        $user = User::where('email', $inputLogin['email'])->first();
        if($user && Hash::check($inputLogin['password'], $user->password)){
            Auth::login($user);

            if($user->role == 'admin'){
                return redirect('/admin');
            }else if($user->role === 'member'){
                return redirect('/member');
            }else{
                return redirect('/guest');
            }
        }
        return back()->withErrors(['email' => 'Email/Password Tidak Sesuai']);
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
