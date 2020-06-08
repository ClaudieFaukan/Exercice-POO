<?php
require_once('Genre.php');
    class Ouvrage extends Genre{
        private $titre;
        private $anneeSortie;
        private $editeur;
        public function __construct(string $titre,int $anneS,string $editeur,string $Genre, int $ageMini){
                parent::__construct($Genre,$ageMini);
            $this->titre=$titre;
            $this->anneeSortie=$anneS;
            $this->editeur=$editeur;
        }

        /**
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of anneeSortie
         */ 
        public function getAnneeSortie()
        {
                return $this->anneeSortie;
        }

        /**
         * Set the value of anneeSortie
         *
         * @return  self
         */ 
        public function setAnneeSortie($anneeSortie)
        {
                $this->anneeSortie = $anneeSortie;

                return $this;
        }

        /**
         * Get the value of editeur
         */ 
        public function getEditeur()
        {
                return $this->editeur;
        }

        /**
         * Set the value of editeur
         *
         * @return  self
         */ 
        public function setEditeur($editeur)
        {
                $this->editeur = $editeur;

                return $this;
        }
        public function __toString(){
            return   parent::__toString()." ; ". $this->titre." ; ".
            $this->anneeSortie." ; ".
            $this->editeur;
        }
    }
?>