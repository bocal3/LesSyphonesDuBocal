<?php
	class NainMafia extends Perso
	{
		//N'utilise pas la magie sauf sur arme ou protection enchantée
		//N'utilise pas d'armure sup PR5 sauf magique
		//N'utilise pas de boucvlier
		//Transport de charge limite 8kg
		//Utilise n'importe quelle arme à dist sauf arcs
		//N'utilise pas les armes à 2 mains
		//N'utilise pas d'arme longue dans la main gauche
		public function __construct()
		{
			$this->SetPV(38);
			//+ D4 par niveau
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>