<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(Request $r)
    {
        $rules = [
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'role' => 'required',
            'gender' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'display_picture' => 'required',
        ];

        $validate = Validator::make($r->all(), $rules);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $file = $r->file('display_picture');
        $display_picture = $r->first_name . "-" . time() . '.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/image/display_picture', $file, $display_picture);

        Account::create([
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'role_id' => $r->role,
            'gender_id' => $r->gender,
            'display_picture_link' => $display_picture,
        ]);

        return back()->with("status", "Register User Successfully!");
        
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $r)
    {
        if($r->remember_me) {
            Cookie::queue('email', $r->email);
            Cookie::queue('password', $r->password);
        }else{
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
        }

        $validate = Auth::attempt([
            'email' => $r->email,
            'password' => $r->password
        ]);

        if ($validate) {
            return redirect('/home');
        }else{
            return back()->withErrors("Email or Password Doesn't Matched!");
        }

        
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return view('logout');
    }


}
