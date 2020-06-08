<?php
    require_once('VehiculeAMoteur.php');

    class Gendarme extends VehiculeAMoteur {
        private $nom;
        public function __construct($name){
            $this->nom=$name;
        }
    

        /**
         * Get the value of nom
         */ 
        public function getNom() {
                return $this->nom;
        }

        public function radar(VehiculeAMoteur $vehicule){
            if($vehicule->getVitesse()> self::VITESSE_MAX_AUTORISEE){
                echo "Flash ! amende envoyer";
            }
            else{
                echo " Vitesse reglementaire ";
            }
        }

    }
?>