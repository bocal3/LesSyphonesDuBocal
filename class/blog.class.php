<?php
	class Blog
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
		private $_title;
		public function title()
		{
			return $this->_title;
		}
		public function setTitle($param)
		{
			$this->_title = $param;
		}
		private $_content;
		public function content()
		{
			return $this->_content;
		}
		public function setContent($param)
		{
			$this->_content = $param;
		}
		private $_flash;
		public function flash()
		{
			return $this->_flash;
		}
		public function setFlash($param)
		{
			$this->_flash = $param;
		}
		private $_date;
		public function date_()
		{
			return $this->_date;
		}
		public function setDate($param)
		{
			$this->_date = $param;
		}
		public function __construct($joueur,$title,$content,$flash,$date_)
		{
			$this->setName($joueur);
			$this->setTitle($title);
			$this->setContent($content);
			$this->setFlash($flash);
			$this->setDate($date_);
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
		public function select($limit)
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
			$requete = 'SELECT blog.*, players.name_players from blog, players where players.id_players = blog.fk_player order by id_blog desc limit 10 offset ' . $limit ;
			$reponse = $bdd->query($requete);
			$array = array();
			while ($donnees = $reponse->fetch())
			{
				$blog = new Blog("","","","","");
				$blog->setTitle($donnees['title_blog']);
				$blog->setName($donnees['name_players']);
				$blog->setContent($donnees['content_blog']);
				$blog->setFlash($donnees['flash_blog']);
				$blog->setDate($donnees['date_blog']);
				$array[] = $blog;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $array;
		}
		public function count_()
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
			$requete = 'SELECT count(*) as nbr_blog from blog';
			$reponse = $bdd->query($requete);
			while ($donnees = $reponse->fetch())
			{
				$count_ = $donnees['nbr_blog'];
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
			return $count_;
		}
		public function insert($blog)
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
			$bdd->exec('INSERT INTO blog(fk_player, title_blog, content_blog,flash_blog, date_blog) VALUES(' . $blog->name() . ',\'' . $blog->title() .'\', \''. $blog->content() .'\', \'' . $blog->flash() . '\',\'' . $blog->date_() . '\')');
		}
	}
?>