<?php
require_once('Reptile.php');
    class Serpent extends Reptile{
    
        public function seDeplacer(){
          return "Ondule !";
        }
       
        public function estCarnivore(){
          return "Vrai";
            return true;
        }
    }
?>