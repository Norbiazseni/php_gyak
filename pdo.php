<?php

/*
CRUD: CREATE READ U D
TFH: van egy cards táblám, amiben van name, email, id, mező
backtick: `
1. MYSQL
-READ: -SELECT name, email FROM cards where id=10
-CREATE: INSERT INTO cards (`name`, `email`) VALUES ('Sipos Norbert', 'siposnorbert2007@gmail.com')
-UPDATE: UPDATE cards SET `name`='Sipos Norbert' WHERE id=10
-DELETE: DELETE FROM cards WHERE id=10

*/

/*
CREATE DATABASE businesscards;
USE businesscards;

CREATE TABLE cards (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) DEFAULT NULL,
    `email` VARCHAR(100) DEFAULT NULL,
    `companyName` VARCHAR(100) DEFAULT NULL,
    `phone` VARCHAR(15) DEFAULT NULL,
    `photo` VARCHAR(255) DEFAULT NULL,
    `status` TINYINT(1) DEFAULT NULL,
    `note` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;
*/

//Data Source Name
$dsn = "mysql:host=localhost;dbname=businesscards;charset=utf8mb4";
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód: Exception dobása hiba esetén
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres csatlakozás az adatbázishoz.";

    $name = "George Floyd";
    $companyName = "I cant breathe Kft.";
    $email = "pleasedontshootmeman@gmail.com";
    $phone = "+1 555 555 5555";
    $photo = "uploads/profilkep.png";
    //$status = 1;
    $note = "Építészmérnök vagyok.";


    //$sql = "INSERT INTO cards (`name`, `companyName`, `email`, `phone`, `photo`, `note`) VALUES ('$name', '$companyName', '$email', '$phone', '$photo', '$note')";

    //$pdo->exec($sql);

    $sql = "INSERT INTO cards (`name`, `companyName`, `email`, `phone`, `photo`, `note`) VALUES (?, ?, ?, ?, ?, ?)";

    $stat = $pdo->prepare($sql);

    $stat ->execute([$name, $companyName, $email, $phone, $photo, $note]);

    //READ
    /*
    $sql = "SELECT * FROM cards where id=11";
    $result = $pdo->query($sql);

    $card = $result->fetch(PDO::FETCH_ASSOC);

    print_r($card);*/


} catch (PDOException $e) {
    echo "Kapcsolódási hiba: " . $e->getMessage();
    exit();
}



?>