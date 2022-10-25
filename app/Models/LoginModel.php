<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model 
{
	protected $table = 'usuario'; //Tabla para trabar en la base de datos
	
		
	/**
	 * Inserta un registro de usuario en la base de datos con los valores especificado en una matriz
	 * $datos
	 * @param $datos información del login de usuario a insertar
	 * 
	 * @return id: Valor de identificación asignado al insertar en la base de datos.
	 */
	public function create ($logUser)
	{
		$tb_usuario = $this->db->table ('usuario'); //Indicar que el insert se hace en cliente
		//Ejecutar la consulta para insertar
		$tb_usuario->insert($logUser);
		
		//Retornar el Id que se ha asignado al registro
		return $this->db->insertID ();
	}//Fin de create
}