<?php
require_once('Ouvrage.php');
require_once('Livre.php');
require_once('Cd.php');
require_once('Dvd.php');
require_once('OuvrageEmpruntable.php');
require_once('Genre.php');
require_once('Empruntable.php');
require_once('Abonne.php');

$ti =new Livre("Les fleurs",1960,"Flamarion","Thriller",18,"Beber",800);
echo $ti."\n";


    $cd= new Cd ("Riles",10,54,"Welcome to the Jungle",2019,"Undez Prod","Rap",12,"20/10/2019","");

    try{
        $cd->setDateRetour("1/11/2019");
    }
catch(Exception $e){
echo ($e->getMessage()."\n");
echo ($e->getCode()."\n");
}

echo $cd."\n";
$dvd= new Dvd ("Besson","16/9",120,"5 eme éléments",2019,"ZT","Science fiction",18,"10/20/2019","10/31/2019");
echo $dvd."\n";

$perso= new Abonne ("Paul","Logan",2);
$perso1= new Abonne ("Jack","Shemale",25);

try{
$perso1->emprunte($cd);
}
catch(Exception $e){
echo ($e->getMessage()."\n");
echo ($e->getCode()."\n");
}

?>