<?php

class Calculator{
	
private $myValue;
//private $height;

		public function __construct($myValue)
		{
			$this->myValue=$myValue;
			//$this->height=$h;
		}

		public	function square()
			{
				echo $this->myValue*$this->myValue."<br/>";
			}
		public	function qube()
			{
				echo $this->myValue*$this->myValue*$this->myValue;
			}

}

$rec = new Calculator(2);
$rec->square();
$rec->qube();


?>
