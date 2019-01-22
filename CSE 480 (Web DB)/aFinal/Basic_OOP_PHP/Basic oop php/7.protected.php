<?php
class GrandPa
{
    protected $name = 'Mark Henry';
}
class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }
}
$daddy = new Daddy;
echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'
$out = new GrandPa;
echo $out->name; // Results in a Fatal Error

?>
