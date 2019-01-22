<?php

class Rectangle{
	
private $width;
private $height;

		public function __construct($w,$h)
		{
			$this->width=$w;
			$this->height=$h;
		}

		public	function showArea()
			{
				echo $this->width*$this->height;
			}

}

$rec = new Rectangle(2,3);
$rec->showArea();


?>
