<?php

use Illuminate\Htto\Request;
use Illuminate\Support\Facades\Route;

/**
*  Route::get       CONSULTAR
*  Route::post      GUARDAR
*  Route::delete    ELIMINAR 
*  Route::put       ACTUALIZAR 
*/

Route::get('/', function () {
    //return view('welcome');
    return "hola";
});

Route::get('blog', function (){
    $posts = [
        ['id'=>1, 'titel'=>'PHP', 'slug'=>'php'],
        ['id'=>2, 'titel'=>'Laravel', 'slug'=>'Laravel']
    ];
    return view('blog',['posts'=>$posts]);
});