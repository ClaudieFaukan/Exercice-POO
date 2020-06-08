<?php
require_once('Oiseau.php');
require_once('Bavard.php');
    class Pigeon extends Oiseau implements Bavard{
     
        public function seDeplacer(){
            return "vole flap !";
        }
        public function crier(){
            return "KOAA !";
        }
      
    }
?>