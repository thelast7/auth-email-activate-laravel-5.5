<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authendticated(Request $request, $user)
    {
        if ($user->role === 'admin,author,penjual') {
            return redirect()->intented('backend/dashboard');
        }
        return redirect()->intented('/');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => [
                'required','string',
                Rule::exists('users')->where(function ($query){
                    $query->where('active', true);
                })
            ],
            'password' => 'required|string',
        ], $this->validationError());
    }

    public function validationError()
    {
        return [
            $this->username() . '.exists' => 'Silahkan Cek Email Anda Untuk Aktivasi Akun'
        ];
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/')->withDanger('Anda Berhasil Log out!');
    }
}
