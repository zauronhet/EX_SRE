<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;

class Ex_Create_User_Controller extends Controller
{
    public function New_User_Form()//formulario
	{
		return view('New_User_Form');
	}

	public function New_User_Insert(Request $request)//consulta de nombre
    {	
    	$Correo = $request->input('email');

    	$CorreoVal = DB::select("select usuarios.Correo_Electronico from usuarios where  							usuarios.Correo_Electronico = '$Correo' ");

    	if($CorreoVal != null)
    	{

			echo'<script type="text/javascript">
    			alert("Correo ya asignado a un usuario.");

    			</script>';

    		return view('New_User_Form');
		}
		else
		{
			$username = INTSIAC_Create_UserController::UserNameGenerator(
						$request->input('Nombre'),
						$request->input('Apellido_Paterno'),
						$request->input('Apellido_Materno')
						);

			$username =strtolower(str_replace(" ", "", $username));

	        $dt = new DateTime();
	    	$date = $dt->format('Y-m-d H:i:s');
			DB::table('usuarios')->insert([
				'Id' => null, 
				'Nombre' => strtoupper($request->input('Nombre')),
				'Apellido_Paterno' => strtoupper($request->input('Apellido_Paterno')),
				'Apellido_Materno' => strtoupper($request->input('Apellido_Materno')),
				'Direccion_Institucional' => $request->input('Direccion_Institucional'),
				'Correo_Electronico' => $request->input('Correo_Electronico'),
				'Status' => '1',
				'Created_at' => $date,
				'Updated_at' => $date,
				'Nombre_de_Usuario' => $username ,
				'Contrasenia' => $request->input('Contrasenia'),
				'Rol' => '1'
			]);

			return view('Access');
	    } //
    }

    public static function UserNameGenerator($Nombre,$Apellido_Paterno,$Apellido_Materno)
    {
    	$name = $Nombre;
    	$last_name1 = $Apellido_Paterno;
    	$last_name2 = $Apellido_Materno;
    	$username = $name[0].$last_name1.$last_name2[0];

		$sql_1 = DB::select("select usuarios.Nombre_de_Usuario from usuarios where  usuarios.Nombre_de_Usuario like '$username%' ");

		if($sql_1!= null)
		{
			$i = count($sql_1);
		    $username = $username. $i;
		    return $username;
		}
		else 
		{
			return $username;
		}
    }

    public function index()//
    {
		$users = DB::select('select * from usuarios');
		return view('Query',['users'=>$users]);
	}
    //
}
