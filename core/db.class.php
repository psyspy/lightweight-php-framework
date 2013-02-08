<?php

	class db extends PDO{

		private static $instance = null;
		private $result = null;
		private $prefix = null;
		
		public function __construct($host, $user, $db, $password = '', $type = 'mysql', $prefix = 'lpf_'){
		
			$this->connection = new PDO($type.':dbname='.$db.';host='.$host,$user,$password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->prefix = $prefix;
			self::$instance = $this;
			
		}
		
		public static function get_instance(){
		
			return self::$instance;
		
		}
		
		public function query($query, $values = null){
			$this->result = $this->connection->prepare($query);
			$this->result->execute($values);
			/*$calories = 150;
			$colour = 'red';
			$sth = $dbh->prepare('SELECT name, colour, calories
				FROM fruit
				WHERE calories < :calories AND colour = :colour');
			$sth->execute(array(':calories' => $calories, ':colour' => $colour)); */
		}
		
		public function select($table, $columns = array(), $where = array()){
		}
		
		public function insert($table, $values = array(), $where = array()){
		}
		
		public function update($table, $values = array(), $where = array()){
		
		//update('user',array('session_id'=>$session_id),array('id'=>$user['id']));
		
		
		
		$query = 'update '.$this->prefix.$table.' set '.$set.' where '.$where;
		
		$this->result = $this->connection->prepare($query);
		$this->result->execute($values);
		
		}
		
		public function assoc(){
			$this->result->setFetchMode(PDO::FETCH_ASSOC);
			$results = $this->result->fetchAll();
			return $results;
			
		}
		
		public function get_prefix(){
			return $this->prefix;
		}
		
		public function rows(){
			return $this->result->rowCount();
		}

	}

?>