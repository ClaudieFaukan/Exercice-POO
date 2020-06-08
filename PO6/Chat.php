<?php
require_once('Mamifere.php');
require_once('Dangereux.php');
require_once('Bavard.php');

    class Chat extends Mamifere implements Dangereux,Bavard {
    
        private $couleur;

        public function __construct(string $strEsp,string $couleur){
            parent::__construct($strEsp);
            $this->couleur=$couleur;


        }
        public function __toString(){
            return parent::_tostring()." ; ".$this->couleur;
        }

       public function crier(){
        return "miaule ";
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