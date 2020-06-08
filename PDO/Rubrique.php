<?php

class Rubrique {
   private $id_rubrique;
    private $libelle;

    public function __construct($id,$libel){
        $this->id_publique=$id;
        $this->libelle=$libel;
    }
    public function __toString(){
        return '['.$this->id_rubrique->getId_rubrique()." ; ".$this->libelle->getLibelle().']';
    }
    public function getId_rubrique(){
        return $this->id_rubrique;
    }
    public function setId_rubrique($id){
        $this->id_rubrique=$id;
    }
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libel){
        $this->libelle=$libel;
    }
}
?>