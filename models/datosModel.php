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

}

$datos = new datosModel();
$datos->listDatas();

?>