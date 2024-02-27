<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "VenteBois";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie à la base de données.";
}
 catch(PDOException $e) {
        die("La connexion à la base de données a échoué : " . $e->getMessage());
}

$conn = null;
