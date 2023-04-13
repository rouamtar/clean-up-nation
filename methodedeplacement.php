<?php
class Methodedeplacement {
	private int $id_md;
	private string $libelle;
	private string $impact_env;
	private string $point_bonus;
	private string $nb_passagers_max;
	
	public function __construct(int $id_md, string $libelle, string $impact_env, string $point_bonus, string $nb_passagers_max) {
		$this->id_md = $id_md;
		$this->libelle = $libelle;
		$this->impact_env = $impact_env;
		$this->point_bonus = $point_bonus;
		$this->nb_passagers_max = $nb_passagers_max;
	}
	
	public function getid_md(): int {
		return $this->id_md;
	}
	
	public function getLibelle(): string {
		return $this->libelle;
	}
	
	public function getImpactEnv(): string {
		return $this->impact_env;
	}
	
	public function getPointBonus(): string {
		return $this->point_bonus;
	}
	
	public function getNbPassagersMax(): string {
		return $this->nb_passagers_max;
	}
	
	public function setIdMd(int $id_md): void {
		$this->id_md = $id_md;
	}
	
	public function setLibelle(string $libelle): void {
		$this->libelle = $libelle;
	}
	
	public function setImpactEnv(string $impact_env): void {
		$this->impact_env = $impact_env;
	}
	
	public function setPointBonus(string $point_bonus): void {
		$this->point_bonus = $point_bonus;
	}
	
	public function setNbPassagersMax(string $nb_passagers_max): void {
		$this->nb_passagers_max = $nb_passagers_max;
	}
}
?>

