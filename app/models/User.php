<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subscribed';
	protected $fillable = array('name', 'email', 'comments');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}

class Contact extends Eloquent {

	protected $fillable = array('name', 'email', 'comments');

	public static $rules = array(
		'name'             => 'required', 						// just a normal required validation
		'email'            => 'required|email|unique:subscribed', 	// required and must be unique in the ducks table
		'comments' 		   => 'required',        // required and has to match the password field
	);

}