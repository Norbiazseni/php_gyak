<?php
    /*
    if (($_SERVER["REQUEST_METHOD"]== "POST") && isset($_POST["name"]))
    {
        $name = htmlspecialchars($_POST["name"]);
        $pass = htmlspecialchars($_POST["pass"]);
        echo "Hello, $name ($pass)";
    }

    if (($_SERVER["REQUEST_METHOD"]== "GET") && isset($_GET["name"]))
    {
        $name = htmlspecialchars($_GET["name"]);
        echo "Welcome, $name";
    }
    */

    //Ha GET és POST is lehet
    if (isset($_REQUEST["name"]))
    {
        $name = htmlspecialchars($_REQUEST["name"]);
        $pass = $_REQUEST["pass"];
        echo "Hello, $name ($pass)";
    }

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Űrlapkezelés</h1>
    
    <p><a href="?name=admin">Kattints ide az üdvözlésért admin</a></p>
    
    <form action="" method="post">
        <label for="name">Név:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="pass">Jelszó:</label>
        <input type="password" id="pass" name="pass">
        <br>
        
        <button type="submit">Küld</button>
    </form>
</body>
</html>