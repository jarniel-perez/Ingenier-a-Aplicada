<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejemplo_pagina_controller extends Controller
{
    //
    public function inicio (){

      return view ("welcome");

    }

    public function somos (){

      return view ("somos");

    }

    public function donde (){

      return view ("donde");

    }

    public function foro (){

      return view ("foro");

    }

    public function contactar (){

      return view ("contacto");

    }
    public function galeria (){

      //$alumnos=["juana", "juana2", "juana3", "juana4"];
         $alumnos=[];
      return view ("galeria", compact("alumnos"));

}
}
