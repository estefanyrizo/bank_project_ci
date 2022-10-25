<?php
namespace App\Controllers\Admincuenta;
use App\Controllers\BaseController; //Importar la clase Base del controlador
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
	/**
	* Muestra una vista para el registro de una nueva cuenta de usuario
	* 
	* @return una vista con un formulario de entrada de datos de usuario
	*/
	public function nuevo () 
	{
		return view('cuenta_usuario');
	}//Fin del método
	
	public function agregar ()
	{
		//Crear una instancia de UsuarioModel para trabajar la BD
		$db_model = new UsuarioModel();
		//Recuperar los datos que se tienen en el formulario
		$request = \Config\Services::request(); //Recuperar los valores del $_POST
		
		//Capturar con request y almacenar un arreglo
		$registro = [
						'num_cedula' => $request->getPost ('txtCedula'),
						'nombre' => $request->getPost ('txtNombres'),
						'primer_apellido' => $request->getPost ('txtApellido1'),
						'segundo_apellido' => $request->getPost ('txtApellido2'),
						'correo' => $request->getPost ('txtCorreo'),
						'telefono' => $request->getPost ('txtTelefono'),
						'direccion' => $request->getPost ('txtDireccion'),
					];
	//Mandar a carga una vista para continuar la asignación de login de usuario
		if ($id = $db_model->create($registro) > 0)
		{
			return redirect()->to (base_url().'/login/nuevo')->with ('cedula', $request->getPost('txtCedula'), 'id', $request->getPost('txtCedula'));
		}
		else{
			return redirect()->to (base_url().'/usuario/nuevo');
			}
		
	}//Fin método agregar
	
}//Fin de la clase