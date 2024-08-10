<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    var $username;
    var $email;
    var $telp;
    var $level;
    var $otp;

    public function authStepOne(Request $request)
    {
        $this->username = $request->input('username');
        $this->email = $request->input('email');
        $this->telp = $request->input('telp');
        $this->level = $request->input('level');

        session(['username' => $this->username]);
        session(['email' => $this->email]);
        session(['telp' => $this->telp]);
        session(['level' => $this->level]);

        // dd($this->level);

        session(['step' => 2]);

        $code = $this->getRandomOTP();

        session(['otp' => $code]);
        session(['otp-alert' => '1']);

        return redirect('/register')->with('warning', 'Kode OTP: ' . $code);
    }

    public function authStepTwo(Request $request)
    {
        $this->otp = $request->input('otp');

        $this->otp = implode('', $this->otp);

        // dd($this->otp);

        if ($this->otp == session('otp')) {
            session(['step' => 3]);
        }

        return redirect('/register');
    }

    public function authStepThree(Request $request)
    {
        $password = $request->input('password');
        $retype = $request->input('retype');

        $username = session('username');
        $level = session('level');

        if ($password == $retype) {
            $id = $this->getRandomID();

            DB::table('username')->insert([
                'username' => $username,
                'password' => Hash::make($password),
                'level' => $level,
                'id' => $id
            ]);

            if ($level == 1) {
                DB::table('vendor')->insert([
                    'id_vendor' => $id,
                    'nama' => $username,
                    'email' => session('email'),
                    'no_telp' => session('telp'),
                    'photo' => "tba",
                    'deskripsi' => "tba",
                    'pro' => false,
                    "rating" => 0
                ]);
            } else {
                DB::table('customer')->insert([
                    'id_cust' => $id,
                    'nama' => $username,
                    'email' => session('email'),
                    'no_telp' => session('telp'),
                    'photo' => "tba"
                ]);
            }
        }

        session()->forget(['username', 'level', 'email', 'telp', 'otp', 'otp-alert', 'step']);

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
    }

    public function getRandomOTP()
    {
        $otp = rand(0000, 9999);

        return $otp;
    }

    public function getRandomID()
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $id = '';
        $length = 6;

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $id .= $characters[$index];
        }

        return $id;
    }
}
