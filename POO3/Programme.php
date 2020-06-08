<?php
    require_once ('DVD.php');
    require_once ('GENRE.php');

    $g1= new Genre ("action",14);
    $d1= new DVD ("Duel","Spielberg",80, new Genre("suspens",18),1986);
    $d2= new DVD("Leon","Besson",82,$g1,1998);

    echo($d1->getRealisateur()."\n");
    echo($d2->getRealisateur()."\n");
    echo( $d2->getTitre()."\n");
    echo ($d1)."\n";
    echo($d2->getGenre()->getLibelle())."\n";
    $d1->setGenre($g1);
    echo($d1)."\n";
    $d1->setGenre(new Genre("varietes",12));
    echo($d1);
?>