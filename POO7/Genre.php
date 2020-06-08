<?php
require_once('Ouvrage.php');
    class Genre {
        private $nom;
        private $ageMini;
        
        public function __construct(string $nom, int $ageMini){
            $this->nom=$nom;
            $this->ageMini=$ageMini;
        }
        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of ageMini
         */ 
        public function getAgeMini()
        {
                return $this->ageMini;
        }

        /**
         * Set the value of ageMini
         *
         * @return  self
         */ 
        public function setAgeMini($ageMini)
        {
                $this->ageMini = $ageMini;

                return $this;
        }
        public function __toString(){
            return    $this->nom." ; ".
            $this->ageMini;
        }
    }
?>