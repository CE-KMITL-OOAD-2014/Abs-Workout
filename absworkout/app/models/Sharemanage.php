<?php

class Sharemanage {

	public function saveuser($shr){

            $share = new ShareDB();
			$share->username = $shr->getUsername();
			$share->calories = $shr->getCalories();
			$share->times = $shr->getTimes();
			$share->comment = $shr->getComment();
			$share->image = $shr->getImage();
			$share->save();
          
    }

}
