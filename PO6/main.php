<?php
require_once('Mamifere.php');
require_once('Oiseau.php');
require_once('Reptile.php');
require_once('Chien.php');
require_once('Gardien.php');
require_once('Chat.php');
require_once('Autruche.php');
require_once('Pigeon.php');
require_once('Serpent.php');
require_once('Crocodile.php');
require_once('Gardien.php');

$menagerie=[];
$nbAnimaux=0;

$menagerie[$nbAnimaux++]= new Chat('Europeen',"mauve");
$menagerie[$nbAnimaux++]= new Chat('Europeen',"Orange");
$menagerie[$nbAnimaux++]= new Pigeon('Paris');
$menagerie[$nbAnimaux++]= new Crocodile('Aligator');
$menagerie[$nbAnimaux++]= new Serpent('Boa constructor');
$menagerie[$nbAnimaux++]= new Chien('labrador',"Brun");
$menagerie[$nbAnimaux++]= new Chien('Batard',"Rouge");
$menagerie[$nbAnimaux++]= new Autruche('Atruche Albinos');



$p= new Chat('Europeen',"mauve");
$p->crier();
$p->seDeplacer();
$p->estCarnivore();


//for ($i=0; $i < $nbAnimaux; $i++) { 
// print_r($menagerie[$i]);
  //  echo "\n";
//}
/*echo"-----------------------------------------------------------------"."\n";
for ($i=0; $i < $nbAnimaux; $i++) {
    if($menagerie[$i] instanceof Bavard){ 
        
        echo ($i."\t".$menagerie[$i]."\t".$menagerie[$i]->crier()); 
    echo "\n";
    }
  
} 

echo"-----------------------------------------------------------------"."\n";
for ($i=0; $i < $nbAnimaux; $i++) { 
    if($menagerie[$i] instanceof Mobile){
    echo $i."\t".$menagerie[$i]."\t".$menagerie[$i]->seDeplacer();
    echo "\n";  
} 
}
echo"-----------------------------------------------------------------"."\n";
foreach($menagerie as $a){
    if ($a instanceof Dangereux){
        echo($a." est carnivore\n");
        echo (PHP_EOL);
    }
}
*/
echo"-----------------------------------------------------------------"."\n";
$gg=new Gardien("luc");
foreach($menagerie as $a){
    if ($a instanceof){
        echo($gg." a sortie ".$a."\n");
        echo (PHP_EOL);
    }
}
/*
$gard= new Gardien ('Luc');




foreach($menagerie as $anim){

    echo $gard->nourrie($anim);
}
foreach($menagerie as $anim){

    echo $gard->vaccine($anim);
}
*/
?>