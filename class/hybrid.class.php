<?php
	class Hybrid
	{
		private $_name;
		public function name()
		{
			return $this->_name;
		}
		public function setName($param)
		{
			$this->_name = $param;
		}
		private $_type;
		public function type()
		{
			return $this->_type;
		}
		public function setType($param)
		{
			$this->_type = $param;
		}
		
		public function __construct($name)
		{
			$this->setName($name);
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
		public function search($caract)
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=juegos;charset=utf8', 'root', '');
				// On se connecte à la base de données avec les bosn identifiants.
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
			$requete = 'select players.name_players as Name, \'joueur\' as Type from players where players.name_players LIKE \'%' . $caract .'%\'' . ' and players.is_activ = 1 UNION SELECT board_games.name_bg as Name , \'jeu\' as Type   from board_games where board_games.name_bg LIKE \'%' . $caract .'%\'  and board_games.is_activ = 1 and is_extention = 0';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$hybrid = new Hybrid("");
				$hybrid->setName($donnees['Name']);
				$hybrid->setType($donnees['Type']);
				$array[] = $hybrid;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
	}
?>