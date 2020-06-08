<?php

    require_once 'Produit.php';
    require_once 'Perissable.php';
    class ProduitPerissable extends Produit implements Perissable
    {
        private $datePeremption;

        public function __construct(string $datePeremption, string $name, string $pu)
        {
            parent::__construct($name, $pu);
            $this->datePeremption = $datePeremption;
        }

        public function __toString()
        {
            return parent::__toString().' ; Date de Peremption : '.$this->datePeremption;
        }

        /**
         * Get the value of datePeremtion.
         */
        public function getDatePeremption()
        {
            return $this->datePeremption;
        }
    }
