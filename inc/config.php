<?php

require 'fonctions.php';

// Connexion à la DB
$dsn = 'mysql:dbname=db;host=localhost;charset=UTF8';
$user = 'root';
$password = '▲▲▲';

// Effectuer la connexion
$pdo = new PDO($dsn, $user, $password);

// J'initiale le titre de mes pages (valeur par défaut)
$pageTitle = 'Gestion de copies légales de films';