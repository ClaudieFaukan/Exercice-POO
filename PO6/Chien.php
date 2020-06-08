<?php
require_once('Animal.php');
require_once('Mobile.php');
require_once('Dangereux.php');
require_once('Bavard.php');
    class Chien extends Animal implements Mobile,Dangereux,Bavard {
    
        private $couleur;

        public function __construct(string $strEsp,string $couleur){
            parent::__construct($strEsp, $couleur);
            $this->couleur=$couleur;

        }
        public function __toString(){
            return parent::__tostring()." ; ".$this->couleur;
        }

       public function crier(){
        return "aboiement";
       }
        public function seDeplacer(){
            return "Se bouge sur 4 pattes";
        }
        public function estCarnivore(){

            return true;
        }

      

        /**
         * Get the value of couleur
         */ 
        public function getCouleur()
        {
                return $this->couleur;
        }

        /**
         * Set the value of couleur
         *
         * @return  self
         */ 
        public function setCouleur($couleur)
        {
                $this->couleur = $couleur;

                return $this;
        }
    }
?>