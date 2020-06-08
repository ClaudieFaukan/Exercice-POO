<?php
include_once('vehicule.php');
include_once('VehiculeAMoteur.php');
include_once('Gendarme.php');
require_once('VehiculeException.php');

$t=new VehiculeAMoteur(5,1,2,60,50);
$n= new Vehicule(2,2);
try{
    $t->embarquer(10);
    }
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
}    

try{
    $t->debarquer(40);
    }
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
}    
try{
    $t->aFondLaCaisse();
    }
    catch(VehiculeException $e){
        echo ($e->getMessage())."\n";
        echo ($e->getCode())."\n";
    } 


try{
$t->accelerer();
}
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
} 
$t->setVitesse(0);
try{
    $t->freiner();
}
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
} 
try{
    $t->seDeplacer(100000000);
}
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
} 

try{
    $t->remplirReservoir(200);
}
catch(VehiculeException $e){
    echo ($e->getMessage())."\n";
    echo ($e->getCode())."\n";
} 


$g=new Gendarme("Dupont");
$g->radar($t)."\n";
?>