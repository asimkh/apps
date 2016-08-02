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
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
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
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Redirect the user to the  authentication page.
     *
     */

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Obtain the user information from network.
     *
     */

    public function handleProviderCallback()
    {


        /*

        dd($user = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'])->user());

        */
        try {

            $user = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday','about','bio','hometown','languages','locale','location','religion','relationship_status','timezone','website','work'])->user();

           //dd($user->user['first_name']);
           //dd($user);

        } catch (Exception $e) {

            return redirect('facebook');
        }

        
        //$user->user['first_name']
       
        $authUser = $this->findOrCreateUser($user);
        
        Auth::login($authUser, true);

      
        
      
        return redirect()->route('home')->with('message',  'Welcome '
         . Auth::user()->firstname . ', 
          you logged successfully');
        
        
        
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
            'firstname' => $facebookUser->user['first_name'],
            'lastname' => $facebookUser->user['last_name'],
            'email' => $facebookUser->user['email'],
            'gender' => $facebookUser->user['gender'],
            'facebook_user_id' => $facebookUser->id,
            'photo' => $facebookUser->avatar
        ]);
    }



    


}
