<?php

    include "./class/batiStructure.php";
    include "./class/batiment.php";
    include "./class/batiHome.php";
    include "./class/cabane.php";
    include "./class/immeuble.php";
    include "./class/maison.php";

        $nom = new batiment("Maison", 118, "rouge", 15);
        var_dump($nom);
        $batiment = new maison("Maison", 16, "vert", 15, true, false);
        var_dump($batiment);
        $cabane= new cabane("Cabane", 20, "jaune", 1);
        var_dump($cabane);





?>