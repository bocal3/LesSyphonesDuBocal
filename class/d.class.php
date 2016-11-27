<?php
	class D
	{
		private $_taille;
		public function taille()
		{
			return $this->_taille;
		}
		public function setTaille($param)
		{
			$this->_taille = $param;
		}
		public function __construct($taille)
		{
			$this->setTaille($taille);
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
		public function roll()
		{
			return rand(1,$this->taille());
		}
	}
?>