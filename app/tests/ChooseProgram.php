<?php 
	class ChooseProgram extends TestCase{
			$program = new Program();
			
			$this->assertEquals("Plan1",Program("M",3));
			$this->assertEquals("Plan2",Program("M",4));
			$this->assertEquals("Plan3",Program("M",5));

			$this->assertEquals("Plan4",Program("F",3));
			$this->assertEquals("Plan5",Program("F",4));
			$this->assertEquals("Plan6",Program("F",5));	
		}
?>