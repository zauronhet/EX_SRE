<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'email' => $data['email'],
            'nombre_de_usuario' => RegisterController::UserNameGenerator($data['name'],$data['apellido_paterno'],$data['apellido_materno']),
            'rol' => 1,
            'status' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }

    public static function UserNameGenerator($Nombre,$Apellido_Paterno,$Apellido_Materno)
    {
    	$name = $Nombre;
    	$last_name1 = $Apellido_Paterno;
    	$last_name2 = $Apellido_Materno;
    	$username = $name[0].$last_name1.$last_name2[0];

        $sql_1 = User::where('Nombre_de_Usuario','like',$username.'%')
                            ->get();

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
}
