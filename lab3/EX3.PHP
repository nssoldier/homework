<div><h4>EX3: </h4></div>


<?php
$myfile = fopen("data.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    // fputs($myfile,"hihihi",6);
      echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
