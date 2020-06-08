<?php

    class Armoire
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
            if ($achat->getProduct()instanceof Perissable) {
                echo 'Cette article ne se range pas ici'."\n";
            } else {
                $this->tableau[] = $achat;

                return true;
            }
        }

        public function getContenu()
        {
            for ($i = 0; $i < count($this->tableau); ++$i) {
                print_r($this->tableau[$i]);
            }
        }
    }
