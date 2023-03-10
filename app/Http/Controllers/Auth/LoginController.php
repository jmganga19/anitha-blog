<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

   public function username()
   {
    return 'username';

   }

     public function Authenticated()
     {

           if(Auth::user()->role_as == '1')
           {
                return redirect('admin/dashboard')->with('status','Welcome to admin dashborad');
           }

           else if(Auth::user()->role_as == '0')
           {

            return redirect('/home')->with('status','Logged in Successfully');

           }

           else

           {
            return redirect('/');

           }
     }

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
