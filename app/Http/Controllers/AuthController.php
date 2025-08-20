<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            "email"=> "required|email",
            "password"=> "required|string",
        ]);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->id_level == 2) {
                return redirect()->route("pic")->with("success","Login berhasil");
            } elseif(Auth::user()->id_level == 3) {
                return redirect()->route("instructor")->with("success","Login berhasil");
            } elseif(Auth::user()->id_level == 4) {
                return redirect()->route("student")->with("success","Login berhasil");
            } else{
                return redirect()->route("leader")->with("success","Login berhasil");
            }
        }
        return back()->withErrors([
            "email"=> "Email atau password salah",
        ])->onlyInput("email");
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login')->with('status','Logout berhasil');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
