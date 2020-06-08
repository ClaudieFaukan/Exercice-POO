<?php

    class Personne {
        private $nom;
        private $poidPersonne;

        public function __construct($name,$poidPerson){
         $this->nom=$name;
         $this->poidPersonne=$poidPerson;
        }

        public function __toString(){
            return $this->nom." ; ".$this->poidPersonne;
        }

       
        public function getNom()
        {
            return $this->nom;
        }

      
        public function setNom($nom)
        {
            $this->nom = $nom;
            
        }

        public function getPoidpersonne(){
            return $this->poidPersonne;
        }
       
        public function setPoidpersonne($poid){
            $this->poidPersonne= $poid;
        }

    }
?>