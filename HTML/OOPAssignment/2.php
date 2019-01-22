<?php 
 class  IDGENARATOR{
     
     public static function  String_gen($m,$y){
         static $mm ;
         static $serial_no;
         if($m>$mm){
            $serial_no=0; 
         }
        $mm=$m;
        ++$serial_no;
        echo $y;
        echo "-";
        echo $m;
        echo "-";
        echo $serial_no;
        echo "<br>";
     }
}
$OBJ=new IDGENARATOR();
$m= date("m");
$y= date("Y");
$OBJ->String_gen($m,$y);
$OBJ1=new IDGENARATOR();
$OBJ1->String_gen($m,$y);
$OBJ2=new IDGENARATOR();
$OBJ2->String_gen($m,$y);
$OBJ2=new IDGENARATOR();
$OBJ2->String_gen(04,$y);
$OBJ2=new IDGENARATOR();
$OBJ2->String_gen(04,$y);

?>