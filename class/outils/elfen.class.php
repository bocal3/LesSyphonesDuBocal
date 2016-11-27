<?php
	class ElfeNoir extends Perso
	{
		//n'utilise pas les armes à deux mains
		//transport de charge limité 15kg
		//n'utilise pas d'armue sup PR3 (sauf magique)
		//n'utilise pas de bouclier
		public function __construct()
		{
			$this->SetPV(25);
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>