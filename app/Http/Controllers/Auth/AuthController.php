<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\WpUser;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MikeMcLin\WpPassword\Facades\WpPassword;
use Exception;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function __construct()
    {
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('courses');
        } else {
            return view('login');
        }
    }
    public function postLogin(LoginRequest $request)
    {
        try {
            $credentials = $request->only('user_email', 'user_pass');
            $userWp = WpUser::where('user_email', $credentials['user_email'])->first();
            if ($userWp && WpPassword::check($credentials['user_pass'], $userWp->user_pass)) {
                $user = User::firstOrCreate(
                    ['email' => $userWp->user_email],
                    [
                        'name' => $userWp->user_login, 
                        'email' => $userWp->user_email, 
                        'password' => $userWp->user_pass
                    ]
                );
                Auth::login($user);
                return redirect()->route('courses');
            }
            return redirect()->back()->withErrors(['user_email' => 'These credentials do not match our records.']);
        } catch (Exception $e) {
            Log::error('Error during login: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred during login. Please try again.']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
