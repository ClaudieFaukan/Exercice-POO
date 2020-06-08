<?php

    require_once 'Achat.php';
    require_once 'Produit.php';
    require_once 'ProduitPerissable.php';
    require_once 'Sac.php';
    require_once 'Armoire.php';
    require_once 'Refrigerateur.php';
    /**
     * PRODUIT. (Nom, Prix unitaire).
     */
    $produit7 = new Produit('test', '2');
    $produit3 = new Produit('Serpillière', '5');
    $produit4 = new Produit('Produit hygiène', '2');
    $produit5 = new Produit('Sac poubelle', '3');
    /**
     * PRODUIT PERISSABLE (date Peremption, nom , Prix Unitaire).
     */
    $produit = new ProduitPerissable('12/11/2019', 'Jambon', '2');
    $produit1 = new ProduitPerissable('10/11/2019', 'Salade', '5');
    $produit2 = new ProduitPerissable('15/11/2019', 'Steak haché', '6');
    $produit6 = new ProduitPerissable('06/11/2019', 'Pain', '8');

    /**
     * ACHAT (quantite, unité, date achat, produit acheter).
     */
    $achat = new Achat(2, '1', '02/11/2019', $produit);
    $achat1 = new Achat(2, '1', '02/11/2019', $produit1);
    $achat2 = new Achat(1, '1', '02/11/2019', $produit3);
    /**
     * SAC avec budget.
     */
    $sac = new Sac('19');
    // Ajout des achat dans le sac
    try {
        $sac->ajoute($achat);
        $sac->ajoute($achat2);
        $sac->ajoute($achat1);
    } catch (AchatException $e) {
        echo $e->getMessage()."\n";
        echo $e->getCode()."\n";
    }
    // Verification du sac
    $sac->getContenu();

    /**
     * TEST RANGEMENT DANS ARMOIRE.
     */
    $armoire = new Armoire();
    // AJOUT DANS LARMOIRE UNIQUEMENT LES PRODUITS NON PERSSIABLE
    $armoire->ajoute($achat);
    $armoire->ajoute($achat2);
    // VERIFICATION DU CONTENU
    $armoire->getContenu();

    /**
     * TEST RANGEMENT REFRIFERATEUR.
     */
    $refrigerateur = new Refrigerateur();
    // AJOUT DANS LE REFRIGERATEUR UNIQUEMENT LES PERRISSABLES
    $refrigerateur->ajoute($achat);
    $refrigerateur->ajoute($achat2);
    // VERIFICATION DU CONTENU
    $refrigerateur->getContenu();
