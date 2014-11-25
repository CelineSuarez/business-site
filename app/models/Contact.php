<?php

class Contact extends Eloquent {

	protected $fillable = array('name', 'email', 'comments');

	public static $rules = array(
		'name'             => 'required', 						// just a normal required validation
		'email'            => 'required|email|unique:subscribed', 	// required and must be unique in the ducks table
		'comments' 		   => 'required',        // required and has to match the password field
	);

}