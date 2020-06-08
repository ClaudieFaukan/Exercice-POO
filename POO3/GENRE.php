<?php
require_once ("DVD.php");
    class Genre{
        //-------DONNEE MEMBRES----------
        private $libelle;
        private $ageMini;

        //-------METHODES---------------
        public function __construct($l,$am){
            $this->libelle=$l;
            $this->ageMini=$am;
        }

        public function __toString(){
            return $this->libelle.";".$this->ageMini;
        }

         //--------GETTER----------------
         public function getLibelle(){
            return $this->libelle;
         }
         public function getAge(){
            return $this->ageMini;
         }
 

        //-------SETTER--------------------

        public function setLibelle($lib){
            $this->libelle=$lib;
        }
        public function setAge($age){
            $this->ageMini=$age;
        }
       
    }
?>