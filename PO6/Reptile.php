<?php
    require_once('Animal.php');
    require_once('Mobile.php');
    require_once('Dangereux.php');
    
    abstract class Reptile extends Animal implements Mobile,Dangereux{
        
        public function _toString(){
            return parent::__toString();
        }
    
    }
?>