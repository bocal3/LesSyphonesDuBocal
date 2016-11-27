<?php
	class Gnome extends Perso
	{
		//N'utilise pas d'arme compliqué à manier
		//N'utilise aucune forme de magie
		//Ne parle pas la langue
		//N'utilise pas d'arbalète ou d'arc
		//N'utlkise pas d'armue sup 4PR
		public function __construct()
		{
			$this->SetPV(45);
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>