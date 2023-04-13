<?php
	include '../Controller/deplacementC.php';
	$deplacementC=new deplacementC();
	$deplacementC->supprimerdeplacement($_GET["id_dep"]);
	header('Location:afficherdeplacement.php');
?>
