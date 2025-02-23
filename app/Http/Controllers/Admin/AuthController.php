<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Kayıt işlemi
    public function register(Request $request)
    {
        //Validasyonlar
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:5',
        ]);

        // Kullanıcıyı oluştur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Kullanıcıyı otomatik olarak giriş yap
        Auth::login($user);

        // Anasayfaya yönlendir
        return redirect()->route('yonetim.index');
    }

    // Giriş işlemi
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Giriş bilgilerini kontrol et
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('yonetim.index');
        }

        // Başarısız giriş hatası
        return back()->withErrors([
            'email' => 'Bu bilgilerle giriş yapılamadı.',
        ]);
    }

    // Çıkış işlemi
    public function logout(Request $request)
    {
        Auth::logout();  // Çıkış
        $request->session()->invalidate();  // Oturum geçersiz kılma
        $request->session()->regenerateToken();  // CSRF token yenileme

        return redirect()->route('auth.login');  // Giriş sayfasına yönlendirme
    }
}
