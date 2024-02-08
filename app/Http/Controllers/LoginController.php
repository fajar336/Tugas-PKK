<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $validasi=Validator::make($request->all(),[
            'email'=>'required|email:dns',
            'password'=>'required',
        ]);
        if($validasi->fails()){
            return redirect()->back()->withErrors($validasi)->withInput();
        }
        if (Auth::attempt(['email' => $request->email,'password'=> $request->password])){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['gagal'=> 'email atau password salah']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
