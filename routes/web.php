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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/examenes', 'ExamsController@examenes')->name('examenes');
Route::get('examenes/{eid}/{uid}', 'ExamsController@int_ex');
Route::get('examenes/{eid}/{uid}/{intento}', 'ExamsController@presentarintento');
Route::post('examenes/{eid}/{uid}/{intento}/fin', 'ExamsController@insert_tryexam');
Route::post('/insertar_intento','ExamsController@insert_tryexam')->name('insertar_intento');