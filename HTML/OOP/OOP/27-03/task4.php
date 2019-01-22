<?php

class Circle{
	
private $radius;
//private $height;

		public function setRadius($radius)
			{
				$this->radius=$radius;
			}
		
			
		public	function getRadius()
			{
				return $this->radius;
			}
		
		public	function area()
			{
				return $this->radius*$this->radius*3.1416;
			}
		public	function circumference()
			{
				return $this->radius*2*3.1416;
			}

		

}

$rec = new Circle;

$rec->setRadius(5);
//$rec->getWidth();
//echo $rec->getWidth();
//$rec->setHeight(3);
//$rec->getHeight();
echo $rec->area()."<br/>";
echo $rec->circumference();

?>
