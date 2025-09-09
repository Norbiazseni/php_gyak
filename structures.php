<?php
    /*
    1. if, else, elseif
    2. switch
    3. ciklusok: for, while, foreach
    4. Ternary operator
    5. Tömbök(indexelt, asszociatív, tömbök tömbje)

    */

    //Egy számról döntsd el h páros e

    $number = 6;
    echo "A(z) {$number} egy ";

    if ($number %2 != 0)
    {
        echo "páratlan";
    }

    else
    {
        echo "páros";
    }

    echo " szám. <br>";

    $result = ($number % 2 == 0) ? "páros" : "páratlan";
    echo "A(z) $number egy $result szám.";

    //ciklussal írasd ki 1-10ig a számokat

    for ($i=0; $i < 10; $i++)
    { 
        $out = $i+1;
        echo "{$out}<br>";
    }

    //hozz létre egy indexelt tömböt 5 gyümölccsel és írasd ki.
    
    $fruits = ["apple","orange","apricot","banana","plum"];

    //$things = array("this","that");

    for ($i=0; $i < count($fruits); $i++) 
    {
        echo "$fruits[$i]<br>";
    }

    foreach($fruits as $fruit)
    {
        echo "$fruit, ";
    }

    // hozd létre a users tömböt, ami taralmazza a user nevét és életkorát
    
    /*
    $users = [
        "Kiss Pista" => 20,
        "Nagy Tibi" => 21,
        "Koós Géza" => 30
    ];

    foreach ($users as $name => $age) {
        echo "$name: $age éves.<br>";
    }
    */
    //vegyünk fel egy students tömböt, ami tömbök tömbje legyen

    $students = [
        ["name" => "Kovács Péter", "age" => 20],
        ["name" => "Tóth Géza", "age" => 21],
        ["name" => "Kis Ica", "age" => 23]
    ];

    foreach ($students as $student) 
    {
        echo "{$student['name']} kora: {$student['age']} év.";
    }

    
    //HF:  users tömb. ami majd lehetővé teszi az authentikációt(bejelentkezés ellenőrzése, név, email, jelszó, vmi ilyesmi, 5 user foreach kiirni)

        $users = [
        [
            "name" => "Kiss Pista",
            "email" => "pista.kiss@gmail.com",
            "password" => "jelszo123"
        ],
        [
            "name" => "Nagy Tibor",
            "email" => "tibi.nagy@freemail.hu",
            "password" => "csaladititkok456"
        ],
        [
            "name" => "Koós Géza",
            "email" => "geza.koos@citromail.com",
            "password" => "passwd789"
        ],
        [
            "name" => "Kis Ica",
            "email" => "ica.kis@gmail.com",
            "password" => "kukor1ca"
        ],
        [
            "name" => "Tóth Béla",
            "email" => "bela.toth@example.com",
            "password" => "beluska321"
        ]
    ];

    foreach ($users as $user) {
        echo "\nNév: {$user['name']} | \nEmail: {$user['email']} | \nJelszó: {$user['password']}<br>";
    }


?>