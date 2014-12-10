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
	return View::make('pages.home');
});

Route::get('about', function()
{
	return View::make('pages.about');
});

Route::get('services', function()
{
	return View::make('pages.services');
});

Route::get('contact', function()
{
	return View::make('pages.contact');
});

// route to process the contact us form
Route::post('contact', function(){

	$rules = array(
		'name'             => 'required', 						// just a normal required validation
		'email'            => 'required|email|unique:subscribed', 	// required and must be unique in the ducks table
		'comments'         => 'required'
	);

		// do the validation ----------------------------------
	// validate against the inputs from our form
	$validator = Validator::make(Input::all(), Contact::$rules);

	// check if the validator failed -----------------------
	if ($validator->fails()) {

		// get the error messages from the validator
		$messages = $validator->messages();

		// redirect our user back to the form with the errors from the validator
		return Redirect::to('contact')
			->withErrors($validator);

		} 
		else {

		// validation successful ---------------------------
			Mail::send('pages.email', array($rules), function($message)
			{
			    $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
			});
		}	
	

	


});




