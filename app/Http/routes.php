<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*

Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'PagesController@home');


Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);




/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
|

*/

Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@signup'
	]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
	]);



/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
|

*/

Route::get('login', [
	'as' => 'user_login',
	'uses' => 'LoginController@login'
	]);

Route::post('login', [
	'as' => 'user_login',
	'uses' => 'LoginController@detect'
	]);



/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|

*/

Route::get('about', [
	'as' => 'about',
	'uses' => 'PagesController@about'
	]);


Route::get('privacy', [
	'as' => 'privacy',
	'uses' => 'PagesController@privacy'
	]);

Route::get('terms', [
	'as' => 'terms',
	'uses' => 'PagesController@terms'
	]);

/*
|--------------------------------------------------------------------------
| Shout
|--------------------------------------------------------------------------
|

*/

Route::get('shout', [
	'as' => 'give_shout',
	'uses' => 'ShoutController@giveShout'
	]);

Route::post('shout', [
	'as' => 'sendmail',
	'uses' => 'ShoutController@sendmail'
	]);


/*
|--------------------------------------------------------------------------
| mail
|--------------------------------------------------------------------------
|

*/

Route::get('mail', function(){

	//dd(Config::get('mail'));
	//return "Test Mail!";

	
	Mail::send('pages.mail.test',
		['user' => 'Tasol'],
	function($message) 
		
	{
    
    $message ->from('hazzir.mail@gmail.com', 'Hazzir Mail');
	$message ->to('hazzir.mail@gmail.com', 'Test User')->subject('Feedback Hazzir ~ Test');

	
	});

    	return "Send Mail Successfully!";

  

});


Route::get('testmail', 'ShoutController@Testmail');


/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
|

*/

Route::get('profile', [
	'as' => 'profile',
	'uses' => 'profileController@user'
	]);


/*
|--------------------------------------------------------------------------
| DB
|--------------------------------------------------------------------------
|

*/

/*
Route::get('db', [
	'as' => 'db',
	'uses' => 'dbController@db'
	]);
	*/

Route::get('db', function () {
    return DB::table('posts')->get();
});


/*
|--------------------------------------------------------------------------
| Faceboook
|--------------------------------------------------------------------------
|

*/


Route::get('1038170566278633', [
	'as' => 'fb_hazzir',
	'uses' => 'FBController@home'
	]);


Route::match(['get', 'post'], '/facebook/canvas', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    try {
        $token = $fb->getCanvasHelper()->getAccessToken();
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        // Failed to obtain access token
        dd($e->getMessage());
    }

   // $token will be null if the user hasn't authenticated your app yet
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
    Session::put('fb_user_access_token', (string) $token);

    // Get basic info on the user from Facebook.
    try {
        $response = $fb->get('/me?fields=id,name,email');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

return redirect('/')->with('message', 'Successfully logged in with Facebook Canvas');

});

Route::get('/facebook/login', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {

	$login_link = $fb->getLoginUrl();
	/*
    $login_link = $fb
            ->getRedirectLoginHelper()
            ->getLoginUrl('http://localhost.com:8000/facebook/callback', ['email', 'user_events']);
            */

    echo '<a href="' . $login_link . '">Log in with Facebook</a>';
});

/*
Route::get('/facebook/login', [
	'as' => 'fb_login',
	'uses' => 'FBController@login'
	]);
	*/
// Endpoint that is redirected to after an authentication attempt
Route::get('/facebook/callback', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
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
    Session::put('fb_user_access_token', (string) $token);

    // Get basic info on the user from Facebook.
    try {
        $response = $fb->get('/me?fields=id,name,email');
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
    }

    // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
    //$facebook_user = $response->getGraphUser();

    // Create the user if it does not exist or update the existing entry.
    // This will only work if you've added the SyncableGraphNodeTrait to your User model.
    //$user = App\User::createOrUpdateGraphNode($facebook_user);

    // Log the user into Laravel
    //Auth::login($user);

    return redirect('/')->with('message', 'Successfully logged in with Facebook');
});



