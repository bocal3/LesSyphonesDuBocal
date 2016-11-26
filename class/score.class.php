<?php
	class Score
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
		private $_valeur;
		public function valeur()
		{
			return $this->_valeur;
		}
		public function setValeur($param)
		{
			$this->_valeur = $param;
		}
		public function __construct($name, $valeur)
		{
			$this->setName($name);
			$this->setValeur($valeur);
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
		public function select_top($jeu,$joueur,$is_ext)
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
			if($joueur == "")
			{
				if($is_ext != 0)
				{
					$requete = 'SELECT name_players as Name, top as total FROM extentions where name_bg like "' . $jeu . '" order by top desc';
					
				}
				else
				{
					$requete = 'SELECT name_players as Name, total FROM top_score where name_bg like "' . $jeu . '" order by total desc';
				}
			}
			else if($jeu == "")
			{
				$requete = 'SELECT name_bg as Name, total FROM players_top where name_players like "' . $joueur . '" order by total desc';
			}
			else
			{
				$requete = 'SELECT name_bg as Name, total FROM top_score where name_players like "' . $joueur . '" and name_bg like  "' . $jeu . '"  order by total desc';
			}
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$score = new Score("",0,0,0,0,0);
				$score->setName($donnees['Name']);
				$score->setValeur($donnees['total']);
				$array[] = $score;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function select_avg($jeu,$joueur,$is_ext)
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
			if($joueur == "")
			{
				if($is_ext != 0)
				{
					$requete = 'SELECT  name_players as Name, avg as total FROM extentions where name_bg like "' . $jeu . '" order by avg desc';
				}
				else
				{
					$requete = 'SELECT name_players as Name, total FROM average_score where name_bg like "' . $jeu . '" order by total';
				}
			}
			else if($jeu == "")
			{
				$requete = 'SELECT name_bg as Name, total FROM players_average where name_players like "' . $joueur . '" order by total desc';
			}
			else
			{
				$requete = 'SELECT name_bg as Name, total FROM average_score where name_players like "' . $joueur . '" and name_bg like  "' . $jeu . '"  order by total desc';
			}
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$score = new Score("",0,0,0,0,0);
				$score->setName($donnees['Name']);
				$score->setValeur($donnees['total']);
				$array[] = $score;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function select_percent($jeu,$joueur,$is_ext)
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
			if($joueur == "")
			{
				if($is_ext != 0)
				{
					$requete = 'SELECT name_players as Name, percent as winning_percentage FROM extentions where name_bg like "' . $jeu . '" order by tot desc';
				}
				else
				{
					$requete = 'SELECT name_players as Name, winning_percentage FROM victory_percentage where name_bg like "' . $jeu . '" order by winning_percentage desc';
				}
			}
			else if($jeu == "")
			{
				$requete = 'SELECT name_bg as Name, winning_percentage FROM players_percentage where name_players like "' . $joueur . '"   order by winning_percentage desc';
			}
			else
			{
				$requete = 'SELECT name_players as Name, winning_percentage FROM victory_percentage where name_players like "' . $joueur . '" and name_bg like  "' . $jeu . '"  order by winning_percentage desc';
			}
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$score = new Score("",0,0,0,0,0);
				$score->setName($donnees['Name']);
				$score->setValeur($donnees['winning_percentage']);
				$array[] = $score;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function select_tot($jeu,$joueur,$is_ext)
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
			if($joueur == "")
			{
				if($is_ext != 0)
				{
					$requete = 'SELECT name_players as Name, tot as total  FROM extentions where name_bg like "' . $jeu . '" order by tot desc';
				}
				else
				{
					$requete = 'SELECT name_players as Name, total FROM total_point where name_bg like "' . $jeu . '"  order by total desc';
				}
			}
			else if($jeu == "")
			{
				$requete = 'SELECT name_bg as Name, total FROM players_total where name_players like "' . $joueur . '" order by total desc';
			}
			else
			{
				$requete = 'SELECT name_bg as Name, total FROM total_point where name_players like "' . $joueur . '" and name_bg like  "' . $jeu . '"  order by total desc';
			}
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$score = new Score("",0,0,0,0,0);
				$score->setName($donnees['Name']);
				$score->setValeur($donnees['total']);
				$array[] = $score;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
	}
?>