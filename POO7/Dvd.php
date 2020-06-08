<?php
require_once('OuvrageEmpruntable.php');
    class Dvd extends OuvrageEmpruntable implements Empruntable{
        private $realisateur;
        private $format;
        private $dureeTotale;
        public function __construct(string $realisateur, string $format, string $dureeTotale, string $titreO, string $anneeS, string $editeur, string $Genre, int $ageMini, string $dateEmprunt,string $dateRetour=""){
                parent::__construct($titreO, $anneeS,$editeur, $Genre,$ageMini,$dateEmprunt,$dateRetour);
            $this->realisateur=$realisateur;
            $this->format=$format;
            $this->dureeTotale=$dureeTotale;
        }
        

        /**
         * Get the value of realisateur
         */ 
        public function getRealisateur()
        {
                return $this->realisateur;
        }

        /**
         * Set the value of realisateur
         *
         * @return  self
         */ 
        public function setRealisateur($realisateur)
        {
                $this->realisateur = $realisateur;

                return $this;
        }

        /**
         * Get the value of format
         */ 
        public function getFormat()
        {
                return $this->format;
        }

        /**
         * Set the value of format
         *
         * @return  self
         */ 
        public function setFormat($format)
        {
                $this->format = $format;

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
            return parent::__toString()." ; ". $this->realisateur." ; ".
            $this->format." ; ".
            $this->dureeTotale;
        }
    }
?>