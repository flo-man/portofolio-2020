<?php

// Création ou ouverture de session
session_start();

// Chemin du site
define('RACINE_SITE', '/php/portfolio/');

// Variable d'affichage :
$contenu = '';

// Inclusion des fonctions
require_once 'functions.php'; // Fait l'inclusion une seule fois du fichier spécifié