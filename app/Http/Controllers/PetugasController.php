<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function loginPetugasView()
    {
        return view('auth.login-petugas');
    }
    public function loginPetugas(Request $request)
    {

        // validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // cek login pakai guard petugas
        if (Auth::guard('petugas')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.petugas')
                ->with('success', 'Selamat datang, ' . Auth::guard('petugas')->user()->nama);
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function logoutPetugas(Request $request)
    {
        Auth::guard('petugas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.petugas')
            ->with('success', 'Anda sudah logout.');
    }

    public function index()
    {   
        $petugas = Petugas::all();
        return view('dashboard.manage-petugas.index', compact('petugas'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'Anda berhasil logout.');
    }
}
