<?php
$teste1 = array(9, 10, 11, 12);
$teste = array(5, 6, 7, 8); 
$var = array(1, 2, 3, 4);
foreach($var as $teste){
    echo"$teste <br>";
};
$var2 = array( 0 => 5,6 => 8, 9 =>15);
$var2 [1] = 20;
$var2 [2] = 10;
echo"$var2[0]<br>";
echo"$var2[1]<br>";
echo"$var2[6]<br>";
echo"$var2[9]<br>";

foreach($var2 as $teste1){
    echo"$teste1 <br>";
};
?>
