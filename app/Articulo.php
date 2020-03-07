<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable=[

            "articulo",
            "precio",
            "pais",
            "opciones",
            "seccion",
    ];
}
