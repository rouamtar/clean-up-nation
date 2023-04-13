<?php
    include '../Controller/methodedeplacementC.php';
    $methodedeplacementC = new methodedeplacementC();
    $methodedeplacementC->supprimerMethodedeplacement($_GET["id_md"]);
    header('Location: affichermethodedeplacement.php');
?>

