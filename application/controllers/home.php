<?php

class Home_Controller extends Base_Controller {
	//public restful = true; for restful controller - use verbs instead of action
	public function action_index()
	{
		return View::make('home.index');
	}
	public function action_about()
	{
		return View::make('home.about');
	}
	public function action_contact()
	{
		return View::make('home.contact');
	}

	//for testing new ideas
	public function action_test()
	{
		return View::make('home.test');
	}
}