<?php
	class Hobbit extends Perso
	{
		//N'utilise pas de magie saur sur arme objet ou protection enchantée
		//N'utilise pas d'arc ni d'arme à deux mains humaines
		//N'utilise pas d'armure complete
		//N'utilise pas d'armue sup PR3 sauf magique
		//Transport de charge limité 10kg
		public function __construct()
		{
			$this->SetPV(25);
			//+ D4 par niveau
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>