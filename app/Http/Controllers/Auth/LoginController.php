<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\LoginRequest;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\CountValidator\AtMost;

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

    private $userRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

        $this->userRepo = new UserRepository;
    }

    // public function redirectToDashboard()
    // {
    //     $userType = Auth::user()->user_type;
        
    //     switch ($userType) {
    //         case 'Expert':
    //             return redirect()->route('expertHome');
            
    //         case 'Event Organizer':
    //             return redirect()->route('eventOrgHome');
    //     }
    // }

    /**
     * Homepage of the app
     * 
     * @return void
     */
    public function index()
    {
        return view('login');
    }

    /**
     * R
     * 
     */
    public function login(LoginRequest $request)
    {
        $authUser = $this->validateUserLogin($request->input('email'), $request->input('password'));
        
        if (Auth::check()) {
            if (Auth::user()->user_type == 'Expert')
                return redirect()->route('expertHome');
            
            if (Auth::user()->user_type == 'Event Organizer')
                return redirect()->route('eventOrgHome');
        }
        
        return redirect()->route('login')->withErrors('Invalid email/password');
    }
    
    private function validateUserLogin(string $email, string $password)
    {
        $user = $this->userRepo
                ->getUser($email);
        
        if ($user !== null) {
            if (Hash::check($password, $user->password)) {
                Auth::login($user);
                
                return true;
            }
        }

        return false;
    }
}
