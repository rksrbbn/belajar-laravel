<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi password user
        // $user['password'] = bcrypt($user['password']);
        $user['password'] = Hash::make($user['password']);

        User::create($user);

        return redirect('/login')->with('success', 'Registrasi Berhasil, silahkan login.');
    }
}
