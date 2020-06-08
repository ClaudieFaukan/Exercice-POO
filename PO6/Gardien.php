<?php
    class Gardien{
        private $nom;
        public function __construct($nom){
            $this->nom=$nom;
        }
        public function __toString(){
            $this->nom=$nom;
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
        public function nourrie(Animal $anim){
           return $this->nom." nourrie ".$anim->getEspeces();
        }

        public function vaccine($anim){
            if ( $anim instanceof Domestique){
                return $this->nom." vaccine ".$anim->getEspeces();
            }
        }
        public function faireUneSortie($tableau){
            if ($tableau instanceof Mobile){
            

                        
                return true;
            }
        }
    }
?>