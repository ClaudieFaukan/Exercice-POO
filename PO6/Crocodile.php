<?php
require_once('Reptile.php');
require_once('Bavard.php');
    class Crocodile extends Reptile implements Bavard{

        public function _toString(){
            return parent::__toString()." ;" .$this->crier." ;" .$this->seDeplacer." ;" .$this->estCarnivore;
        }
        public function crier (){
            return " Agrou grou ";
        }
        public function seDeplacer(){
            return "Nage !";
        }
       
        public function estCarnivore(){
            return true;
        }
    }
?>