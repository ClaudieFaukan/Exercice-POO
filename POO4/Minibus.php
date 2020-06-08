<?php
    require_once("Personne.php");
  
    //Création de la classe

    
    class Minibus{
        const CAPACITY=10; //constante de la classe
        const PTAC = 3000;
        private $tab;
        private $nbPlace;
        private $nbPersonnes;

        private $ptac;
        
       

        public function __construct($nbpl=CAPACITY,$ptac1=PTAC){
            //initialisation des donnés membres
            $this->tab=array();
            $this->nbPlace=$nbpl;
            $this->nbPersonnes=0;

            $this->ptac=$ptac1;
          

        }
        


        public function embarquer(Personne $personne) {

                 if($this->rechercher($personne->getNom())>-1){
                     if (true){
                        echo 'il y est déjà ';
                     }
                    return false;
                     }
                   
                else{
                    if ($this->nbPersonnes < $this->nbPlace){
                        if ($this->rechercher($personne)->getPoidpersonne())
                        $this->tab[]=$personne;
                        $this->nbPersonnes++;
                        
                        return true;
                         }

                    else{
                    
                        echo 'bus plein ';
                         }
                         return false;
                    }
                   
        }
                
            

        public function rechercher(string $nom){
            
            if (empty($this->tab)){
                    return -1;
             }
            else {
                for ($i=0; $i < count($this->tab); $i++){
                        if($nom === $this->tab[$i]->getNom()){
                            return $i;
                        }
                  }
                
                
            return -1;
                }  
        }


        public function debarquer(string $nom){
           $position=$this->rechercher($nom);
                if ($position == -1){
                    return NULL;
                 }
                 else{
                     $j=$this->tab[$position];
                     array_splice($this->tab,$position,1);
                     $this->nbPersonnes=$this->nbPersonnes-1;
                    return ($j);
                   
               
                 }

        }

        public function __toString(){
            $j="";
            foreach($this->tab as $p){
                $j.=$this->tab[$p]. ";";
               
            }
            return $j;
        }

 
   public function getTab()
   {
       return $this->tab;
   }

   
   public function setTab($tab)
   {
       $this->tab[] = $tab;
   }


     public function getNbPlaces()
        {
            return $this->nbPlaces;
        }

       
        public function setNbPlaces($nbPlaces)
        {
            $this->nbPlaces = $nbPlaces;
            
        }

        public function getNbPersonnes()
        {
            return $this->nbPersonnes;
        }

        public function setNbPersonnes($nbPersonnes)
        {
            $this->nbPersonnes = $nbPersonnes;
          
        } 

        public function getPtac(){
            return $this->ptac;
        }
        public function setPtac($chargebus){
            $this->ptac=$chargebus;
        }

    }


?>