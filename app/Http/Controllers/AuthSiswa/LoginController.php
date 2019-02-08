<?php

namespace App\Http\Controllers\AuthSiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:siswa')->except('logout');
    }

    public function showLogin()
    {
        return view('user.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'nisn' => $request->nisn,
            'password' => $request->password,
        ];
        if (Auth::guard('siswa')->attempt($credential, $request->member)) {
            return redirect()->intended(route('user.home'));
        }

        return redirect()->back()->withInput($request->only('nisn'));
    }
}
