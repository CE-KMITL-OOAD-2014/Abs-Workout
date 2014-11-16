<?php

class Usermanage {

	public function saveuser($user){

            $userdb = new UserDB();
			$userdb->username = $user->getUsername();
			$userdb->password = $user->getPassword();
			$userdb->email = $user->getEmail();
			$userdb->weight = $user->getWeight();
			$userdb->height = $user->getHeight();
			$userdb->age = $user->getAge();
			$userdb->image = $user->getImage();
			$userdb->save();
          
    }

}
