<?php
require_once('OuvrageEmpruntable.php');
    class Cd extends OuvrageEmpruntable implements Empruntable{
        private $artiste;
        private $nbPlages;
        private $dureeTotale;

        public function __construct (string $artiste, int $nbPlages, int $dureeTotale, string $titreO, string $anneeS, string $editeur, string $Genre, int $ageMini,string $dateEmprunt,string $dateRetour=""){
                parent::__construct($titreO, $anneeS,$editeur,$Genre,$ageMini,$dateEmprunt,$dateRetour);
            $this->artiste=$artiste;
            $this->nbPlages=$nbPlages;
            $this->dureeTotale=$dureeTotale;
        }
        

        /**
         * Get the value of artiste
         */ 
        public function getArtiste()
        {
                return $this->artiste;
        }

        /**
         * Set the value of artiste
         *
         * @return  self
         */ 
        public function setArtiste($artiste)
        {
                $this->artiste = $artiste;

                return $this;
        }

        /**
         * Get the value of nbPlages
         */ 
        public function getNbPlages()
        {
                return $this->nbPlages;
        }

        /**
         * Set the value of nbPlages
         *
         * @return  self
         */ 
        public function setNbPlages($nbPlages)
        {
                $this->nbPlages = $nbPlages;

                return $this;
        }

        /**
         * Get the value of dureeTotale
         */ 
        public function getDureeTotale()
        {
                return $this->dureeTotale;
        }

        /**
         * Set the value of dureeTotale
         *
         * @return  self
         */ 
        public function setDureeTotale($dureeTotale)
        {
                $this->dureeTotale = $dureeTotale;

                return $this;
        }
        public function __toString(){
            return   parent::__toString()." ; ". $this->artiste." ; ".
            $this->nbPlages." ; ".
            $this->dureeTotale;
        }
    }
?>