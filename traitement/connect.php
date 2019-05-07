<?php

$connec_host = 'localhost';
$connec_dbname = 'projetannuel';
$connec_pseudo = 'root';
$connec_mdp = '';

try {
    $cnx = new PDO('mysql:host=' . $connec_host . ';dbname=' . $connec_dbname, $connec_pseudo, $connec_mdp);
    $cnx->exec("SET CHARACTER SET utf8");
    $cnx->exec("SET NAMES utf8");
    return $cnx;
} catch (PDOException $e) {
    echo 'echec de la conexion : ' . $e->getMessage();
}




