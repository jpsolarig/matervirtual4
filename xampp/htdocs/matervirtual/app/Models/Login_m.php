<?php


namespace App\Models;
use CodeIgniter\Model;


class Login_m extends Model{
	
	private $cx_db;
	private $tabla = 'usuarios';
	
	public function __construct()
  {
    $this->cx_db = db_connect(); 
  }

	public function validarUsuario($corusu,$conusu)
	{
		$consulta = $this->cx_db->table($this->tabla);
    
		$resultado = $consulta->where(array(
			"corusu" => $corusu,
			"pasusu" => md5($conusu),	
		));

    $fila = $resultado->get()->getRow();

		return $fila;
	}
	
	
}

