<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of Escritorio
 *
 * @author Jean Pierre
 */
class Escritorio extends BaseController{
	
	public function index()
	{
		echo view('escritorio'); 
	}
	
}