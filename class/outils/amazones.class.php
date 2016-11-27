<?php
	class AmazoneSylderienne extends Perso
	{
		//N'utilise pas de magie sauf pour les armes enchantée
		//N'utilise pas d'armure sup PR6
		//N'utilise pas de bouclier
		//Arme à dist arc ou javelot
		//arme contact à deux mains
		public function __construct()
		{
			$this->SetPV(38);
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>