<?php
require_once('Ouvrage.php');

    class Livre extends Ouvrage{
        private $auteur;
        private $nbPages;

       
        public function __construct(string $OuvrageTitre,string $AnneeS, string $editeur,string $Genre, string $ageMini, string $auteur,int $nbPages){
            parent:: __construct($OuvrageTitre,$AnneeS, $editeur, $Genre, $ageMini);
            $this->auteur=$auteur;
            $this->nbPages=$nbPages;
        }
        

        /**
         * Get the value of auteur
         */ 
        public function getAuteur()
        {
                return $this->auteur;
        }

        /**
         * Set the value of auteur
         *
         * @return  self
         */ 
        public function setAuteur($auteur)
        {
                $this->auteur = $auteur;

                return $this;
        }

        /**
         * Get the value of nbPages
         */ 
        public function getNbPages()
        {
                return $this->nbPages;
        }

        /**
         * Set the value of nbPages
         *
         * @return  self
         */ 
        public function setNbPages($nbPages)
        {
                $this->nbPages = $nbPages;

                return $this;
        }
        public function __toString(){
            return     parent::__toString()." ; ".$this->auteur." ; ".
            $this->nbPages;
        }
    }
    
?>