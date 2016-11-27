<?php
	class Perso
	{
		// si les compétence sont au dessus de 12 ou en dessous de 8, celle-ci apporte d'autre modification TODO
		private $_name;
		public function name()
		{
			return $this->_name;
		}
		public function setName($param)
		{
			$this->_name = $param;
		}
		private $_sexe;
		public function sexe()
		{
			return $this->_sexe;
		}
		public function setSexe($param)
		{
			$this->_sexe = $param;
		}
		private $_origine;
		public function origine()
		{
			return $this->_origine;
		}
		public function setOrigine($param)
		{
			$this->_origine = $param;
		}
		private $_metier;
		public function metier()
		{
			return $this->_metier;
		}
		public function setMetier($param)
		{
			$this->_metier = $param;
		}
		private $_cou;
		public function cou()
		{
			return $this->_cou;
		}
		public function setCOU($param)
		{
			$this->_cou = $param;
		}
		private $_ad;
		public function ad()
		{
			return $this->_ad;
		}
		public function setAD($param)
		{
			$this->_ad = $param;
		}
		private $_int;
		public function int_()
		{
			return $this->_int;
		}
		public function setINT($param)
		{
			$this->_int = $param;
		}
		private $_fo;
		public function fo()
		{
			return $this->_fo;
		}
		public function setFO($param)
		{
			$this->_fo = $param;
		}
		private $_cha;
		public function cha()
		{
			return $this->_cha;
		}
		public function setCHA($param)
		{
			$this->_cha = $param;
		}
		private $_pv;
		public function pv()
		{
			return $this->_pv;
		}
		public function setPV($param)
		{
			$this->_pv = $param;
		}
		private $_att;
		public function att()
		{
			return $this->_att;
		}
		public function setATT($param)
		{
			$this->_att = $param;
		}
		private $_prd;
		public function prd()
		{
			return $this->_prd;
		}
		public function setPRD($param)
		{
			$this->_prd = $param;
		}
		private $_destin;
		public function destin()
		{
			return $this->_destin;
		}
		public function setDestin($param)
		{
			$this->_destin = $param;
		}
		private $_po;
		public function po()
		{
			return $this->_po;
		}
		public function setPO($param)
		{
			$this->_po = $param;
		}
		public function __construct()
		{
			$this->SetATT(8);
			$this->SetPRD(10);
		}
		public function hydrate(array $donnees)
		{
			foreach($donnees as $key => $value)
			{
				$method = 'set'.ucfirst($key); // On récupère le nom du setter correspondant à l'attribut.
				if(method_exists($this, $method))
				{
					$this->$method($value);
				}
			}
		}
		public function __toString()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha() . '</br>PV : ' . $this->pv() . '</br>Point de destin : ' . $this->destin() . '</br>PO : ' . $this->po() . '</br>ATT : ' . $this->att() . '</br>PRD : ' . $this->prd();
		}
		public function couadintfocha()
		{
			return "COU : " . $this->cou() . '</br>AD : ' . $this->ad() . '</br>INT : ' . $this->int_() . '</br>FO : ' . $this->fo() . '</br>CHA : ' . $this->cha();;
		}
	}
?>