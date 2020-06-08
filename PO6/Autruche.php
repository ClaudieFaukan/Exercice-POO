<?php
require_once('Oiseau.php');
require_once('Mobile.php');
    class Autruche extends Oiseau implements Mobile{
    
        public function seDeplacer(){
            return "Se bouge sur 2 pattes";
        }
      
    }
?>