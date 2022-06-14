<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function updateUser(Request $request) {
        $success = UserModel::where('id', $request->id)
            ->update(['name' => $request->name])
            ->update(['email' => $request->email])
            ->update(['password' => $request->password])
            ->update(['profile_picture' => $request->foto_profile]);

        if ($success) {
            return redirect('/home');
        }
    }
}
