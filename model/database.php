<?php
// connexion à la base de données

function connect() {

    $host = 'localhost';
    $dbname = 'ts21_gart';
    $user_name = 'root';
    $pass = '';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname",$user_name,$pass);
        echo "Connecter  ";
    } catch ( Exception  $e ) {
        echo "ERREUR :  " . $e->getMessage();
    }

    return $db;

}
