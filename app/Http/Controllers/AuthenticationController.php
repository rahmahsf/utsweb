<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexlogin()
    {
        return view('auth.login');
    }

    public function indexregister()
    {
        return view('auth.register');
    }

    public function authentication(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // dd($credential);
        //! attempt dibawah ini jika ingin attempt costum
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])) {
            $request->session()->regenerate();
            // dd($request);
            return redirect()->route('dashboard.index');
        }
        // dd('fail');
        return back()->with('status_fail','Email atau Password Salah');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
    
    public function createUser(Request $request){
        // dd($request);
        $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
        ]);
        return redirect()->route('login');
    }
}
