<?php
    $host="127.0.0.1";
    $db="annonce";
    $user="root";
    $pass="";
    $charset="utf8";

    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE               =>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES      =>false,
    ];

    
    try{
        //connexion à la base
        $cnx = new PDO($dsn, $user, $pass, $options);
        // requête    
         $stmt = $cnx->query('SELECT LIBELLE FROM rubrique');
         // exécution et récupération des résultats
         $data = $stmt->fetchAll(PDO::FETCH_COLUMN);
         print_r($data);

         // requête    
         $stmt = $cnx->query('SELECT ID_RUBRIQUE, LIBELLE FROM rubrique');
         // exécution et récupération des résultats
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         print_r($data);

         // requête    
         $requete = "INSERT INTO rubrique (LIBELLE) VALUES('Colocation')";
         $cnx->exec($requete);
         echo('1 ligne ajoutee');
        
         $stmt = $cnx->query('SELECT ID_RUBRIQUE, LIBELLE FROM rubrique');
         // exécution et récupération des résultats
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         print_r($data);
        
         $requete= "DELETE FROM rubrique WHERE libelle = ('Colocation')";
         $cnx->exec($requete);
         echo '1 ligne supprimé';

         $stmt = $cnx->query('SELECT ID_RUBRIQUE, LIBELLE FROM rubrique');
         // exécution et récupération des résultats
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         print_r($data);

         $requete= "UPDATE rubrique SET LIBELLE = 'CHANGER' WHERE  ID_RUBRIQUE =('4')";
         $cnx->exec($requete);
         echo ' libelle changer';
        
         $stmt = $cnx->query('SELECT ID_RUBRIQUE, LIBELLE FROM rubrique');
         // exécution et récupération des résultats
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         print_r($data);
         



    }
    catch (\PDOException $e) {
    echo($e->getMessage()."\n");
    echo ((int)$e->getCode()."\n");
    }

    echo("la suite\n");
    // libère la connexion
    $cnx=null;
?>