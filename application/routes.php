<?php

//No controller, logic in closure
// Route::get('/', function()
// {
// 	return View::make('home.index');
// });
//
//Manually register individual routes
// Route::get('/', 'home@index');
// Route::get('about', 'home@about');
// Route::get('contact', 'home@contact');
// Route::get('test', 'home@test');
// Route::get('/users', 'users@index');

//Register route controllers 
// Route::controller('home');
// Route::controller('users');
// or
//Route::controller(array('home', 'users'));

//Named route - good for REST
// Route::get('users', array('as' => 'users', 'uses' => 'users@index')); //get all users
// Route::get('users/(:any)', array('as' => 'user', 'uses' => 'users@show')); //show 1 user
// Route::get('users/new', array('as' => 'new_user', 'uses' => 'users@new')); //create form for adding new user

//overrides
Route::get('/', 'home@index');
Route::get('about', 'home@about');
Route::get('contact', 'home@contact');
Route::get('portfolio', 'home@portfolio');

// !!! - quick and dirty manual auth 
Route::get('/users', function() {
 	// $user = User::find(1);
 	// $user->password = Hash::make('1');
 	// $user->save();
	$creds = array(
		'username' => 'test', //would come from form
		'password' => '1' //would come from form
	);
	if (Auth::attempt($creds)) {
		//redirect to admin
		//if (Auth::check()) { return "session set"; }
		//return $creds->username . ' logged in.';
		return Redirect::to('admin');
	}
	return "Unauthorized access";
});

Route::get('logout', function() {
	Auth::logout();
	//Redirect::to('login form')
	return "logged out";
});

Route::get('login', function() {
	return "sign in here";
});

Route::get('admin', array('before' => 'auth', function() {
	$user = Auth::user();
	dd($user);
	return 'private admin area';
}));

// Route::get('users', 'users@index');
// Route::get('users/(:any)/edit', 'users@edit');

//Detect automatically
Route::controller(Controller::detect());

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

//!!! DEV only
// Event::listen('laravel.query', function($sql) {
// 	echo "SQL: {$sql} <br/>";
// });

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});