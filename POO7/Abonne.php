<?php
require_once('Ouvrage.php');
require_once('Genre.php');

    class Abonne extends Ouvrage{
        private $nom;
        private $prenom;
        private $age;
        
        public function __construct(string $nom, string $prenom, int $age){
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->age=$age;
        }

        public function __toString(){
            return $this->nom." ; ".$this->prenom." ; ".$this->age;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }
        public function emprunte($media){
                $requis= $media->getAgeMini();
                $presenter=$this->age;
                if ($presenter >= $requis){
                        if ($media instanceof Empruntable){
                               echo "Requête rempli avec succes" ;
                        }
                                
                        else{
                                throw new EmpruntException ("Le media n'est pas empruntable",10102);
                        }
                 } 
                 else{
                        throw new EmpruntException ("L'age minimum requis est insufisant",10101); 
                }
        }
    }
?>