<?php
require_once('Point.php');

class PointColore extends Point{
    private $couleur;
    public function __construct($x,$y,$couleur){
        parent::__construct($x,$y);
        $this->couleur=$couleur;
    }
    public function setCouleur($couleur){
         $this->couleur=$couleur;
    }
    public function getCouleur(){
       return $this->couleur;
    }
    public function __toString(){
        return parent::__toString().";".$this->getCouleur();
    }
}
?>