<?php
	class Barbare extends Perso
	{
		//n'utilise pas la magie
		//n'utilise pas d'arbalette
		//n'utilise pas d'armure complete ou enchantée
		//n'utilise pas de bouclier
		public function __construct()
		{
			$this->SetPV(35);
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>