<?php
	class DemiOrque extends Perso
	{
		//N'utilise aucune forme de magie
		//Ne parle pas la langue
		//transport de carge limité 10kg
		public function __construct()
		{
			$this->SetPV(20);
			//+ D4 par niveau
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>