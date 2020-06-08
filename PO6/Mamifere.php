<?php
    require_once('Animal.php');
    require_once('Mobile.php');
    
    abstract class Mamifere extends Animal implements Mobile{


        public function _toString(){
            return parent::__toString();
        }

    }
?>