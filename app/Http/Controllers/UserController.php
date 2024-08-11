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
            session(['level' => $user->level]);

            if ($user->level == 0) {
                return redirect('/home')->with('success', 'Login berhasil, selamat datang kembali!');
            } else {
                return redirect('/vendor')->with('success', 'Login berhasil, selamat datang kembali!');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/')->with('success', 'Logout berhasil');
    }

    public function profile()
    {
        if (!session('username')) {
            return redirect('/login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $user = DB::table('username')->where('username', session('username'))->first();
        $customer = DB::table('customer')->where('id_cust', $user->id)->first();
        $requests = DB::table('request')
            ->select('request.*', 'product.*', 'vendor.rating', 'vendor.nama', 'vendor.photo')
            ->join('product', 'request.id_product', '=', 'product.id_product')
            ->join('vendor', 'product.id_vendor', '=', 'vendor.id_vendor')
            ->where('request.id_cust', $user->id)->get();
        $questions = DB::table('question')
            ->select('question.*', 'vendor.*')
            ->join('vendor', 'question.id_vendor', '=', 'vendor.id_vendor')
            ->where('question.id_cust', $user->id)->get();

        return view('profile', ['user' => $customer, 'requests' => $requests, 'questions' => $questions]);
    }
}
