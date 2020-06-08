<?php
require("rubrique.php"); 

    $host = '127.0.0.1';
    $db   = 'annonce';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
        PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    // connexion à la base 
    try {
        $cnx = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        echo($e->getMessage()."\n");
        echo ((int)$e->getCode()."\n");
    }
    try {
        // requête select ->objets
        // si les champs de la classe coincident avec ceux de la table 

        $stmt = $cnx->query('SELECT id_rubrique,libelle FROM rubrique');
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_OBJ,PDO::FETCH_INTO,);
        // exécution et récupération des résultats
        $data = $stmt->fetchAll(PDO::FETCH_CLASS|..., ..., ...);
        //print_r($data);
        foreach($data as $j){
            echo($j."\n");
        }
    } catch (PDOException $e) {
        echo($e->getMessage()."\n");
        echo ((int)$e->getCode()."\n");
    }
    try {
        // requête insert
        $cnx->beginTransaction();
        $requete = "INSERT INTO job(id, libelle) VALUES(5,'administrateur')";
        // execution
        $rowcount=$cnx->exec($requete);
        echo($rowcount." ligne ajoutee\n");
        $cnx->commit();
        
    } catch (PDOException $e) {
        echo($e->getMessage()."\n");
        echo ((int)$e->getCode()."\n");
        $cnx->rollback();
    }
    //
    echo("la suite\n");
    // libère la connexion
    $cnx=null;
?>