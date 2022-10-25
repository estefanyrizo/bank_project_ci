<?php
/**
 * Controlador para llamar a la vista de acceso online de la apliación
 * @name Acceso
 * @author Lawdee Narváez B.
 * @version 1.0.0.
 * @since PHP 7.4
 */
 namespace App\Controllers;
 use App\Models\Cliente_bd; //Indicar la carga del modelo
 
 class Acceso extends BaseController 
 {
 	
 	public function enlinea ()
 	{
 		//preparar el envío de los datos encontrados en el modelo
 		$jugModel = new Cliente_bd (); //Crear una instancia de la clase modelo
 		$registro = ['jugadores' => $jugModel->leerClientes ()]; //Obtener los resultados de la consulta de la BD
		 return view('banca_online', $registro);		 
 	}//Fin método principal index
 }//Fin de la clase