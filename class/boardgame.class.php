<?php
	class Boardgame
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
		private $_duration;
		public function duration()
		{
			return $this->_duration;
		}
		public function setDuration($param)
		{
			$this->_duration = $param;
		}
		private $_age;
		public function age()
		{
			return $this->_age;
		}
		public function setAge($param)
		{
			$this->_age = $param;
		}
		private $_min_players;
		public function min_players()
		{
			return $this->_min_players;
		}
		public function setMinPlayers($param)
		{
			$this->_min_players = $param;
		}
		private $_max_players;
		public function max_players()
		{
			return $this->_max_players;
		}
		public function setMaxPlayers($param)
		{
			$this->_max_players = $param;
		}
		private $_extention;
		public function extention()
		{
			return $this->_extention;
		}
		public function setExtention($param)
		{
			$this->_extention = $param;
		}
		private $_have;
		public function have()
		{
			return $this->_have;
		}
		public function setHave($param)
		{
			$this->_have = $param;
		}
		private $_want;
		public function want()
		{
			return $this->_want;
		}
		public function setWant($param)
		{
			$this->_want = $param;
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
		public function __construct($name, $duration, $minmin_player, $max_player, $age, $extention)
		{
			$this->setName($name);
			$this->setDuration($duration);
			$this->setMinPlayers($minmin_player);
			$this->setMaxPlayers($max_player);
			$this->setAge($age);
			$this->setExtention($extention);
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
		public function selectnames_base_activ()
		{
			include("Sgbd.php");
			$requete = 'SELECT name_bg as Name FROM board_games where  is_activ = 1 and is_extention = 0 order by name_bg';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$jeu = new Boardgame("",0,0,0,0,0);
				$jeu->setName($donnees['Name']);
				$array[] = $jeu;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function selectnames_ext_activ()
		{
			include("Sgbd.php");
			$requete = 'select board_games.name_bg as Name from board_games where is_extention = 1  and is_activ = 1 ORDER BY board_games.name_bg';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$jeu = new Boardgame("",0,0,0,0,0);
				$jeu->setName($donnees['Name']);
				$array[] = $jeu;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function selectnames_search_activ($duree,$nbr,$age)
		{
			include("Sgbd.php");
			$requete = 'select name_bg as Name from board_games where  is_activ = 1 and is_extention = 0 and';
			if($duree != 1)
			{
				$requete .= ' duration_bg <= ';
				$requete .= $duree;
				if($age != 1 || $nbr != 1)
				{
					$requete .= ' and ';
				}
			}
			if($nbr != 1)
			{
				$requete .= ' min_players_bg <= ';
				$requete .= $nbr;
				$requete .= ' and max_players_bg >= ';
				$requete .= $nbr;
				if($age != 1)
				{
					$requete .= ' and ';
				}
			}
			if($age != 1)
			{
				$requete .= ' age_bg <= ';
				$requete .= $age;
			}
			$requete .= ' order by name_bg';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$jeu = new Boardgame("",0,0,0,0,0);
				$jeu->setName($donnees['Name']);
				$array[] = $jeu;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function est_extention($jeu)
		{
			include("Sgbd.php");
			$requete = 'select extension.fk_game_play from extension, game_plays, board_games where extension.fk_game_play = game_plays.id_gp and board_games.id_bg = extension.fk_board_game and board_games.name_bg like "' . $jeu . '" and is_activ = 1';
			$reponse = $bdd->query($requete);
			$isext=0;
			while ($donnees = $reponse->fetch())
			{
				$isext = $donnees['fk_game_play'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			if($isext != 0)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		public function count_ext($jeu)
		{
			include("Sgbd.php");
			$requete = 'select count(0) AS `number` from game_plays, points, board_games, extension where game_plays.id_gp = points.fk_game_plays and board_games.id_bg = extension.fk_board_game and points.won = 1 and extension.fk_game_play = game_plays.id_gp and name_bg like "' . $jeu .'" group by points.fk_board_games order by number desc';
			$reponse = $bdd->query($requete);
			$count_game = 0;
			while ($donnees = $reponse->fetch())
			{
				$count_game = $donnees['number'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $count_game;
		}
		public function count_($jeu,$joueur,$is_ext)
		{
			include("Sgbd.php");
			if($joueur == "")
			{
				if($is_ext != 0)
				{
					$requete = 'select count(0) AS `number` from game_plays, points, board_games, extension where game_plays.id_gp = points.fk_game_plays and board_games.id_bg = extension.fk_board_game and points.won = 1 and extension.fk_game_play = game_plays.id_gp and name_bg like "' . $jeu .'" group by points.fk_board_games order by number desc';
				}
				else
				{
					$requete = 'SELECT number FROM game_plays_count where name_bg like "' . $jeu .'"';
				}
			}
			else
			{
				$requete = 'select name_players, name_bg, count(0) as number from game_plays, players, board_games, points where  points.fk_players = players.id_players and points.fk_board_games = board_games.id_bg and points.fk_game_plays = game_plays.id_gp and players.name_players like \''. $joueur .'\' and board_games.name_bg like \''.$jeu.'\' group by players.name_players, board_games.name_bg';
			}
			$reponse = $bdd->query($requete);
			$count_game = 0;
			while ($donnees = $reponse->fetch())
			{
				$count_game = $donnees['number'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $count_game;
		}
		public function select_jeu($jeu)
		{
			include("Sgbd.php");
			$requete = 'SELECT * FROM board_games where name_bg like "'. $jeu. '" order by name_bg';
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$jeu = new Boardgame("",0,0,0,0,0);
				$jeu->setDuration($donnees['duration_bg']);
				$jeu->setMinPlayers($donnees['min_players_bg']);
				$jeu->setMaxPlayers($donnees['max_players_bg']);
				$jeu->setAge($donnees['age_bg']);
				$array[] = $jeu;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function select_id($jeu)
		{
			include("Sgbd.php");
			$id = 0;
			$requete = 'SELECT id_bg FROM board_games where name_bg like "' . $jeu .'"';
			$reponse = $bdd->query($requete);
			while ($donnees = $reponse->fetch())
			{
				$id = $donnees['id_bg'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $id;
		}
		public function insert($boardgame)
		{
			include("Sgbd.php");
			$bdd->exec('INSERT INTO board_games(name_bg, duration_bg, min_players_bg,max_players_bg, age_bg, ihave, is_extention) VALUES(\'' . $boardgame->name() . '\',' . $boardgame->duration() .', '. $boardgame->min_players() .', ' . $boardgame->max_players() . ',' . $boardgame->age() . ',1, ' . $boardgame->extention() . ')');
		}
	}
?>