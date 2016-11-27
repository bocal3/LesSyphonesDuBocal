<?php
	class Humain extends Perso
	{
//Peux faire de la magie sur des objets ou des enchantements
//Si pas de métiers,peux choiris deux compétences au choix sauf "appel du sauvage" dans la liste complète
		public function __construct()
		{
			$this->SetPV(30);
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>