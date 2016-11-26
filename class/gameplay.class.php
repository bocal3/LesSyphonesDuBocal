<?php
	class GamePlay
	{
		private $_id;
		public function id()
		{
			return $this->_id;
		}
		public function setId($param)
		{
			$this->_id = $param;
		}
		private $_date;
		public function _date()
		{
			return $this->_date;
		}
		public function setDate($param)
		{
			$this->_date = $param;
		}
		private $_location;
		public function location()
		{
			return $this->_location;
		}
		public function setLocation($param)
		{
			$this->_location = $param;
		}public function __construct($date, $location)
		{
			$this->setDate($date);
			$this->setLocation($location);
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
		public function insert($gameplay)
		{
			include("Sgbd.php");
			$bdd->exec('INSERT INTO game_plays(date_gp, location_gp) VALUES(\'' . date("Y-m-d") . '\',\'' . addslashes($gameplay->location()) .'\')');
			$last = $bdd->query('SELECT max(id_gp) as max FROM game_plays ');
			while ($donnees = $last->fetch())
			{
				$lastid = $donnees['max'];
			}
			$last->closeCursor(); // Termine le traitement de la requête
			return $lastid;
		}
		public function boardgame_gameplay($id_bg, $id_gp)
		{
			include("Sgbd.php");
			$bdd->exec('INSERT INTO extension(fk_game_play, fk_board_game) VALUES(' . $id_gp . ',' . $id_bg .')');
		}
	}
?>