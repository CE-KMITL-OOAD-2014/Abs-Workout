<?php

Class MemberController extends BaseController{

	public function register()
	{

		echo "string";
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->weight = Input::get('weight');
		$user->height = Input::get('height');
		$user->age = Input::get('age');
		$user->save();
		

		
	
	}
}




	