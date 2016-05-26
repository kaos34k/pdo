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
		if ( !$this->con->query($sql) ){
			printf("Error al realizar operaciones de unrecion de datos o editar datos revisa bien la conexión y la sintaxis de las mismas: %s\n", mysqli_error());
		}
	}

	public function runQuery($sql) {
		$datos = $this->con->query($sql);
		if ( !$datos ){
			printf("error al consultar los datos: %s\n", mysqli_error());
		} else {
			return $datos; 
		}	

	}

}
?>