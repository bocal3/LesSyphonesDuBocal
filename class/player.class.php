<?php
	class Player
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
		private $_name;
		public function name()
		{
			return $this->_name;
		}
		public function setName($param)
		{
			$this->_name = $param;
		}
		private $_password;
		public function password()
		{
			return $this->_password;
		}
		public function setPassword($param)
		{
			$this->_password = $param;
		}
		private $_activ;
		public function activ()
		{
			return $this->_activ;
		}
		public function setActiv($param)
		{
			$this->_activ = $param;
		}
		const VALEUR_INFINI = 1000;
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
		public function selectnames_activ()
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
			$requete = 'select players.name_players as Name from players where is_activ = 1 ORDER BY players.name_players';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$joueur = new Player("");
				$joueur->setName($donnees['Name']);
				$array[] = $joueur;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function count_($joueur)
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
			$requete = 'SELECT number FROM game_plays_player where name_players like "' . $joueur .'"';
			$reponse = $bdd->query($requete);
			$count_game = 0;
			while ($donnees = $reponse->fetch())
			{
				$count_game = $donnees['number'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $count_game;
		}
		public function select_id($joueur)
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
			$id = 0;
			$requete = 'SELECT id_players FROM players where name_players like "' . $joueur .'"';
			$reponse = $bdd->query($requete);
			while ($donnees = $reponse->fetch())
			{
				$id = $donnees['id_players'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $id;
		}
		public function select_pass($joueur)
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
			$pass = "";
			$requete = 'SELECT password_players FROM players where name_players like "' . $joueur->name() .'" and is_activ = 1';
			$reponse = $bdd->query($requete);
			while ($donnees = $reponse->fetch())
			{
				$pass = $donnees['password_players'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $pass;
		}
		public function inscription($player)
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
			$bdd->exec('INSERT INTO `players`(`name_players`, `password_players`) VALUES (\'' . $player->name() . '\',\'' . $player->password() . '\')');
		}
	}
?>