<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new Member();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::guard('member')->attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')
            ->withErrors(['email' => 'Invalid email', 'password' => 'Invalid password'])
            ->withInput();
        }        
    }


    public function dashboard()
    {
        if (Auth::guard('member')->check()) {
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('member')->logout();
        return redirect()->route('login');
    }
}
