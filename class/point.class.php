<?php
	class Point
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
		private $_player;
		public function player()
		{
			return $this->_player;
		}
		public function setPlayer($param)
		{
			$this->_player = $param;
		}
		private $_boardgame;
		public function bg()
		{
			return $this->_boardgame;
		}
		public function setBoardGame($param)
		{
			$this->_boardgame = $param;
		}
		private $_gameplay;
		public function gameplay()
		{
			return $this->_gameplay;
		}
		public function setGamePlay($param)
		{
			$this->_gameplay = $param;
		}
		private $_player_point;
		public function player_point()
		{
			return $this->_player_point;
		}
		public function setPoint($param)
		{
			$this->_player_point = $param;
		}
		private $_won;
		public function won()
		{
			return $this->_won;
		}
		public function setWon($param)
		{
			$this->_won = $param;
		}
		public function __construct($joueur,$jeu,$partie,$valeur)
		{
			$this->setPlayer($joueur);
			$this->setBoardGame($jeu);
			$this->setGamePlay($partie);
			$this->setPoint($valeur);
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
		public function insert($point)
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=juegos;charset=utf8', 'root', '');
				//On se connecte à la base de données avec les bosn identifiants.
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			$bdd->exec('INSERT INTO `points`(`fk_players`, `fk_board_games`, `fk_game_plays`, `player_points`, `won`) VALUES (' . $point->player() . ',' . $point->bg() .',' . $point->gameplay() . ',' . $point->player_point() . ',0)');
		}
		public function update($id_gp, $valeur)
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=juegos;charset=utf8', 'root', '');
				//On se connecte à la base de données avec les bosn identifiants.
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			$bdd->exec('UPDATE `points` SET `won`= 1 WHERE points.fk_game_plays = ' . $id_gp . ' and points.player_points = ' . $valeur);
		}
	}
?>