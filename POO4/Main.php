<?php
require_once ('Personne.php');
require_once ('Minibus.php');


$m=new miniBus(8);


$n2=new Personne ('Riri');
$m->embarquer($n2);

$m->rechercher('Riri');


$choix=1;

while ($choix!=0){
    echo "1 - embarquer un passager ";

    echo "2 - rechercher un passager ";

    echo "3 - debarquer un passager ";

    echo "4 - lister les passagers ";

    echo "0 - Sortie ";

    $choix=readline(" Saisie du choix : ");

    if($choix==1){
        echo " Entrer le nom du passager : ";
        $passager=readline();
        $passager=new Personne($passager);
        $m->embarquer($passager);
    }

    if($choix==2){
        echo " rechercher la place du passager : ";
        $search=readline();
        if ($m->rechercher($search)>-1){
            echo " Préjent";
        }
        else{
            echo "Pas préjent";
        }
    }
    if($choix==3){
        echo " debarquer un passager : ";
        $debarque=readline();
        $m->debarquer($debarque);
    }
    if($choix==4){
        echo " liste des passagers présent : ";
        print_r($m);
    }
}


/*$m->embarquer($n1);
$m->embarquer($n2);
$m->embarquer($n3);
$m->rechercher('loulou');

$m->embarquer($n4);
$m->embarquer($n5);
$m->embarquer($n6);
$m->embarquer($n7);

$m->embarquer($n8);
$m->embarquer($n9);
$m->embarquer($n10);


$m->rechercher('Fifi');

$m->debarquer('toto');

*/




?>