<?php
        //Création de la classe point
    class Point
    {
        //initiation de x et y
        //public ou private pour savoir si la variable est publique ou privé
        private $x;
        private $y;

        //Fonction construct qui permet de modifier dans new Point()
        // Parametrer la fonction construct avec $dx et $dy
        public function __construct($dx,$dy)
            {
                //On indique que x devient $dx et $dy 
                //On autorise la modification
                $this ->x=$dx;
                $this ->y=$dy;
            }

            //getter (prend la valeur) utiliser pour la fonction DeplacerDe
        public function getX()
        {
            //retourne la valeur saisie x
           return  $this->x;
        }
        public function getY()
        {
             return $this->y;
        }

            //setter (modifie) utile pour les fonction deplacerEn
        public function setX($ord)
        {
           $this->x=$ord;
        }
        public function setY($abs)
        {
             $this->y=$abs;
        }

            // fonction echo $this prend x - y 
        public function afficheToi()
        {

           echo ($this->x .'-'.$this->y);
        }
        public function __toString(){
            return '[' . $this->getX().','.$this->getY().']';
        }

        //idem qu'un new point 
        //deplacment relatif
    
        public function deplacerEn($dx,$dy)
        {
            $this->setX($dx);
            $this->setY($dy);
        }

            //Deplacement absolu
        public function deplacerDe($dx,$dy)
        {
            //nouvelle valaur d'attribut s'ajoute à 
            $this->x+=$dx;
            $this->y+=$dx;
        }
        // compare $p1 à$p2
        // getX de $p1 , compare à la $p2 X 
        //compare ensuite le Y de $p1 aux Y de $p2 
        public function comparerA(Point $p){
            return(($this->getX()===$p->getX())&& ($this->getY()===$p->getY()));
          
    }


?>