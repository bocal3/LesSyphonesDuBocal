<?php
	class Nain extends Perso
	{
		//n'utilise pas la magie sauf sur arme ou protection enchantée
		//n'utilise pas d'arbalète
		//n'utilise pas d'arme à deux mains humaines
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