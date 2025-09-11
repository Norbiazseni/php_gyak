<?php 

//Készíts egy függvényt, ami átvesz egy string tömböt és visszaadja nagybetűsként

$names = ["Pista", "Jóska", "Éva"];

function capitalizeAll(array $names): array
{
    /*
    $tempArray = [];
    foreach ($names as $name)
    {
        $tempArray[] = mb_strtoupper($name);
    }

    return $tempArray;
    */

    array_map("mb_strtoupper", $names);

}


$capitalizedNames = capitalizeAll($names);

print_r($capitalizedNames);



?>