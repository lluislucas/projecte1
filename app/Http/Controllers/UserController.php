<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function validarDni($dni){

 if (strlen($dni) != 9) {
        dump('longitud dni incorrecte');
    } else {

        dump('longitud ' . $dni . ' : ' . strlen($dni));
    }

}

public function cargarPerfil($dni){

 if (strlen($dni) != 9) {
        dump('longitud dni incorrecte');
    } else {

        dump('longitud ' . $dni . ' : ' . strlen($dni));
    }

}
}






