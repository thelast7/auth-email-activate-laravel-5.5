<?php

namespace App\Http\Controllers\Backend\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

/**    protected function validateLogin(Request $request)
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
            $this->username() . '.exists' => 'Silahkan cek email anda untuk aktivasi akun'
        ];
    }
*/
    public function showLoginForm()
    {
        return view('backend.authadmin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credential, $request->member)){
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
