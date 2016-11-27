<?php
	class DemiOrque extends Perso
	{
		//N'utilise pas la magie sauf sur arme ou protection enchantée
		//N'utilise pas d'arbalète ou d'arme complexe
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