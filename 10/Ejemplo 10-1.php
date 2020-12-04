<?php 
    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        echo "Bienvenido Usuario: " .  
             htmlspecialchars($_SERVER['PHP_AUTH_USER']).
             "Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
    } 
    else
    {
        header('WWW-Authenticate: Basic realm="protected area"');
        header('HTTP/1.0 401 Unauthorized');
        die("Please enter your username and password");    
    }
?>
