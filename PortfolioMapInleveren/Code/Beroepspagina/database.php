<?php
    $host = "localhost";
    $dbnaam = "beroepsportfolio2";
    $gnaam = "root";
    $password = "";

    try {
        $verbinding = new PDO("mysql:host=$host;dbname=$dbnaam;", $gnaam, $password);
    }catch (PDOException $e){
        echo "databaseverbinding mislukt";
    }

?>