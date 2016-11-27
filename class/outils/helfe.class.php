<?php
	class HautElfe extends Perso
	{
		//n'utilise pas les armes à deux mains
		//transport de charge limité 10kg
		//n'utilise pas d'armue sup PR4 (sauf magique)
		public function __construct()
		{
			$this->SetPV(25);
		}
		//+1 CHA au passage niveaux 2 et 3
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>