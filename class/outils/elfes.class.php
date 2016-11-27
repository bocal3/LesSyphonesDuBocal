<?php
	class ElfeSylvain extends Perso
	{
		//n'utilise pas les armes à deux mains
		//transport de charge limité 10kg
		//n'utilise pas d'armue sup PR4 (sauf magique)
		//pas d'aptitude à la magie
		public function __construct()
		{
			$this->SetPV(25);
		}
		//CHA +1 aux niveaux 2 et 3
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>