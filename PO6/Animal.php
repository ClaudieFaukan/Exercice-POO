<?php
    abstract class Animal{

        private $especes;

        public function __construct(string $espece){
            $this->especes=$espece;
        }
          
        public function __toString(){
            return $this->especes;
        }
        /**
         * Get the value of especes
         */ 
        public function getEspeces()
        {
                return $this->especes;
        }

   
    }
    

?>