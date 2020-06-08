<?php
     require_once ('GENRE.php');

    class DVD
    {
        private $titre;
        private $realisateur;
        private $duree;
        private $Genre;
        private $annee;

        //-----------METHODE----------------------
        public function __construct($tit,$real,$dur,$gen,$ann){
            $this->titre=$tit;
            $this->realisateur=$real;
            $this->duree=$dur;
            $this->Genre=$gen;
            $this->annee=$ann;
        }
        public function __toString(){
            return $this->titre.";". $this->realisateur.";".$this->duree.";".$this->Genre.";".$this->annee;
          
        }

        //-----------GETTER----------------
        public function getTitre(){
            return $this->titre;
        }

        public function getRealisateur() {

            return $this->realisateur;
        }
        
        public function getGenre(){
            return $this->Genre;
        }
        //----------SETTER------------------

        public function setTitre($t){
            $this->titre=$t;
        }

        public function setRealisateur($r){
            $this->realisateur=$r;
        }
        public function setGenre($g){
            $this->Genre=$g;
        }

     

    }

?>