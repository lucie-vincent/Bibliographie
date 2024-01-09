<?php

// include"Auteur.php";
// include"Livre.php";

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$stephenKing = new Auteur("KING", "Stephen");

$livreCa = new Livre("Ca", 1986, 1138, 20, $stephenKing);
$livreSimetierre = new Livre("Simetierre", 1983, 374, 15, $stephenKing);
$livreLeFleau = new Livre("Le Fleau", 1978, 823, 14, $stephenKing);
$livreShining = new Livre("Shining", 1977, 447, 16, $stephenKing);

echo $stephenKing->afficherBibliographie();

echo $stephenKing;