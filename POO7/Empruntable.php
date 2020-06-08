<?php
require_once('OuvrageEmpruntable.php');
require_once('EmpruntException.php');
        interface Empruntable{
             public function setDateRetour($change);
             public function setDateEmprunt($retour);
    }
?>