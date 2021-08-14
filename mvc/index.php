<?php
// Récupération des données
require_once('./model.php');

$req = getPosts();
require('./indexView.php');
?>