<?php
	include '../config.php';
	include_once '../Model/methodedeplacement.php';
	class methodedeplacementC {
		function affichermethodedeplacement(){
			$sql="SELECT * FROM methode_deplacement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimermethodedeplacement($id_md){
			$sql="DELETE FROM methode_deplacement WHERE id_md=:id_md";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_md', $id_md);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutermethodedeplacement($methodedeplacement){
			$sql="INSERT INTO methode_deplacement (id_md, libelle, impact_env, points_bonus, nb_passagers_max) 
			VALUES (:id_md,:libelle,:impact_env, :points_bonus,:nb_passagers_max)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_md' => $methodedeplacement->getid_md(),
					'libelle' => $methodedeplacement->getLibelle(),
					'impact_env' => $methodedeplacement->getImpactEnv(),
					'points_bonus' => $methodedeplacement->getPointBonus(),
					'nb_passagers_max' => $methodedeplacement->getNbPassagersMax()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermethodedeplacement($id_md){
			$sql="SELECT * from methode_deplacement WHERE id_md=$id_md";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$methodedeplacement=$query->fetch();
				return $methodedeplacement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermethodedeplacement($methodedeplacement, $id_md){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE methode_deplacement SET 
						libelle= :libelle, 
						impact_env= :impact_env, 
						points_bonus= :points_bonus, 
						nb_passagers_max= :nb_passagers_max 
					WHERE id_md= :id_md'
				);
				$query->execute([
					'libelle' => $methodedeplacement->getLibelle(),
					'impact_env' => $methodedeplacement->getImpactEnv(),
					'points_bonus' => $methodedeplacement->getPointBonus(),
					'nb_passagers_max' => $methodedeplacement->getNbPassagersMax(),
					'id_md' => $id_md
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>