<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array (4, 5, 6, 7, 4, 7, 8); 
$numbers2 = array (0); 
$k=0;
for($i=0;$i<count($numbers);$i++)
    {
        for($j=1;$j<count($numbers);$j++)
        {
                if($numbers[$i]  != $numbers[$j])
                {
$numbers2[$k]=$numbers[$i];
                $k++;
                    break;
                }
                
                    
        }
    }
    var_dump($numbers2);
?>

</body>
</html>