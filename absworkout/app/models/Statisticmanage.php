<?php

class Statisticmanage {

	public function saveuser($sta){

            $stat = new StatisticDB();
			$stat->username = $sta->getUsername();
			$stat->calories = $sta->getCalories();
			$stat->times = $sta->getTimes();
			$stat->save();
          
    }

}
