<?php

class Box{
	
private $length;
private $width;
private $height;

		public function __construct($l,$w,$h)
		{
			$this->width=$w;
			$this->height=$h;
			$this->length=$l;
		}

		public	function getArea()
			{
				echo $this->width*$this->height*$this->length;
			}

}

$rec = new Box(2,3,4);
$rec->getArea();


?>
