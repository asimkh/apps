<?php

namespace App\Http\Controllers\Auth;
use Hash;
//use App\User;
use App\Models\User;
use App\Models\Profile;
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

    /* FB canvas*/

    public function FBcanvas(LaravelFacebookSdk $fb)
    {
     
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes']; // optional
    $loginUrl = $helper->getLoginUrl(env('FACEBOOK_RECALL_URL'), $permissions);
    
    //return \Redirect::to($loginUrl);

        return view('pages.facebook.canvas');

    }


     public function FBrecall(LaravelFacebookSdk $fb)
    {
     
       return view('pages.facebook.canvas');

    }


    /* FB Login User*/


    public function FBLogin(LaravelFacebookSdk $fb)
    {
     
        $permissions = [
        'public_profile',
        'email',
        'user_likes',
        'user_relationships',
        'user_photos',
        'publish_actions',
        'read_custom_friendlists',
        'user_actions.video',
        'user_posts',
        'user_about_me',
        'user_birthday',
        'user_website',
        'user_hometown',
        'user_likes',
        'user_work_history',
        'user_religion_politics',
        'user_location',
        'user_education_history',
        'user_status'
        ]; // optional
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
        $response = $fb->get('/me?fields=email,first_name,last_name,gender,birthday,about,bio,picture.type(large),hometown,location,timezone,religion,website,work,relationship_status');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

    // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
    $facebook_user = $response->getGraphUser();
    //dd($facebook_user);
    $user = User::createOrUpdateGraphNode($facebook_user);

    //dd( $user);

    // Create the user if it does not exist or update the existing entry.
    // This will only work if you've added the SyncableGraphNodeTrait to your User model.
    
    // try {
    //     $response = $fb->get('/me?fields=about,hometown,location,timezone,id,email,first_name,last_name,gender,birthday,about,bio,picture.type(large),hometown,location,timezone,religion,website,work,relationship_status');
    // } catch (Facebook\Exceptions\FacebookSDKException $e) {
    //     dd($e->getMessage());
    // }
    // $facebook_profile= $response->getGraphUser();
    // $userProfile = Profile::with('user')->whereuser_id($user->id)->createOrUpdateGraphNode($facebook_profile);
    //dd($user->id);
    $profile = Profile::with('user')->whereuser_id($user->id)->first();
     //$profile = Profile::with('user')->whereuser_id($user->id)->createOrUpdateGraphNode($facebook_user);

    
    

    if (empty($profile)) {

/*
        $user = new User;
        $user->name = $me['first_name'].' '.$me['last_name'];
        $user->email = $me['email'];
        $user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';

        $user->save();
*/
        $profile = new Profile();
        
        $profile->user_id = $user->id;
        $profile->photo = $facebook_user['picture']['url'];
        $profile->gender = $facebook_user['gender'];
        $profile->about = $facebook_user['about'];
        $profile->birthday = $facebook_user['birthday'];
        $profile->home_town = $facebook_user['hometown']['name'];
        $profile->location = $facebook_user['location']['name'];
        $profile->timezone = $facebook_user['timezone'];
        $profile->save();
    }
    else{

        
        $profile->photo = $facebook_user['picture']['url'];
        $profile->gender = $facebook_user['gender'];
        $profile->about = $facebook_user['about'];
        $profile->birthday = $facebook_user['birthday'];
        $profile->home_town = $facebook_user['hometown']['name'];
        $profile->location = $facebook_user['location']['name'];
        $profile->timezone = $facebook_user['timezone'];
        $profile->save();

    }

    //dd($user->profile->toArray());
    // Log the user into Laravel
    Auth::login($user);


     return redirect()->route('home')->with('message', ' Successfully logged in with Facebook');

   

    }
    


    


}

///

