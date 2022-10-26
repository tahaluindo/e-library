<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Anggota;
use App\Models\Pengguna;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller {

    public function index() {

        $data = [
            'title' => 'Login',
        ];

        if (Auth::user() != null) {
            return redirect()->route('home');
        } else {
            return view('auth.signin', $data);
        }
    }

    public function signup() {
        return view('auth.signup');
    }


    public function login(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        try{
            $user = User::where('name', $request->name);

            // return dd($user->with('role')->first());ww
            if($user->count() > 0) {
                if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
                    $user = $user->with('role')->first();

                    if($user->role->name == 'admin') {
                        return redirect()->route('home');
                    } else {
                        return redirect()->route('dashboard');
                    }
                } else {
                    return redirect()->back()->withErrors(['message' => 'password tidak sesuai']);
                }
            } else {
                return redirect()->back()->withErrors(['message' => 'Username tidak sesuai']);
            }
        } catch(Exception $e){
            return redirect()->route('index')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function register(Request $request){

        try {
            $request->merge(['name' => $request->name, 'password' => Hash::make($request->password), 'role_id' => 2]);
            User::create($request->only(['name', 'role_id', 'email', 'password']));

            return redirect()->route('index');
        } catch(Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
