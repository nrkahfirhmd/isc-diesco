<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function registerView()
    {
        if (!session('step')) {
            session(['step' => '1']);   
        }
        
        // dd(session('step'));

        return view('register');
    }

    public function loginAuth(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('username')->where('username', $username)->first();

        if ($user && Hash::check($password, $user->password)) {
            session(['username' => $username]);
            session(['id' => $user->id]);

            if ($user->level == 0) {
                return redirect('/home')->with('success', 'Login berhasil, selamat datang kembali!');
            } else {
                return redirect('/home')->with('success', 'Login berhasil, selamat datang kembali!'); // to be changed
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }
}
