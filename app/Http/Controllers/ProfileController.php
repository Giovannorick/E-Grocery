<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profile() {
        $user = Auth::user();

        return view('profile')->with(['user' => $user]);
    }

    public function updateProfile(Request $request) {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'gender' => 'required',
            'display_picture' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $file = $request->file('display_picture');
        $display_picture = $request->first_name . "-" . time() . '.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images/display_picture', $file, $display_picture);

        $user = Account::find(Auth::id());
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender_id' => $request->gender,
            'display_picture_link' => $display_picture,
        ]);

        // return back()->with("status", "Profile Updated Successfully!");
        return view('saved');
    }
}
