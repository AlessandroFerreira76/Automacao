<?php
$B1=0; $B2=0; $B3=0; $B4=0; $B5=0; $B6=0; $B7=0; $B8=0;
$byte = 0;
//$dec = array( 0 => 0, 1 => 0,2 => 0,3 => 0,4 => 0,5 => 0,6 => 0,7 => 0);

$bit_1 = 0;		// Dados 1
$bit_2 = 0;		// Dados 2
$bit_3 = 0;		// Dados 3
$bit_4 = 0;		// Dados 4
$bit_5 = 0;		// Dados 5
$bit_6 = 0;		// Dados 6
$bit_7 = 0;		// Dados 7
$bit_8 = 1;		// Dados 8

$byte = (($bit_1 * 2) ** 7) + 
        (($bit_2 * 2) ** 6) + 
        (($bit_3 * 2) ** 5) + 
        (($bit_4 * 2) ** 4) + 
        (($bit_5 * 2) ** 3) + 
        (($bit_6 * 2) ** 2) + 
        (($bit_7 * 2) ** 1);
        if($bit_8 == 1) $byte ++;
        
echo ($byte);
echo"<br>";
$dec = (decbin($byte));

$x = 8 - (strlen($dec));
for($x; $x > 0; $x-- ){
    echo(0);
}



//echo(strlen($dec));
echo $dec; 
echo"<br>";
echo str_pad($dec, 8, "-=", STR_PAD_LEFT);  // produz "-=-=-Alien"
?>