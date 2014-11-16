<?php

Class ProgramController extends BaseController{


	public function chooseprogram($programs)
	{	
		if(Auth::check()){
			if($programs=='program1'){

				$pro = "Program1DB";
				$h = "เพศหญิง (3วัน/สัปดาห์)";

			}else if($programs=='program2'){

				$pro = "Program2DB";
				$h = "เพศหญิง (4วัน/สัปดาห์)";

			}else if($programs=='program3'){

				$pro = "Program3DB";
				$h = "เพศหญิง (5วัน/สัปดาห์)";

			}else if($programs=='program4'){

				$pro = "Program4DB";
				$h = "เพศชาย (3วัน/สัปดาห์)";

			}else if($programs=='program5'){

				$pro = "Program5DB";
				$h = "เพศชาย (4วัน/สัปดาห์)";

			}else if($programs=='program6'){

				$pro = "Program6DB";
				$h = "เพศชาย (5วัน/สัปดาห์)";

			}
				$temp = $pro::all() ;								//get data from table whose choose 
				if(Auth::user()->currentprogram==NULL){				//check has Name? of currentprogram in table user 
					$user = UserDB::find(Auth::user()->id);			//if not has,save name of program in table user  
					$user->currentprogram = $programs;
					$user->startdate = date('d-m-Y');
					$user->save();
				}
				$start = Auth::user()->startdate;						
				$i=0;
				while(true){
					if(date('d-m-Y', strtotime($i.'day ago')) == $start ){				//check currentdate compare from start exercise date
						break;
					}
					$i++;
				}
				$i=$i+1;
				
				return View::make('program')->with(array('prog'=>$temp,'head'=>$h,'current'=>$i,'start'=>$start));	
			}	//go to show program page

		}

		public function cancel(){
			if(Auth::check()){
			$user = UserDB::find(Auth::user()->id);			//find column current program in table user
			$user->currentprogram = NULL;					//set it = NULL
			$user->save();
			return Redirect::to('/')->with('success','ยกเลิกโปรแกรมเรียบร้อยแล้ว !');	  //go back to mainpage
		}	
	}
}