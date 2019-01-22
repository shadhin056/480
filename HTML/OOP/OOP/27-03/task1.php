<?php

class Rectangle{
	
private $width;
private $height;

		public function setWidth($w)
			{
				$this->width=$w;
			}
		public function setHeight($h)
			{
				$this->height=$h;
			}
		public	function getWidth()
			{
				return $this->width;
			}
		public function getHeight()
			{
				return $this->height;
			}
		public	function showArea()
			{
				return $this->width*$this->height;
			}

		

}

$rec = new Rectangle;

$rec->setWidth(2);
//$rec->getWidth();
//echo $rec->getWidth();
$rec->setHeight(3);
//$rec->getHeight();
echo $rec->showArea();

?>
