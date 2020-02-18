<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','ConsultasController@Index');
Route::get('/Examenes','ConsultasController@Examenes');
Route::get('/Intento_de_Examenes','ConsultasController@Intento_de_Examenes');
Route::get('/Opciones_Preguntas_de_Examenes','ConsultasController@Opcion_Pregunta_de_Examen');
Route::get('/Preguntas_de_Examenes','ConsultasController@Pregunta_de_Examen');
Route::get('/Respuestas_por_Usuarios','ConsultasController@Respuesta_por_Usuario');
Route::get('/Usuarios','ConsultasController@Usuario');










Route::get('/1','Ex_Access_Controller@Access');
//-------------------------------------------------------------------------------------------------
Route::get('/Create','Ex_Create_User_Controller@New_User_Form');

Route::post('/Create','Ex_Create_UserController@New_User_Insert')->name('user.Insert');

Route::post('/UserName','INTSIAC_Create_UserController@UserNameGenerator')->name('user.UserName');
//------------------------------------------------------------------------------------------------
Route::get('/LogIn','INTSIAC_LogInController@LogIn');

Route::post('/LogIn','INTSIAC_LogInController@Authentication')->name('user.LogIn');



Route::get('/index','INTSIAC_Create_UserController@index');


