<?php
	include '../Controller/deplacementC.php';
	$deplacementC=new deplacementC();
	$listedeplacement=$deplacementC->afficherdeplacement(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterdeplacement.php">Ajouter un deplacement</a></button>
		<center><h1>Liste des deplacements</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_dep</th>
				<th>data_depart</th>
				<th>lieu_depart</th>
				<th>duree_depart</th>
				<th>destination</th>
				<th>instructions</th>
				<th>cout_personne</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listedeplacement as $deplacement){
			?>
			<tr>
				<td><?php echo $deplacement['id_dep']; ?></td>
				<td><?php echo $deplacement['data_depart']; ?></td>
				<td><?php echo $deplacement['lieu_depart']; ?></td>
				<td><?php echo $deplacement['duree_depart']; ?></td>
				<td><?php echo $deplacement['destination']; ?></td>
				<td><?php echo $deplacement['instructions']; ?></td>
				<td><?php echo $deplacement['cout_personne']; ?></td>
				<td>
					<form method="POST" action="modifierdeplacement.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $deplacement['id_dep']; ?> name="id_dep">
					</form>
				</td>
				<td>
					<a href="supprimerdeplacement.php?id_dep=<?php echo $deplacement['id_dep']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
