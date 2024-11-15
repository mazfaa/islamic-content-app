<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Str;

class AuthenticatedSessionController extends Controller
{
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  public function handleGoogleCallback()
  {
    try {
      $googleUser = Socialite::driver('google')->stateless()->user();

      // Cari atau buat pengguna berdasarkan email Google
      $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()],
        [
          'name' => $googleUser->getName(),
          'email_verified_at' => now(),
          'password' => bcrypt(Str::random(24)), // Password random untuk keamanan
        ]
      );

      // Login pengguna
      Auth::login($user);

      return redirect()->intended('/'); // Arahkan ke halaman setelah login
    } catch (\Exception $e) {
      return redirect('/login')->withErrors('Gagal login dengan Google');
    }
  }
  /**
   * Display the login view.
   */
  public function create(): View
  {
    return view('auth.login');
  }

  /**
   * Handle an incoming authentication request.
   */
  public function store(LoginRequest $request): RedirectResponse
  {
    $request->authenticate();

    $request->session()->regenerate();

    return redirect()->intended(route('dashboard', absolute: false));
  }

  /**
   * Destroy an authenticated session.
   */
  public function destroy(Request $request): RedirectResponse
  {
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
