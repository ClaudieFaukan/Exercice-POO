<?php

    class Sac
    {
        private $tableau;
        private $budget;

        public function __construct(string $budget)
        {
            $this->budget = $budget;
            $this->tableau = [];
        }

        public function __toString()
        {
        }

        public function ajoute(Achat $achat)
        {
            $t = $achat->getProduct()->getPrixUnitaire();
            $p = $achat->getQuantite() * $t;
            if ($p <= $this->budget) {
                $this->tableau[] = $achat;
                $this->budget = ($this->budget - $p);

                return true;
            }

            throw new AchatException('Budget depasser', 1002);
        }

        public function getContenu()
        {
            for ($i = 0; $i < count($this->tableau); ++$i) {
                print_r($this->tableau[$i]);
            }
        }
    }
