<?php
/**
 * Clase controladora para cargar la vista de la página inicial de la apps.
 * @name Principal_Site
 * @author Lawdee N. Narváez
 * @version 1.0.0
 * @since PHP 7.4
 */
namespace App\Controllers;

class Principal_site extends BaseController
{
	public function index () 
	{
		return view('home_page');
	}//Fin método index
}//Fin de la clase
