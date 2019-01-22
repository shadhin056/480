<?php 
class DOB {
    private $day;
    private $month;
    private $year;
    public function setValue($d,$m,$y){
        if($d>31 || $d<1){
            echo "wrong value";
            return FALSE;
        }
        elseif ($m>12 || $m<1) {
        echo "wrong value";
            return FALSE;
    }
        elseif ($y<1900 || $y>2017) {
        echo "Year can not greater than 2017 and less than 1990";
            return FALSE;
    }
        
        $this->day=$d;
        $this->month=$m;
        $this->year=$y;
        
    }
    public function getValue(){
        echo $this->day;
        echo '-';
        echo $this->month;
         echo '-';
        echo $this->year;
         echo '<br>';
    }
}


$ObjDOB = new DOB();
$ObjDOB->setValue(30, 12, 1990);
$ObjDOB->getValue();
?>
