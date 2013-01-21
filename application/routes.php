<?php

//No controller
// Route::get('/', function()
// {
// 	return View::make('home.index');
// });
// Route::get('contact', function()
// {
// 	return View::make('home.contact');
// });
//Register route controller 
Route::get('/', 'home@index');
Route::get('about', 'home@about');
Route::get('contact', 'home@contact');
Route::get('test', 'home@test');

// Route::get ('/', function() {
// 	// $title = "Newest";
// 	// $body = "kljalf;hagjhaslfkgalkfj";
//  	// $posts = DB::query('INSERT INTO posts (title, body) VALUES(:title, :body)', array($title, $body));
// 	$posts = DB::query('SELECT * FROM posts');
// 	$post = DB::only('SELECT title FROM posts WHERE id=1'); //grab the column value only
// 	//dd($post); //vardump and die helper

// 	//$posts2 = DB::table('posts')->get(); //same as SELECT * FROM posts
// 	//$posts2 = DB::table('posts')->where('id', '=', '1')->get();
// 	//Fluent
// 	$posts2 = DB::table('posts')
// 					->where('id', '<>', '1')
// 					->or_where('title', '=', 'another title')
// 					->order_by('title', 'desc')
// 					->take(2)
// 					->get();
// 	//dd($posts2);
// 	//ORM Eloquent
// 	$users = User::all();
// 	$user = User::find(1)->email;

// 	//dd($user);
// 	return View::make('home.index')->with('users', $users);
// });

// Route::get('about', function() {
// 	// $greeting = "Hello";
// 	// $farewell = "Goodbye";
// 	// $data = array(
// 	// 	'greeting' => $greeting,
// 	// 	'farewell' => $farewell
// 	// );
// 	//1:
// 	// return View::make('home.about')->with('greeting', $greeting);
// 	//2:
// 	//return View::make('home.about')->with(array(
// 	//	'greeting' => $greeting,
// 	//	'farewell' => $farewell
// 	//));
// 	//return View::make('home.about', $data);
// 	//3:
// 	$view = View::make('home.about');
// 	$view->greeting = "Kunichiwa";
// 	$view->farewell = "Sianara";
// 	return $view;
// });

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