<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($nombre,$edad){
        echo "Ruta 1, hola ".$nombre. " tu edad es : ".$edad;
    }
    public function indexruta2(){
        echo "Ruta 2";
    }

}
