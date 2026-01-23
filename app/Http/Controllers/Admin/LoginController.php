<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where("email", $request->email)->first();
        if ($user->isAn('admin')) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
            return view('admin.login', ['error' => 'password incorrecto']);
        }
        return view('admin.login', ['error' => 'Solo para administradores']);
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
