
<?php
   class student {
     
      /* Member variables */
     private  $name;
     private  $id;
     private  $cgpa;
     private static $tcgpa=0;
     private static $cc=0;
     
      
      /* Member functions */
     function __construct($n,$i,$c)
{
$this->name = $n;
$this->id = $i;
$this->cgpa = $c;
$tcgpa=$tcgpa+$c;
$this->$cc++;
echo "__construct() executed. ";
}
       function avg(){
       $avg = $tcgpa /  $cc;
      
         echo $avg ." <br/>";
      }
     
   }

   $Robj=new student("shadhin","2012-2-60-056",2);
   $Robj1=new student("parvez","2013-2-60-049",4);
   
    $Robj->avg();

?>