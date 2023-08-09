<?php

$servername = "mysql";
$username = "models-user";
$password = "models-pwd";
$database = "classicmodels";

try {
    $conn = new PDO("mysql:host=mysql;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query("SELECT * FROM products LIMIT 10");
    $products=$result-> fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("La connexion a échoué : " . $e->getMessage());
}


$conn = null;

?>