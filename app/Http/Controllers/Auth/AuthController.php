<?php

namespace App\Http\Controllers\Auth;
use Hash;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use Socialite;
use Auth;




class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

   

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()

    {
       
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

        

   

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('facebook');
        }
 
        $authUser = $this->findOrCreateUser($user);
        

        // stroing data to our use table and logging them in
    $data = [
        'name' => $user->getName()


    ];
    
    
        
        Auth::login($authUser, true);

    
        return redirect()->route('home')->with('message',  'Welcom ' . Auth::user()->username . ',  you logged successfully');
    }


    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_user_id', $facebookUser->id)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'username' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_user_id' => $facebookUser->id,
            'photo' => $facebookUser->avatar
        ]);
    }



    


}
