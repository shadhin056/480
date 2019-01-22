<?php

class Calculator{
	
private $myValue;

		public function setValue($myValue)
			{
				$this->myValue=$myValue;
			}
		
		public	function square()
			{
				return $this->myValue*$this->myValue;
			}
		public	function qube()
			{
				return $this->myValue*$this->myValue*$this->myValue;
			}

		

}

$cal = new Calculator;

$cal->setValue(2);
//$rec->getWidth();
//echo $rec->getWidth();
//$rec->setHeight(3);
//$rec->getHeight();
echo $cal->square()."<br/>";
echo $cal->qube();

?>
