<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index()
    {
        return "Hola Mundo";
    }

    public function show($nombre)
    {
        return "Detalles $nombre";
    }
}
