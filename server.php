<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER szuperglobális</title>
</head>
<body>
    <h2>SERVER tömb információi</h2>
    <ul>
        <li><strong>Kérés módja: </strong><?php echo "{$_SERVER['REQUEST_METHOD']}";?></li>
        <li><strong>Kért URL: </strong><?php echo "{$_SERVER['REQUEST_URI']}";?></li>
        <li><strong>PHP_SELF: </strong><?php echo "{$_SERVER['PHP_SELF']}";?></li>

        <?php

        if (empty($_SERVER['QUERY_STRING']))
        {
            echo "nincs";
        }
        else
        {
            echo "<strong>QUERY_STRING: </strong>{$_SERVER['QUERY_STRING']}";
            
            $datas = explode("&", $_SERVER['QUERY_STRING']);
            echo "<br>";
            echo "$datas[0] <br>";
            echo $datas[1];   
        }
        ?>
    </ul>



    <!-- Szkript neve: PHP_SELF -->
    <!-- QUERY string: QUERY_STRING vagy "nincs" -->

    <h3>Szerver adatai</h3>

    <!-- Szerver neve: SERVER_NAME
         IP címe: SERVER_ADDR
     -->

     <li><strong>Szerver neve: </strong><?php echo "{$_SERVER['SERVER_NAME']}";?></li>
     <li><strong>Szerver neve: </strong><?php echo "{$_SERVER['SERVER_ADDR']}";?></li>
     
     <h3>Felhasználó adatai</h3>
     //Böngésző adatai: HTTP_USER_AGENT
     // FELHASZNÁLÓI IP CÍME: REMOTE_ADDR

     <p>
        <a href="<?php echo empty($_SERVER['PHP_SELF']);?>?name=sipos&age=19">Kattints ide egy paraméterezett GET kéréshez!</a>
     </p>

     <h3>Eddigi megnyitások száma:</h3>

     <?php

        session_start();

        if(isset($_SESSION['pageloads']))
            $_SESSION['pageloads'] = $_SESSION['pageloads']+1;
        else
            $_SESSION['pageloads']=1;
            
        echo "Eddigi megnyitások száma = ".$_SESSION['pageloads'];


        if (isset($_COOKIE['counter']))
        {
            $counter = $_COOKIE['counter'] + 1;
        }
        else
        {
            $counter = 1;
        }
        echo "<br>";
        
        setcookie('counter', $counter.time() + 86400);
        echo "A megnyitások száma: $counter";
     ?>



</body>
</html>