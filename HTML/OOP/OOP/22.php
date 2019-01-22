
<?php
   class calculator {
      /* Member variables */
     private  $myValue;
      
      /* Member functions */
     function __construct($number1)
{
$this->myValue = $number1;


echo "__construct() executed. ";
}
       function square(){
      $shadhin=($this->myValue)*($this->myValue);

         echo $shadhin ." <br/>";
      }
      function qube(){
                    $shadhin=($this->myValue)*($this->myValue)*($this->myValue);

         echo $shadhin ." <br/>";
      }
   }

   $Robj=new calculator(5);
   
    $Robj->square();
   $Robj->qube();

?>