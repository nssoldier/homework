<?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $err="";
            $user = $_POST["us"];
            $password = $_POST["pw"];
            $_SESSION["us"] = $user;
               $_SESSION["pw"] = $password;
            // echo $_POST["sm"];
            
            if ($user == "admin" && $password == "password") {
                
                $url = 'welcome.php';  
            }
            else 
            {
                $err = "Wrong user name or password<br>";
                $url = $_SERVER["PHP_SELF"];
                // return false; 

            }
        }
    ?>
<!DOCTYPE html>
<html>
<body>
    
    <form action= "<?php echo $url?>" method="POST">
    User name: <input type ="text" name ="us"><br>
    Password: <input type ="text" name ="pw"><br>
    <?php echo $err ?>
    <input type ="submit"><br></form>
</body>
</html>
