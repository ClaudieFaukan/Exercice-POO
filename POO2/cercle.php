<?php
    require_once ('Point.php');

    class Cercle{
    
        private $origine;   //origine est le point 
         private $rayon;

         public function __construct (Point $p0,$r0)
         {

             $this->origine=$p0;
    
            $this->rayon=$r0;
   
          }

    
    public function getOrigine(){
        return $this->origine;
    }
    public function getRayon(){
        return $this->rayon;
    }
    public function setOrigine($or){
        $this->origine=$or;
    }
    public function setRayon($ray){
        $this->rayon=$ray;
    }
    //-------------Affichage de l'objet cercle avec son centre point-------------
    
    //affiche le point d'origine -> en X
    //affiche le point d'origne -> en Y
    // affiche le rayon
    public function afficheToi(){
        echo ($this->getOrigine()->getX().'-'.$this->getOrigine()->getY().'/'.$this->getRayon());
    }

    //-------------Deplacement relatif ou absolu-------------

    //reprend le même nom que dans la fonction classe deplacerEn
    //Point d'origne-> fait la fonction deplacerEn
    public function deplacerEn($rX,$rY){
        $this->getOrigine()->deplacerEn($rX,$rY);
        
    }

    //reprend le même nom que dans la fonction classe deplacerDe
    //Point d'origne-> fait la fonction deplacerDe
    public function deplacerDe($dx,$dy)
    {
       $this->getOrigine()->deplacerDe($dx,$dy);
    }

    //--------------COMPARATIF----------------------------

      //reprend le même nom que dans la fonction classe compareA
    //Point d'origne($c1)-> en X  strictement égal a origine ($c2)-> en X
    //Point d'origne($c1)-> en Y  strictement égal a origine ($c2)-> en Y
    //Rayon d'origne($c1) strictement égal a rayon origine ($c2)
    public function comparerA(Cercle $c){
        return(($this->getOrigine()->getX()===$c->getOrigine()->getX())
            && ($this->getOrigine()->getY()===$c->getOrigine()->getY())
              && ($this->getRayon()===$c->getRayon()));
    }
    
}
?>