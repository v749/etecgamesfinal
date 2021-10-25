<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index() //Função no qual vai mostrar as nossas pgs principais por default
	{   		
		echo view('header');		
		echo view('footer');		 
	}
}
