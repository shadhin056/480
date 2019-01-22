<?php

class Student{
	
private $name;
private $id;
private $cgpa;

		public function setName($name)
			{
				$this->name=$name;
			}
		public function setId($id)
			{
				$this->id=$id;
			}
		public function setCgpa($cgpa)
			{
				$this->cgpa=$cgpa;
			}
		public	function getName()
			{
				return $this->name;
			}
		public function getId()
			{
				return $this->id;
			}
		public function getCgpa()
			{
				return $this->cgpa;
			}
		

		

}

$rec = new Student;
$rec2 = new Student;

$rec->setCgpa(2);
$rec2->setCgpa(3);
$s1=$rec->getCgpa();
$s2=$rec2->getCgpa();
//$rec->getWidth();
//echo $rec->getWidth();
//$rec->setHeight(3);
//$rec->getHeight();
echo ($s1+$s2)/2;

?>
