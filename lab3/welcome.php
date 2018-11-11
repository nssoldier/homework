<?php
    echo "Welcome admin website";
    function logout()
    {
        session_destroy();
    }
    // $_SERVER[""]
?>
<form action= "EX8.php" method="post">
    <button onClick = "<?php logout() ?>" type="submit">log out</button><br></form>
    