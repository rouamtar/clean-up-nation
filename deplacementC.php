<?php
	include '../config.php';
	include_once '../Model/deplacement.php';
	class deplacementC {
		function afficherdeplacement(){
			$sql="SELECT * FROM deplacement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerdeplacement($id_dep){
			$sql="DELETE FROM deplacement WHERE id_dep=:id_dep";
			$db = config::getConnexion();
			
			$req=$db->prepare($sql);
			$req->bindValue(':id_dep', $id_dep);
			
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterdeplacement($deplacement){
			$sql="INSERT INTO deplacement (id_dep, data_depart, lieu_depart, duree_depart, destination,instructions, cout_personne) 
			VALUES (:id_dep,:data_depart,:lieu_depart, :duree_depart,:destination,:instructions, :cout_personne)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_dep' => $deplacement->getid_dep(),
					'data_depart' => $deplacement->getdata_depart(),
					'lieu_depart' => $deplacement->getlieu_depart(),
					'duree_depart' => $deplacement->getduree_depart(),
					'destination' => $deplacement->getdestination(),
					'instructions' => $deplacement->getinstructions(),
					'cout_personne' => $deplacement->getcout_personne(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererdeplacement($id_dep){
			$sql="SELECT * from deplacement where id_dep=$id_dep";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$deplacement=$query->fetch();
				return $deplacement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifier_deplacement($deplacement, $id_dep){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE deplacement SET 
						data_depart= :data_depart, 
						lieu_depart= :lieu_depart, 
						duree_depart= :duree_depart, 
						destination= :destination, 
						instructions= :instructions,
						cout_personne= :cout_personne
					WHERE id_dep= :id_dep'
				);
				$query->execute([
					'data_depart' => $deplacement->getdata_depart(),
					'lieu_depart' => $deplacement->getlieu_depart(),
					'duree_depart' => $deplacement->getduree_depart(),
					'destination' => $deplacement->getdestination(),
					'instructions' => $deplacement->getinstructions(),
					'cout_personne' => $deplacement->getcout_personne(),
					'id_dep' => $id_dep
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage(); // afficher l'erreur pour déboguer
			}
		}
	}
		
?>