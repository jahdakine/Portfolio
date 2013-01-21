<?php
/**
 * Set the key => config values for the types of binders that can be created.
 *
 * The key will be used in your Binder files.
 *
 * @version 1.0
 */
return array(
	/**
	 * Will call Form::macro() in the compilation process.
	 */
	'form'      => array(
		'class'  => 'Form',
		'method' => 'macro',
	),

	/**
	 * Will call HTML::macro() in the compilation process.
	 */
	'html'      => array(
		'class'  => 'HTML',
		'method' => 'macro',
	),

	/**
	 * Will call Validator::register() in the compilation process.
	 */
	'validator' => array(
		'class'  => 'Validator',
		'method' => 'register'
	),
);
