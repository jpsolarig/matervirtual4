<?php

namespace App\Models\Administrador;
use CodeIgniter\Model;

class Permisos_m extends Model{
	
	private $cx_db;
	private $tabla = 'sistemas';
	
	public function __construct()
  {
    $this->cx_db = db_connect(); 
  }
	
	
	public function listarSistemaRoles($estsis,$iderol)
	{
	  $consulta = $this->cx_db->table($this->tabla." as sis");
		$consulta->select('sis.nomsis,sis.dessis,sis.urlsis,col.descol,ico.desico');
		$consulta->join('colores as col', 'col.idecol = sis.idecol');
		$consulta->join('iconos as ico', 'ico.ideico = sis.ideico');
		$consulta->join('permisos_sistemas as persis', 'persis.idesis = sis.idesis');
		$consulta->join('roles as rol', 'rol.iderol = persis.iderol');
		$consulta->orderBy('ordsis', 'ASC');
		
		$resultado = $consulta->where(array(
			"persis.estsis" => $estsis,
			"rol.iderol" => $iderol,	
		));
		
		return $resultado->get()->getResult();
		
		//echo "<pre>";
		//print_r($fila);
		
		//return $fila;
		
	}
	
}
