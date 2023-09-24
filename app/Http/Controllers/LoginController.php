<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:30|unique:users',
            'name' => 'required|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Coba membuat pengguna baru
        try {
            User::create($validateData);
            return redirect('/login')->with('register', 'register berhasil! please login');
        } catch (\Exception $e) {
            // Jika ada kesalahan saat membuat pengguna, kirim respons JSON dengan pesan kesalahan
            return response()->json(['error' => $e->getMessage()], 422);
        }
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->with('failed', 'login error');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
