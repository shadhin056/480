
<?php
   class calculator {
      /* Member variables */
     private  $myValue;
      
      /* Member functions */
      function setValue($number1)
{
$this->myValue = $number1;
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

   $Robj=new calculator();
   $Robj->setValue(5);
    $Robj->square();
   $Robj->qube();
   
   
   
    $Robj1=new calculator();
   

   

?>