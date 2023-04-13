<?php
	class deplacement{
		private int $id_dep;
		private string $data_depart;
		private string $lieu_depart;
		private string $duree_depart;
		private string $destination;
		private string $instructions;
		private string $cout_personne;

		
		
		function __construct($id_dep, $data_depart,$lieu_depart, $duree_depart, $destination, $instructions, $cout_personne){
			$this->id_dep=$id_dep;
			$this->data_depart=$data_depart;
			$this->lieu_depart=$lieu_depart;
			$this->duree_depart=$duree_depart;
			$this->destination=$destination;
			$this->instructions=$instructions;
			$this->cout_personne=$cout_personne;
		}
		function getid_dep(){
			return $this->id_dep;
		}
		function getdata_depart(){
			return $this->data_depart;
		}
		function getlieu_depart(){
			return $this->lieu_depart;
		}
		function getduree_depart(){
			return $this->duree_depart;
		}
		function getdestination(){
			return $this->destination;
		}
		function getinstructions(){
			return $this->instructions;
		}
		function getcout_personne(){
			return $this->cout_personne;
		}
		function setid_dep(string $id_dep){
			$this->id_dep=$id_dep;
		}
		function setdata_depart(string $data_depart){
			$this->data_depart=$data_depart;
		}
		function setlieu_depart(string $lieu_depart){
			$this->lieu_depart=$lieu_depart;
		}
		function setduree_depart(string $duree_depart){
			$this->duree_depart=$duree_depart;
		}
		function setdestination(string $destination){
			$this->destination=$destination;
		}
		function setinstructions(string $instructions){
			$this->instructions=$instructions;
		}
		function setcout_personne(string $cout_personne){
			$this->cout_personne=$cout_personne;
		}
	}


?>