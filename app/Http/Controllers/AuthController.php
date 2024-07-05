<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
                'terms' => 'required',
            ],
            [
                'terms.required' => 'Anda harus menyetujui persyaratan dan ketentuan.',
            ]
        );

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->intended('/login')->with('toast_success', 'Akun anda berhasil dibuat!');;
    }

    /**
     * Display the specified resource.
     */
    public function login_check(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, regenerate session
            $request->session()->regenerate();

            // Redirect ke halaman yang diinginkan setelah login
            return redirect()->intended('/pegawai');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'Maaf email atau password yang anda masukkan salah!',
        ])->withInput($request->except('password'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
