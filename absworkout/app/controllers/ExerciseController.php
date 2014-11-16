<?php

Class ExerciseController extends BaseController{

	public function showexercise($exercise)
	{

		if(Auth::check()){	//Check login
			$temp = ExerciseDB::where('name','=',$exercise)->get() ;  //get exercise database(table exercise) from name of exercise
			$pieces = explode("-",$temp[0]->description);			  //check description of exercise to new line  
			return View::make('exercise')->with(array('exercise'=>$temp[0],'space'=>$pieces,'count'=>count($pieces)));  //send exercise to show on the page
		}
	}

	public function save()
	{
		if(Auth::check()){
			$temp = StatisticDB::all();  //get all data from table statistic
			$has =false;						
			for($i = 0 ;$i<count($temp);$i++){		//row 0  to  last row of table 
				if($temp[$i]->username == Auth::user()->username){    //check username,Is have in table?
					$has =true;										  //set true if have
					$id = $temp[$i]->id;							 //set  id to find the row of table

				}
			}
			if($has){											//if have statistic earlier count up calories and time 
				$stat = StatisticDB::find($id);
				$stat->calories = $stat->calories+Input::get('calories');	 
				$stat->times = 1+$stat->times;
				$stat->save();
			}else{												//if not have before save all data into table
				$stat = new StatisticDB();
				$stat->username = Auth::user()->username;
				$stat->calories = Input::get('calories');
				$stat->times = 1;
				$stat->save();
			}

			return Redirect::to('viewprogram/'.Auth::user()->currentprogram)->with('success', 'บันทึกการออกกำลังกายเรียบร้อย !');
		}	//go back to program page
	}
}