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
$pdo = new PDO($dsn, $user, $pass, 
    catch(PDOException $e){
        echo "Kapcsolódási hiba: " . $e->getMessage();
        exit;
    }
);

?>