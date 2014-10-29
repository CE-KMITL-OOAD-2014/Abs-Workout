<?php
	Class SaveExercise extends TestCase{
		public static function mock($program,$calorie){
			$hist = new History();
			$hist->setNamework($program);	
			$hist->setWorkperday(1);
			$hist->setCalorie($calorie);

			$this->assertEquals($program,$hist->getNamework());
			$this->assertEquals(1,$hist->getWorkperday());
			$this->assertEquals($calorie,$hist->getCalorie());
		}
	}
?>