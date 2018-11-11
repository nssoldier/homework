<div><h4>EX7: </h4></div>
<?php
    function randomcaptcha($length = 5)
    {
        $result = "";
        $char = 'bcdfghjklmpqrstvwxyzaeiou';
        for ($x=0; $x < $length; $x++) { 
            $result = ($x%2) ? $char[mt_rand(19,23)] : $char[mt_rand(0,18)];
        }
        return $result;
    }

    echo randomcaptcha(5);
?>