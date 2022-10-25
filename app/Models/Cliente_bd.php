<?php
/**
* Modelo para conectar con la entidad cliente en la base de datos sistbank
* @version 1.0.0
* @since CI 4.0 
* 
*/
namespace App\Models;
use CodeIgniter\Model; //Importar el espacio de nombre donde esta la clase base Model

class Cliente_bd extends Model
{
	//Definir un campo protegido con el nombre de la tabla donde se dispara la consulta
	protected $entidad = 'usuarios';
	
	//Método para extraer todos los datos de la tabla
	public function leerClientes ()
	{
		return $this->findAll(); //Con esta instrucción se retornan todos los registros de la tabla
	}//Fin de método
	
	
}//Fin de la clase