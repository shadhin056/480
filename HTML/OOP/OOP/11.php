
<?php
   class Rectangle {
      /* Member variables */
     private  $width;
     private  $height;
      
      /* Member functions */
      function __construct($number1,$number2)
{
$this->width = $number1;
$this->height = $number2;

echo "__construct() executed. ";
}
       function showArea(){
                    $shadhin=($this->height)*($this->width);

         echo $shadhin ." <br/>";
      }
      
   }

   $Robj=new Rectangle(2,2);
   echo $Robj->showArea();
   $Robj1=new Rectangle(3,3);
   echo $Robj1->showArea();
   

?>