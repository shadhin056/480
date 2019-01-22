
<?php
   class Rectangle {
      /* Member variables */
     private  $width;
     private  $height;
      
      /* Member functions */
     public function setWidth($par){
         $this->width = $par;
      }
      
      function getWidth(){
         echo $this->width ."<br/>";
      }
      
      function setHeight($par){
         $this->height = $par;
      }
      
      function getHeight(){
         echo $this->height ." <br/>";
      }
       function showArea(){
                    $shadhin=($this->height)*($this->width);

         echo $shadhin ." <br/>";
      }
      
   }

   $Robj=new Rectangle();
   $Robj->setWidth(5);
   $Robj->setHeight(5);
   echo $Robj->showArea();
   $Robj1=new Rectangle();
   $Robj1->setWidth(6);
   $Robj1->setHeight(6);
   echo $Robj1->showArea();
   

?>