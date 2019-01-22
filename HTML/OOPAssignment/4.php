<?php 
abstract class account
{
    public $name;
    public $ID;
    public $DOB;
    public $nominee;
    public $balance;
function __construct($n,$i,$d,$n1,$b)
{
//$this->name = $n;
//$this->ID = $i;
//$this->DOB = $d;
//$this->nominee = $n1;
//$this->balance = $b;
echo "__construct() executed. ";
}
abstract function deposite($amount);
abstract function withdraw($amount);
        function printAccount(){
echo $this->name ;
echo $this->ID;
echo $this->DOB;
echo $this->nominee;
echo $this->balance;
}
}
class debit extends account{
    public function deposite($amount) {
        
    }

    public function withdraw($amount) {
        
    }

}
?>
