<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Login_m;


class Login extends BaseController
{
	public function validacionesLogin()
	{
		$validaciones = $this->validate([
        
				'input-correo' => [
            'rules'  => 'required|valid_email',
					  'errors' => [
							  'required' => 'El Correo Electrónico es obligatorio.',
                'valid_email' => 'Compruebe el Correo Electrónico. No parece ser válido.'
            ]],
				'input-clave' => [
            'rules'  => 'required',
					  'errors' => [
                'required' => 'La Contraseña es obligatorio.'
            ]],
    ]);
		
		return $validaciones;
	}
	
	public function index()
	{
		helper('form');  
		$misession = session(); 
		$data['mensaje_flash'] = $misession->getFlashdata('mensaje_flash'); 
		
		if ($misession->get('ideusu')){
			return redirect()->to(site_url('escritorio'));
		}
		else{
			return view('login/login',$data); 
		}
	}
	
	public function ValidarLogin()
	{
		$mirequest = \Config\Services::request();  
		
		$misession = session();  
		
		$validaciones = $this->validacionesLogin(); 
						
		if(!$validaciones){
			$this->index();
		}
		else
		{
			$datos['corusu'] = $mirequest->getPost('input-correo');
			$datos['conusu'] = $mirequest->getPost('input-clave');
						
			$login = new Login_m();
			
      $resultado = $login->validarUsuario($datos['corusu'],$datos['conusu']);
			
			if (isset($resultado))
      {
				$datosSesion['ideusu']=$resultado->ideusu;
				$datosSesion['nomusu']=$resultado->nomusu;
				$datosSesion['apeusu']=$resultado->apeusu;
				$datosSesion['iderol']=$resultado->iderol;
				
				$misession->set($datosSesion);
        return redirect()->to(site_url('escritorio'));	
      } 
      else
      {
        $misession -> setFlashdata('mensaje_flash', 'Correo y/o contraseña no es válida, verifique sus credenciales.');
				$this->index();
      }
			
		}
	}
	
	public function salir()
	{
		$misession = session();
		$misession ->destroy();
		$this->index();
  }				
	
	
	
}


