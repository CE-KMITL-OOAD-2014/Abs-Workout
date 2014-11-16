<?php

Class MemberController extends BaseController{

	public function register()
	{
		$input = Input::all();				
		$rules = array(											//check input compare database
			'username' => 'Between:3,20|unique:users',		
			'email' => 'Between:3,60|unique:users|email',
			'password' => 'Between:4,30|confirmed',
			'password_confirmation',
			);
		$message = array(										//set message alert
			'username.unique' => 'Username นี้ มีผู้ใช้งานแล้ว',
			'username.between' => 'Username ต้องมี 3-20 ตัวอักษร',
			'email.unique' => 'อีเมลนี้ มีผู้ใช้งานแล้ว',
			'password.confirmed' => 'รหัสผ่านไม่ตรงกัน',
			'password.between' => 'รหัสผ่านต้องมี 4-30 ตัวอักษร',
			);

		$validate = Validator::make($input,$rules,$message);		//use function validator to check 

		if($validate -> passes()){									//if pass,save all data to users table
			$user = new User;
			$userdb = new Usermanage;
			$user->setUsername(Input::get('username'));
			$user->setPassword(Hash::make(Input::get('password')));			
			$user->setEmail(Input::get('email'));
			$user->setWeight(Input::get('weight'));
			$user->setHeight(Input::get('height'));
			$user->setAge(Input::get('age'));
			
			

			$file = Input::file('image');							//check hasImage 
			if($file!=NULL){
				$destinationPath = app_path()."/../public/profilepicture";
				$filename = date('Y-m-d').'_'.$file->getClientOriginalName(); 
				$uploadSuccess = $file->move($destinationPath, $filename);
				
				$user->setImage($filename);		//if user choose file to upload profile picture,save filename and move file to floder
			}
			else{
				$user->setImage('def.png');		//if not choose ,set default image
			}

			$userdb->saveuser($user);			

			return Redirect::to('/')->with('success','สมัครสมาชิกสำเร็จ !');		//go back to main page
		}else{
			return Redirect::to('register')->with('danger', 'เกิดข้อผิดพลาด !')->withErrors($validate)->withInput();		
		}	//if not pass,go to register page wiht error
	}

	public function login()
	{

		$credential = Input::only('username','password');				//get username password
		if(Auth::attempt($credential)){									//check to login
			return Redirect::intended('/')->with('success', 'Login สำเร็จแล้ว !');		//go to main page
		} 		else {
			return Redirect::to('login')									//go back to login page
			->with('danger', 'Username หรือ Password ผิด !')	
			->withInput();
		}
	}

	public function logout(){
		if(Auth::check()){							//check isLogin?
			Auth::logout();							//logout
			return Redirect::to('/')->with('success', 'Logout สำเร็จ !');			//go to main page
		}
	}

	


}




