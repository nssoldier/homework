<div><h4>EX6</h4>:</div>
<br>
<?php
    function sum($a,$b,$c)
    {
        return ($a+$b+$c);
    }
    function avg($a,$b,$c)
    {
        return sum($a,$b,$c)/3;
    }
    $s = sum(1,2,3);
    $a = avg(1,4,5);
    echo "sum = $s<br>";
    echo "avg = $a";
?>
<hr>
<div><h4>EX7</h4>:</div>
<br>
<?php
    function array_not_unique($my_array)
    {
        $same = array();
        natcasesort($my_array);
        reset($my_array);
        $old_key = null;
        $old_value = null;
        foreach ($my_array as $key => $value) {
            if ($value === null) {
                continue;
            }
            else if($old_value == $value) {
                $same[$old_key] = $old_value;
                $same[$key] = $value;
            }
            else {
                $old_value = $value;
                $old_key = $key;
            }
        }
        return $same;
    }

    $arr = array("asvsd","bdasd","asvsd","abc","abc");
    print_r(array_not_unique($arr));
?>
<hr>
<div><h4>EX8</h4>:</div>
<br>
<?php
    function checkpalindrome($str)
    {
        if ($str == strrev($str)) {
            return 1;
        } 
        return 0;
    }
    $string = "madam";
    if (checkpalindrome($string) ==  1) {
        echo "String is a palindrome";
    }
    else {
        echo "String is not a palindrome";        
    }
?>
<hr>
<div><h4>EX9</h4>:</div>
<br>
<?php
    function checkalllowercase($str)
    {
        $sc=0;
        while ($sc < strlen($str)) {
            if ( ord($str[$sc]) >= ord('A') && ord($str[$sc]) <= ord('Z')) {
                return false;
            }
            $sc++;
        }
        return true;
    }
    $string = "Aabcsasd";
    if (checkalllowercase($string) === true) {
        echo "String is all lower case";
    }
    else {
        echo "String is not all lower case";
    }
?>
<hr>
<div><h4>EX10:</h4></div>

<br>
<style>

table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    font-family: sans-serif;
}
/* table
{
    border: none;
} */
.clsp
{
    width: 400px;
    margin: 10px;
    text-align: center;
    /* line-height: 75px; */
    float: left;
}
.redz
{
    color: red;
    font-weight: bold;
}

p,div,img
{
    display: inline-block;
    /* float: left; */
    text-align: center;
}
.hid
{
    opacity: 0.6;
}
</style>
<?php
    echo "<div>";
    for ($i=0; $i < 6; $i++) { 
        $classsp = "clsp";
        echo "<div class=$classsp>";
        $link="sony_dsc_rx100_mark_4_digital_1159879.jpg";
        echo "<img src=$link height=200px width=200px>";

        echo "<div>Máy Ảnh SONY RX100 IV (Chính Hãng)</div>";

        $classz="redz";
        $classzz="hid";
        
        echo "<div><span>";
        echo "19.090.000 <u>đ</u>&nbsp;</span>  <span class=$classzz><strike>22.990.000 <u>đ</u></strike>&nbsp;</span> <span class=$classz>-17%</span> </div>";
        echo "</div>";
    }
    echo "</div>";
?>
