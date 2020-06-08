<?php

    class Produit
    {
        private $nom;
        private $prixUnitaire;

        public function __construct(string $name, string $pu)
        {
            $this->nom = $name;
            $this->prixUnitaire = $pu;
        }

        public function __toString()
        {
            return $this->nom;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($nom)
        {
            return $this->nom = $nom;
        }

        /**
         * Get the value of prixUnitaire.
         */
        public function getPrixUnitaire()
        {
            return $this->prixUnitaire;
        }

        /**
         * Set the value of prixUnitaire.
         *
         * @param mixed $prixUnitaire
         *
         * @return self
         */
        public function setPrixUnitaire($prixUnitaire)
        {
            $this->prixUnitaire = $prixUnitaire;

            return $this;
        }
    }
