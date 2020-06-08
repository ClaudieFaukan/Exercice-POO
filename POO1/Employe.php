<?php

class Employe{

    private  $id;
    private $nom;

    public function __construct($ident,$nom){
        $this->id=$ident;
        $this->nom=$nom;
    }

     /*public function setId($ident){
     $this->id=$ident;
      }
    public function setNom($n){
    $this->nom=$n;
    }*/
    
    public function getId(){
        return $this->id;
   }
   public function getNom(){
       return $this->nom;
   }

}
