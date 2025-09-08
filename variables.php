<?php

    /*
        szükséges programok: XAMPP (Apache, MySQL), Git, github repo, VSC
        <?php ..... ?>

        Változók:
    */

        $name = "Norbi";
        $age = 18;
        $city = "Karcag";
        var_dump($name);

        echo "\n<br>Név: {$name} Életkor: {$age} Lakóhely: {$city}";


        //Konstans
        define("PI", 3.14);
        echo "<br>";

        //adattípusok: string, int, float, bool, array

        $message = "egy";

        echo "Kiír", $message, "értéket.", "<br>\n.";
        echo "Kiír $message értéket. <br>\n";
        echo "Kiír {$message}darab értéket. <br>\n";
        echo 'Kiír $message értéket. <br>\n';

        print "Kiír". $message. "értéket."."<br>\n";
        //print "Kiír $message. értéket." "<br>\n";
        print 'Kiír. {$message}. értéket. <br>\n';

        /*

        git parancsok
            git init: helyi repó inicializálása
            git add .: Módosított fájlok hozzáadása a staging area-hoz.
            git commit -m "message": Változtatott fájlok commitálása
            git remote add origin https://github.como/felnev/reponev.git hozzarendeljük a helyi repot a tavoli repohoz
                git config --global user.name illetve e-mail: 
            git branch -M main: "A fő ág(main) nevezése a branchben(mivan???)"
            git push -u origin main: feltölti a távoli repóba a local repot

            HF: töltsd le otthon a repot a saját htdocs mappádba

            git clone
        */


?>