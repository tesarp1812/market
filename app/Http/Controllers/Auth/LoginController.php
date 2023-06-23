<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function redirectTo()
    {
        // if (Auth::user()->role == 'admin') {
        //     $this->redirectTo == route('manajemen_barang');
        //     return $this->redirectTo;
        // } else {
        //     $this->redirectTo = route('homepage', Auth::user()->id);
        //     return $this->redirectTo;
        // }
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
