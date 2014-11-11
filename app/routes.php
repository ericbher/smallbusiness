<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});



Route::post('/', function()
{

$rules = array(
	'email' => 'required|email'
);


$validation = Validator::make(Input::all(), $rules);


if ($validation->fails())
{
	return Redirect::to('/')
	->withInput()
	->withErrors($validation);
} 
else
{
	$subscriber = Subscriber::where('email','=', Input::get('email') )
	->first();



	if ($subscriber) 
	{
		return Redirect::to('/')
		->withInput() //with old input
		->with('email', $subscriber->email);
	}

	else
	{
		Subscriber::create(array('email' => Input::get('email')));
		return Redirect::to('/')
		->with('message', 'Thanks for signing up!');
	}
}

});

Route::get('/contact', function()
{
	return View::make('contact');
});