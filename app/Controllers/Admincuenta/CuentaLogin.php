<?php
namespace App\Controllers\Admincuenta;
use App\Controllers\BaseController;
use App\Models\LoginModel;

	class CuentaLogin extends BaseController
	{			
		public function index ()
		{
			$valced = session('cedula');
			$valid = session('id');
			$info = ['cedula'=> $valced,
						'id'=> $valid
					];
			
			return view('userview\nuevo_login',$info);
		}//Fin index
		
		public function nuevoLogin ()
		{
			$model = new LoginModel();
			//Recupear los datos que provienen del formulario
			$request = \Config\Services::request();
			
			//Validar que las claves proporcionadas sean validas para poder almacenarlas
			if ($request->getPost() != $request->getPost())
				
				return view('\errors\html\error_404');
				
			//Almacenar los datos en una matriz para su posterior interación con el modelo
			$login = [
						'FK_id_cliente' => $request->getPost('idClte'),
						'login' 		=> $request->getPost('txtnick'),
						'clave' 		=> $request->getPost('txtClave')
					 ];

			$db_model->create($login);
			
		}//Fin de método nuevoLogin
	}//Fin de la clase 