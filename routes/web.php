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

//Route::get('/', function () {
  // return view('welcome');
//});

//agregar parámetros a las routes

/*Route::get('/post/{id}/{nombre}', function ($id, $nombre) {

    return "Este es el post N° " . $id . " creado por " . $nombre;
})
->where ('nombre','[a-zA-Z]+');  //filtración de caracteres*/



//Route::get('/inicio/{id}', 'jemplo_controller3@index'); //llamado a controlador

Route::get('/', 'ejemplo_pagina_controller@inicio');
Route::get('/inicio', 'ejemplo_pagina_controller@inicio');
Route::get('/somos', 'ejemplo_pagina_controller@somos');
Route::get('/donde', 'ejemplo_pagina_controller@donde');
Route::get('/foro', 'ejemplo_pagina_controller@foro');
Route::get('/contacto', 'ejemplo_pagina_controller@contactar');
Route::get('/galeria', 'ejemplo_pagina_controller@galeria');
//Route::resource("posts", "jemplo_controller3");
/*Route::get("/insertar", function(){
  DB::insert("INSERT INTO articulos (ARTICULO, PRECIO, PAIS, OPCIONES, SECCION) VALUES(?,?,?,?,?)", ["PORTATIL", 5000, "ALEMANIA", "REVENTA", "GAMIN"]);
});

Route::get("/leer", function(){
  $resultados=DB::select("SELECT * FROM articulos WHERE ID=?", [1]);
  foreach ($resultados as $articulo) {
    return $articulo->articulo;
  }
});

Route::get("/actualizar", function(){
  DB::update("UPDATE articulos SET PAIS='CANADA' WHERE ID=?", [1]);
});


Route::get("/eliminar", function(){
  DB::delete("DELETE FROM articulos WHERE ID=?", [1]);
});*/

Route::get("/leer", function(){

  /*$articulos=App\Articulo::all();
  foreach ($articulos as $articulo) {
    echo $articulo->articulo . " Valor: " . $articulo->precio . " origen: " . $articulo->pais . "<br>";
  }*/
    $articulos=App\Articulo::where("seccion","TECNOLOGIA")->get();
        return $articulos;


});

Route::get("/insertar", function(){

  $articulos= new App\Articulo;
  $articulos->articulo="tablet";
  $articulos->precio=80.09;
  $articulos->pais="Hungría";
  $articulos->opciones="preventa";
  $articulos->seccion="comunicaciones";

  $articulos->save();

});

Route::get("/actualizar", function(){

  /*$articulos= App\Articulo::find(7);
  $articulos->articulo="Portatil";
  $articulos->precio=3850;
  $articulos->pais="Alemania";
  $articulos->opciones="REVENTA";
  $articulos->seccion="GAMING";

  $articulos->save();*/

App\Articulo::where("seccion","Tecnologias")->where("pais","URSS")->update(["precio"=>58.12]);

});


Route::get("/eliminar", function(){

  $articulo=App\Articulo::find(5);
  $articulo->delete();

});


Route::get("/insertar_varios", function(){

  App\Articulo::create(["articulo"=>"Impresora", "precio"=>234.98, "pais"=>"URSS", "opciones"=>"Venta", "seccion"=>"Informática"]);
  


});
