<?php
require_once('VehiculeException.php');
    class Vehicule {
        CONST VITESSE_MAX_AUTORISEE=130;

        private $nbPlaces;
        private $nbOccupants;
        private $vitesse=0;
        

        public function __construct(int $nPlace, int $nOccupants){
            $this->nbPlaces=$nPlace;
            $this->nbOccupants=$nOccupants;
      
        }

        public function getNbplaces(){
           return $this->nbPlaces;
        }
        public function getNboccupants(){
            return $this->nbOccupants;
        }
        public function getVitesse(){
            return $this->vitesse;
        }
        public function setNbplaces($npl){
            $this->nbPlaces=$npl;
        }
        public function setNboccupants($npo){
            $this->nbOccupantss=$npo;
        }
        public function setVitesse($vit){
            $this->vitesse=$vit;
        }
        public function __toString(){
            return $this->nbPlaces." ; ".$this->nbOccupants." ; ".$this->vitesse."\n";
        }
        public function accelerer(){
            if (($this->vitesse+10) <= self::VITESSE_MAX_AUTORISEE ){

                return $this->vitesse=$this->vitesse+10;
            }
            else{
                throw new VehiculeException("Vehicule roule dejà a la vitesse maimum autorisé",100014);
                
            }
        }
        public function freiner(){
            if (($this->vitesse=$this->vitesse-10)>=0){
                return "le vehicule ralentie de 10 km/h sa vitesse est actuelement de ".$this->vitesse ." km/h"."\n";
            }
            else{
                throw new VehiculeException("Vehicule a l'arrêt ne peux ralentir davantages",100013);
                
            }
        }
        public function embarquer(int $p){
            if (($this->nbOccupants+$p)<=$this->nbPlaces){
                $this->nbOccupants= ($this->nbOccupants+$p);
                echo "Passager(s) embarquer"."\n";
            }
            else{
                throw new VehiculeException("Passager non embarquer, véhicule plein",10001);
        }
        }
        public function debarquer (int $p){
            
            if ($this->nbOccupants-$p>0){
                $this->nbOccupants=$this->nbOccupants-$p;
                return "Occupant(s) débarquer"."\n";
                }
                else{
                   throw new VehiculeException("Passager non débarquer, véhicule vide",10002);
                }
             }
    }         
    
?>