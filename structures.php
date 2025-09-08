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

?>