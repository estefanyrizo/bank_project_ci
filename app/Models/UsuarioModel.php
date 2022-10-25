<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model 
{
	protected $table = 'cliente'; //Tabla para trabar en la base de datos
	
	/**
	 * Obtiene el total de registros y campos de la entidad Cliente en la base de datos
	 * 
	 * @return
	 */
	public function leerUsuario () 
	{
		return $this->findAll(); //Equivale a SELECT * FROM cliente
	}
	
	/**
	 * Inserta un registro de usuario en la base de datos con los valores especificado en una matriz
	 * $datos
	 * @param $datos información del usuario que será insertado en la base de datos
	 * 
	 * @return id: Valor de identificación asignado al insertar en la base de datos.
	 */
	public function create ($datos)
	{
		$tb_usuario = $this->db->table ('cliente'); //Indicar que el insert se hace en cliente
		//Ejecutar la consulta para insertar
		$tb_usuario->insert($datos);
		
		//Retornar el Id que se ha asignado al registro
		return $this->db->insertID ();
	}//Fin de create
	
	
}//Fin de la clase