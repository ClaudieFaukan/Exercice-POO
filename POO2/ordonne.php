<?php
//Appel des classes
require_once ('Point.php');
require_once ('cercle.php');
require_once ('rectangle.php');
require_once ('Pointcolore.php');

/*$p1 = new Point (5,3);
//On utilise la fonction affiche toi quoi ? la variabke $dot
$p1->affichetoi();

//$dot fait un newpoint en ..
$p1->deplacerEn(1,1);
//Affiche la nouvelle valeur
$p1->affichetoi();

//Ajoute de (1,1) a la precedente valeur
$p1->deplacerDe(1,1);
$p1->afficheToi();


$p2 = new point (7,3);

if ($p1->comparerA($p2)){
    echo ' egal' ."\n";
}
else{
    echo 'pas egal'."\n";
}

$c1 =new Cercle ($p2,12);

$c1->afficheToi();
echo "\n";
$c1->deplacerEn(5,13);
$c1->afficheToi();
echo "\n";
 

$p3= new Point (4,10);
$c2=new Cercle ($p3,12);

if ($c1->comparerA($c2)){
    echo ' egal' ."\n";
}
else{
    echo 'pas egal'."\n";
}
*/

//-------------RECTANGLE---------------------
/*
$p4= new Point (5,5);
$p5= new Point (10,10);

$r1= new Rectangle ($p4,$p5);
$r1->afficheToi();
*/
$np=new PointColore(4,5,"Bleu");

$np1= new PointColore(2,3,"Rouge");

echo $np;

if ($np->comparerA($np1)){
    echo ' egal' ."\n";
}
else{
    echo 'pas egal'."\n";
}

?>