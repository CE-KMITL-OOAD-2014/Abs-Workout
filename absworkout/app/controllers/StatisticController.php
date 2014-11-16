<?php

date_default_timezone_set('Asia/Bangkok');

Class StatisticController extends BaseController{

	public function Topcalories()
	{

    if(Auth::check()){
      $users = StatisticDB::where('calories','!=',"0")->orderBy('calories','desc')->get();     //choose data row which calorie not zero
     $stat = StatisticDB::where('username','=',Auth::user()->username)->get() ;               //choose data row which have username of currentuser
     return View::make('statistic')->with(array('Top'=>$users,'statistic'=>$stat));           // go to statistic page

   }
 }

 public function share()
 {
  if(Auth::check()){                                              //save all input in table share 
    $share = new ShareDB();                     
    $share->username = Input::get('username');	
    $share->calories = Input::get('calories');
    $share->times = Input::get('times');
    $share->comment = Input::get('comment');
    $share->image = Auth::user()->image;
    $share->save();

    return Redirect::to('statistic')->with('success', 'แชร์สถิติสำเร็จ !');

  }
}

  public function showshare()                   //show table share order by date from น้อยไปหามาก 
{

 $users = ShareDB::where('id','!=',"0")->orderBy('created_at','desc')->get();	
 return View::make('main')->with('share',$users);


  }
}	