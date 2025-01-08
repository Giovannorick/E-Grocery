<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MaintenanceController extends Controller
{
    public function accountMaintenancePage() {
        $users = Account::all();

        return view('accMaintenance')->with(['users' => $users]);
    }

    public function updateRole($id) {
        $user = Account::find($id);

        return view('updateRole')->with(['user' => $user]);
    }

    public function updateAccRole(Request $request) {
        $rules = ['role' => 'required',];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = Account::find($request->id);
        $user->role_id = $request->role;
        $user->save();

        return back()->with("status","Account Role Change Successfully!");
    }

    public function deleteRole($id) {
        $user = Account::find($id);
        $user->delete();

        return back()->with("status","Delete Role Successfully!");
    }
}
