<?php

class Users_Controller extends Base_Controller {
	public $restful = true;
	public function get_index() {
		return View::make('users.index');
	}
	public function get_new() {
		// form to create new user
		return View::make('users.new');
	}
	public function post_index() {
		return "form was posted " . e(Input::get('username'));
		//return View::make('users.?');
	}
	public function get_edit() {
		return View::make('users.edit');
		//Form would be posted to users/id
		//hidden param verb PUT
	}
	public function put_update() {
		//handles users/id with PUT
	}
}