<?php

class Connect {

	private $datos = array(
		"host" => "localhost",
		"user" => "root",
		"pass" => "",
		"db" => "usuarios"
	);
	private $con;


	public function __construct(){
		$this->con = new mysqli(
			$this->datos['host'],
			$this->datos['user'],
			$this->datos['pass'],
			$this->datos['db']	
		);
	}

	public function runQuerySample($sql) {
		$this->con->query($sql);
	}

	public function runQuery($sql) {
		$datos = $this->con->query($sql);
		return $datos; 
	}

}
?>