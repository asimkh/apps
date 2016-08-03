<?php

namespace App\Http\Controllers\Auth;
use Hash;
//use App\User;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;
use Socialite;
use Auth;
use Session;



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


    public function FBcanvas(LaravelFacebookSdk $fb)
    {
     
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl(env('FACEBOOK_RECALL_URL'), $permissions);
    
    return \Redirect::to($loginUrl);

       //return view('pages.facebook.canvas');

    }


     public function FBrecall(LaravelFacebookSdk $fb)
    {
     


       return view('pages.facebook.canvas');

    }


    public function FBLogin(LaravelFacebookSdk $fb)
    {
     
        $permissions = ['email', 'user_likes']; // optional
       return \Redirect::to($fb->getLoginUrl($permissions));

    }

     public function FBcallback(LaravelFacebookSdk $fb)
    {
     
 // Obtain an access token.
    try {
        $token = $fb->getAccessTokenFromRedirect();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

     // Access token will be null if the user denied the request
    // or if someone just hit this URL outside of the OAuth flow.
    if (! $token) {
        // Get the redirect helper
        $helper = $fb->getRedirectLoginHelper();

        if (! $helper->getError()) {
            abort(403, 'Unauthorized action.');
        }

        // User denied the request
        dd(
            $helper->getError(),
            $helper->getErrorCode(),
            $helper->getErrorReason(),
            $helper->getErrorDescription()
        );
    }





    if (! $token->isLongLived()) {
        // OAuth 2.0 client handler
        $oauth_client = $fb->getOAuth2Client();

        // Extend the access token.
        try {
            $token = $oauth_client->getLongLivedAccessToken($token);
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
    }

    $fb->setDefaultAccessToken($token);

    // Save for later
    Session::put('remember_token', (string) $token);

    // Get basic info on the user from Facebook.
    try {
        $response = $fb->get('/me?fields=id,name,email,first_name,last_name,gender,birthday,about,bio,picture.type(large)');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

    // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
    $facebook_user = $response->getGraphUser();
    //dd($facebook_user['picture']['url']);
    // Create the user if it does not exist or update the existing entry.
    // This will only work if you've added the SyncableGraphNodeTrait to your User model.
    //$user = User::createOrUpdateGraphNode($facebook_user);
     $user = $this->createOrUpdateGraphNode($facebook_user);
    
    // Log the user into Laravel
    Auth::login($user);


     return redirect()->route('home')->with('message', 'Successfully logged in with Facebook');

   

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
            'username','first_name', 'last_name', 'email', 'gender', 'birthday','about','bio','hometown','languages','locale','location','religion','relationship_status','timezone','website','work'])->user();

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


    private function createOrUpdateGraphNode($facebookUser)
    {
        $authUser = User::where('facebook_user_id', $facebookUser['id'])->first();
 
        if ($authUser){
            $authUser->touch();

/*
            $authUser = User::where('facebook_user_id', '>', $facebookUser['id'])->update(array(

            'firstname' => $facebookUser['first_name'],
            'lastname' => $facebookUser['last_name'],
            'email' => $facebookUser['email'],
            'gender' => $facebookUser['gender'],
            'facebook_user_id' => $facebookUser['id'],
            'photo' => $facebookUser['picture']['url']

                ));
            
            */
                return $authUser;
        }
 
        return User::create([
            'firstname' => $facebookUser['first_name'],
            'lastname' => $facebookUser['last_name'],
            'email' => $facebookUser['email'],
            'gender' => $facebookUser['gender'],
            'facebook_user_id' => $facebookUser['id'],
            'photo' => $facebookUser['picture']['url']
            
        ]);
    }



    


}
