<?php

try {
    $connection = mysqli_connect("localhost","root" ,"" ,"chatapp" );
    if (!$connection) {
        throw new Exception("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // echo "Connexion réussie à la base de données!\n";
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
