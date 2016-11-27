<?php
	class Gnome extends Perso
	{
		//N'utilise pas la magie suaf arme et protection enchantée
		//arme autorisé poignard couteaux petites lame uniquement
		//transport de charge limite 2kg
		//Ne parle pas la langue
		//N'utilie pas d'armure su^PR2
		public function __construct()
		{
			$this->SetPV(15);
			//+D4 par niveau
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
	}
?>