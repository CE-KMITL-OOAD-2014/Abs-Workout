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





Route::get('register', function(){	
	return View::make('register');
});

Route::get('login', function(){	
	return View::make('login');
});


Route::get('viewprogram', function(){	
	if(Auth::check()){
		if(Auth::user()->currentprogram==NULL){										//check  if  currentprogram not NULL ,it will show program page
			return View::make('viewprogram');										  //that user choose
		}
		else return Redirect::to('viewprogram/'.Auth::user()->currentprogram);		//if NULL,it will show viewprogram page.
	}
});

Route::get('profile', function(){	
	if(Auth::check()){
		return View::make('viewprofile');
	}
});

Route::get('editprofile', function(){	
	if(Auth::check()){
		return View::make('editprofile');
	}
});

Route::get('changepassword', function(){	
	if(Auth::check()){
		return View::make('changepassword');
	}
});



Route::get('/','StatisticController@showshare');

Route::get('changedpass','MemberController@changpass');
Route::post('editedprofile','MemberController@editprofile');
Route::post('registered','MemberController@register');
Route::post('logined','MemberController@login');
Route::get('logout','MemberController@logout');


Route::get('viewprogram/{programs}','ProgramController@chooseprogram');
Route::get('cancelwork','ProgramController@cancel');

Route::any('programs/{exercise}','ExerciseController@showexercise');
Route::any('program/save'	,'ExerciseController@save');

Route::get('statistic','StatisticController@Topcalories');

Route::any('share','StatisticController@share');





