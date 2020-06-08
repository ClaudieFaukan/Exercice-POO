<?php

    require_once 'ProduitPerissable.php';
    class Refrigerateur extends ProduitPerissable implements Perissable
    {
        private $tableau;

        public function __construct()
        {
            $this->tableau = [];
        }

        public function __toString()
        {
        }

        public function ajoute(Achat $achat)
        {
            if ($achat->getProduct() instanceof ProduitPerissable) {
                $this->tableau[] = $achat;

                return true;
            }

            echo 'Cette article ne se range pas ici';
        }

        public function getContenu()
        {
            for ($i = 0; $i < count($this->tableau); ++$i) {
                print_r($this->tableau[$i]);
            }
        }
    }
