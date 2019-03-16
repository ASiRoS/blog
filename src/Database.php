<?php 

namespace App;


class Database {

	private $db,
			$sql,
			$where,
			$query,
			$values;


	public function __construct($dbname, $host, $user_name, $password) {
		$this->db = new \PDO("mysql:dbname=$dbname;host=$host", $user_name, $password);
	}


	public function select($sql) {
		$this->sql = $sql;
		return $this;
	}


	public function where($where=[]) {
		if(empty($where)) {
			return $this;
		}

		$this->sql .= " WHERE";

		$last = array_key_last($where);
		foreach($where as $field => $value) {
			$this->sql .= " $field = ?";
			$this->values[] = $value;

			if($field !== $last) {
				$this->sql .= ' AND';
			}
		}

		echo $this->sql;
		return $this;
	}


	public function execute() {
		$query = $this->db->prepare($this->sql);
		$query->execute($this->values);
		$this->query = $query;

		return $this;
	}


	public function fetchAll() {
		return $this->query->fetchAll(\PDO::FETCH_ASSOC);
	}

}