<?php


namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Administrador\Permisos_m;


class Escritorio extends BaseController{
	
	public function __construct()
  {
    
		
    
    //$this->data['jss'] = array(); 
    //$this->data['csss'] = array('css/escritorio.css'); 
  }
	
	
	
	
	public function index()
	{
		$data = [
        'titulo'   => 'Escritorio',
        
		];
		helper('url');
		$misession = session();
		
		$data['url'] = 'escritorio/';
		$estsis = 1;
		$iderol = $misession->get('iderol');
		
		$permiso = new Permisos_m();
			
		$data['sistemas'] = $permiso->listarSistemaRoles($estsis,$iderol);
		
		
		if ($misession->get('ideusu')) 
    {
      //echo view('login/login',$data); 
			return view('vistas/escritorio',$data);
    }
    else
    {
      return redirect()->to(site_url('login/salir'));
		}
		
		
	
		
	}
	
}


		 
		 
		
		