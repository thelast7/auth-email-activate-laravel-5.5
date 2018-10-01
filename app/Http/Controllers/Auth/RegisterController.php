<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Events\Auth\UserActivationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'gender' => 'required',
            'no_hp' => 'required|string|min:10',
            'password' => 'required|string|min:6|confirmed',
            'kota' => 'required|string',
            'avatar' => 'mimes:jpg,png,jpeg|max:10240',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],  
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],  
            'no_hp' => $data['no_hp'],
            'ktp' => $data['ktp'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'kota' => $data['kota'],
            'alamat' => $data['alamat'],
            'avatar' => $data['avatar'],
            'active' => false,
            'activation_token' => str_random(50)
        ]);
    }

    protected function registered(Request $request, $user)
    {
        //kirim email
        event(new UserActivationEmail($user));

        $this->guard()->logout();

        return redirect()->route('login')
            ->withSuccess('Registrasi berhasil, silahkan cek email untuk mengkonfirmasi akun anda');
    }
}
