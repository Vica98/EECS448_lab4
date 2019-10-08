<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function multiply($x, $y) {
    $z = $x * $y;
    return $z;
}

//creating empty 2d array
$theArray = array(array());

//filling vertical row 0
for($x = 0; $x <= 100; $x++)
{
$theArray[$x][0] = $x;
}
//filling horizontal column 1
for($x = 0; $x <= 100; $x++)
{
$theArray[0][$x] = $x;
}
//making the 0,0 value look empty
$theArray[0][0]=" ";

//filling the other values by multiplying row 0 and column 0
for($x = 0; $x <= 100; $x++)
{
  for($j = 0; $j <= 100; $j++)
  {
$theArray[$x+1][$j+1] = multiply($x+1,$j+1) ;
  }
}


?>
