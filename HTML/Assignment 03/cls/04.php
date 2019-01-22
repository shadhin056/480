

<!DOCTYPE html>
<html>
<body>

<?php

$i=0;$count=0;$num=97;
    
    for($i=2;$i<=$num/2;$i++)
    {
        if($num % $i==0)
         $count++;
    }
   if($count==0 && $num!= 1)
   {
printf("%d is a prime number",$num);
   }
   else
   {
       printf("%d is not a prime number",$num);
       
       }
      
   
?>

</body>
</html>