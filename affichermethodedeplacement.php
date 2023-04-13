
<?php
	include '../Controller/methodedeplacementC.php';
	$methodedeplacementC=new methodedeplacementC();
	$methodedeplacement=$methodedeplacementC->affichermethodedeplacement(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajoutermethodedeplacement.php">Ajouter un methode deplacement</a></button>
		<center><h1>methode des deplacements</h1></center>
		<table border="1" align="center">
			<tr>
				<th>libelle</th>
				<th>impact_env</th>
				<th>Points bonus</th>
				<th>nb_passagers_max</th>
				
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($methodedeplacement as $methodedeplacement){
			?>
			<tr>
				<td><?php echo $methodedeplacement['libelle']; ?></td>
				<td><?php echo $methodedeplacement['impact_env']; ?></td>
				<td><?php echo $methodedeplacement['points_bonus']; ?></td>
				<td><?php echo $methodedeplacement['nb_passagers_max']; ?></td>
				
				<td>
					<form method="POST" action="modifiermethodedeplacement.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $methodedeplacement['id_md']; ?> name="id_md">
					</form>
				</td>
				<td>
					<a href="supprimermethodedeplacement.php?id_md=<?php echo $methodedeplacement['id_md']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
