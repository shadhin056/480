<?php
$myfile = fopen("s.txt", "r") or die("Unable to open file!");

$search = 'shadhin';
// Read from file
$lines = file('s.txt');
foreach($lines as $line)
{
  // Check if the line contains the string we're looking for, and print if it does
  if(strpos($line, $search) !== false)
    echo $line. "<br />";
}

// echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);
?>