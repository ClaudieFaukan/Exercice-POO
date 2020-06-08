<?php

    require_once 'Produit.php';
    class Achat
    {
        private $product;
        private $quantite;
        private $unite;
        private $dateAchat;

        public function __construct(int $quantite, string $unite, string $dateAchat, Produit $product)
        {
            $this->product = $product;
            $this->quantite = $quantite;
            $this->unite = $unite;
            $this->dateAchat = $dateAchat;
        }

        public function __toString()
        {
            return $this->product.' ; '.$this->quantite.' ; '.$this->unite.' ; '.$this->dateAchat;
        }

        /**
         * Get the value of quantite.
         */
        public function getQuantite()
        {
            return $this->quantite;
        }

        /**
         * Set the value of quantite.
         *
         * @param mixed $quantite
         *
         * @return self
         */
        public function setQuantite($quantite)
        {
            $this->quantite = $quantite;

            return $this;
        }

        /**
         * Get the value of unite.
         */
        public function getUnite()
        {
            return $this->unite;
        }

        /**
         * Get the value of dateAchat.
         */
        public function getDateAchat()
        {
            return $this->dateAchat;
        }

        /**
         * Set the value of dateAchat.
         *
         * @param mixed $dateAchat
         *
         * @return self
         */
        public function setDateAchat($dateAchat)
        {
            $this->dateAchat = $dateAchat;

            return $this;
        }

        /**
         * Get the value of product.
         */
        public function getProduct()
        {
            return $this->product;
        }

        /**
         * Set the value of product.
         *
         * @param mixed $product
         *
         * @return self
         */
        public function setProduct($product)
        {
            $this->product = $product;

            return $this;
        }
    }
