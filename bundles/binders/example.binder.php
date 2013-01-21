<?php
/**
 * An example binder to display how easy it is to organize your content.
 *
 * @version 1.0
 * @author Andrew Ellis
 */
return array(
	/**
	 * This will create HTML::hello_world().
	 */
	'html' => array(
		'hello_world' => function()
		{
			return '<h1>Hello World!</h1>';
		}
	),

	/**
	 * This is an example of the shorthand syntax.
	 */
	'html flash' => function()
	{
		// HTML::flash() functionality
	},

	/**
	 * This will create Form::passwords()
	 */
	'form' => array(
		'passwords' => function()
		{
			return '
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" />

				<label for="cpassword">Confirm Password:</label>
				<input type="password" name="cpassword" id="cpassword" />
			';
		}
	),

	/**
	 * This will create a passwords_match() validator method.
	 */
	'validator' => array(
		'passwords_match' => function($attribute, $value, $parameters)
		{
			return $value === Input::get('cpassword');
		}
	),

	/**
	 * This will create linked image method.
	 */
	HTML::macro('image_link', function($url = '', $img='img/', $alt='', $active=false, $ssl=false)
	{
	    $url = $ssl==true ? URL::to_secure($url) : URL::to($url);
	    $img = HTML::image($img,$alt);
	    $link = $active==true ? HTML::link($url, '#') : $img;
	    $link = str_replace('#',$img,$link);
	    return $link;
	}); 
);
