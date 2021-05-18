<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("variables" , function(){
    $mensaje  =20;
    //funcion nativa de php : analizar el contenido de una variable
    // variable : tipo de dato, datos
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);

});

Route::get('arreglos', function () {
    //definir un arreglo en php
    //Tamaño: numero de elementos del arreglos
    // el tamaño del arreglo estudiante son 3
    $estudiantes =["AN" => "Ana" ,
                   "VA" => "Valeria" ,
                   "JO" => "Jorge" ];
    echo "<pre>";
    print_r( $estudiantes);
    echo  "</pre>";

});

Route::get('paises' , function(){

    $paises = [
        "colombia" => [
                "capital" => "Bogota",
                "moneda" => "Peso",
                "poblacion" => 51
        ],
        "peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 33.19

        ],
        "paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guarani",
            "poblacion" => 7

        ],
        "Brazil" => [
            "capital" => "Brasilia",
            "moneda" => "Real brasileño",
            "poblacion" => 211

        ]

    ];
    //mostrar la vista de paises
    //llevando el arreglo de paises
    return view('paises')->with("naciones" , $paises);


});





