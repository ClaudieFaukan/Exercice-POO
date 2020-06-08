<?php
require_once ("rubrique.php"); 

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
        // ssi les champs de la classe coincident avc ceux de la table    
        $stmt = $cnx->query('SELECT ID_RUBRIQUE,LIBELLE FROM rubrique');
        $stmt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Rubrique',[null, null]);
        // exécution et récupération des résultats
        $data = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Rubrique',[null, null]);
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
        $requete = "INSERT INTO rubrique VALUES LIBELLE=('Vacances')";
   
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