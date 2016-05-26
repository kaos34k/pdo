<?php 

require_once('Connect.php');

class datosModel {
	private $nombre;
	private $apellido;

	public function __construct (){
		$this->con = new Connect();
	}

	public function listDatas() {
		$sql = 'SELECT * FROM datos';
		$data = $this->con->runQuery($sql);
		return $data;
	}

	public function findByPropertyDatos( $property, $value ) {
		//$sql = "SELECT * FROM datos WHERE  =  ";
		$sql= "SELECT * FROM datos WHERE 	{$property} = '{$value}'";
		$data = $this->con->runQuery($sql);
		return $data;
	}

	public function insert(){
		$sql = "INSERT INTO datos(nombre, apellido) 
				VALUES ( {$this->nombre}, {$this->apellido} )";
		$data = $this->con->runQuerySample($sql);

	}



}

$datos = new datosModel();
$result = $datos->listDatas();
$resultP = $datos->findByPropertyDatos( 'nombre','yesion' );

while ( $row =  mysqli_fetch_array( $result ) ) {
	echo $row['nombre']."-- ". $row['apellido'] ."</br>"; 
}

while ( $row =  mysqli_fetch_array( $resultP ) ) {
	echo $row['nombre']."</br>" ; 
}



?>