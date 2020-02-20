<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\RegisterRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('register');
    }

    public function create(RegisterRequest $request)
    {   
        $user     = User::create($request->input());
        $user->personalInfo()->create();

        $userType = '';
        if ($user->user_type === 'Expert') {
            $userType = '\App\Models\ExpertProfile';
        } else {
            $userType = '\App\Models\EventOrganizerProfile';
        }

        $userType::create([
            'personal_info_id' => $user->personalInfo->id
        ]);

        return redirect()
                ->route('login')
                ->withSuccess('Successfully account created');
    }
}
