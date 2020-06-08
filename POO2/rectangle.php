<?php
    class Rectangle{

         private $pig;
         private $psd;


        public function __construct(Point $p1, Point $p2)
         {
            $this->pig= $p1 ;
            $this->psd= $p2 ;
         }

        public function getIg()
        {
            return $this->pig;

         }

         public function getSd()
         {
             return $this->psd;
         }
         public function setIg($ig)
         {
             $this->pig=$ig;
         }
         public function setSd($ig1)
         {
             $this->psd=$ig1;
         }
         
         public function afficheToi(){
         echo($this->getIg()->afficheToi());
         echo "//";
         echo($this->getSd()->afficheToi() );
         }


         public function deplacerEn($dx,$dy){
            $this->getSd()->depalcerEn();
            
        }
    }

       
?>