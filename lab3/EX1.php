<div><h4>EX1: </h4></div>


<?php
$d1=strtotime("12/24");
// echo $d1;
echo "<br>";
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 24th of December.";
?>


