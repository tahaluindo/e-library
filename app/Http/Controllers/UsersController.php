<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function user() {
        $user = [
            'role' => Role::all(),
            'dataUser' => User::all()
                ];
            return view('admin.pages.users.dataUser', $user);
    }

    public function deleteUser($id) {
        User::where('id', $id)->delete();
        return redirect()->route('user')->with('success','Berhasil dihapus');
    }

}
