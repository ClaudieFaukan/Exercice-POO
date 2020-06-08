<?php
include_once('vehicule.php');
require_once('VehiculeException.php');

class VehiculeAMoteur extends Vehicule{
    CONST CAPACITE_RESERVOIR =5;

    private $consommation;
    private $niveauReservoir;
    private $capaciteReservoir;

    public function __construct(int $nPlaces,int $nOccupants,int $nConso, int $capaReservoir=CAPACITE_RESERVOIR, int $niveauReserv){
        parent::__construct($nPlaces,$nOccupants);
        $this->consommation=$nConso;
        $this->niveauReservoir=$niveauReserv;
        $this->capaciteReservoir=$capaReservoir;
    }
    public function getConsommation(){
        return $this->consommation;
    }
    public function getNiveauReservoir(){
        return $this->niveauReservoir;
    }
    public function getCapaciteReservoir(){
        return $this->capaciteReservoir;
    }
    public function setConsommation($cons){
        $this->consommation=$cons;
    }
    public function setNiveauReservoir($niv){
        $this->niveauReservoir=$niv;
    }
    public function setCapaciteReservoir($cap){
        $this->capaciteReservoir=$cap;
    }
    public function __toString(){
        return parent::__toString().";".$this->consommation.";" .$this->niveauReservoir.";".$this->capaciteReservoir."\n";
    }
    public function remplirReservoir(int $quantite){
               if( ($this->niveauReservoir+$quantite) <= $this->niveauReservoir){
                $this->niveauReservoir=($this->niveauReservoir+$quantite);
                return "Le reservoir à été crédité"."\n";
               }
               else{
                throw new VehiculeException("Vehicule à déjà le plein ",100015);
            }
    
        }
    public function seDeplacer(int $nDistance){  
       
         if((($this->consommation/100)*$nDistance)<= $this->niveauReservoir){
        echo "Ok";
        $this->NiveauReservoir = ($this->consommation/100)*$nDistance;
        }
        else{
            throw new VehiculeException("Vehicule n'aura pas assez d'essence ",100015);
         } 
    }
        

    public function aFondLaCaisse(){
        while ( parent::getVitesse() < self::VITESSE_MAX_AUTORISEE){
            parent::accelerer();
            echo 'on augmente la vitesse de +10 km/h'."\n";
        }
        echo "vitesse max atteinte"."\n";
    }
}
?>