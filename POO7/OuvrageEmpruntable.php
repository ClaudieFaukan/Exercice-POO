<?php
require_once('Ouvrage.php');
require_once('Empruntable.php');

    abstract class OuvrageEmpruntable extends Ouvrage implements Empruntable{
        
        const DUREE_MAX_EMPRUNT=21;
        private $dateEmprunt;
        private $dateRetour;
    public function __construct (string $titreO, string $anneeS, string $editeur, string $Genre, int $ageMini,string $dateEmprunt="",string $dateRetour=""){
        parent::__construct($titreO,$anneeS,$editeur,$Genre,$ageMini);
        $this->dateEmprunt=$dateEmprunt;
        $this->dateRetour=$dateRetour;
        
   
    }
    public function __toString(){
        return parent::__toString()." ; ".$this->dateEmprunt." ; ".$this->dateRetour;
    }
 

        /**
         * Get the value of dateEmprunt
         */ 
        public function getDateEmprunt()
        {
                return $this->dateEmprunt;
        }

        /**
         * Set the value of dateEmprunt
         *
         * @return  self
         */ 
        public function setDateEmprunt($dateEmprunt)

        {
            
                $this->dateEmprunt = $dateEmprunt;

                return $this;
        }

        /**
         * Get the value of dateRetour
         */ 
        public function getDateRetour()
        {
                return $this->dateRetour;
        }

        /**
         * Set the value of dateRetour
         *
         * @return  self
         */ 
        public function setDateRetour($dateRetour)

        {
           $dr=$this->getDateEmprunt();

            $today=DateTime::createFromFormat("d/m/Y",$dr);// date emprunt tranformation en date reconnu par l'ordinateur
            $n=$today;// formatage de la date en format jour/mois/annee

            $retour=DateTime::createFromFormat("d/m/Y",$dateRetour);
            $b=$retour;

            $datedif=$b->diff($n);

            $ndd=$datedif->format('%a');

                if($ndd<=self::DUREE_MAX_EMPRUNT){
                $this->dateRetour = $dateRetour;   
                     }
                     else{
                         throw new Exception("Date maximum pour restitions dépasser.",2010);
                     }
                     
             }
    }
?>