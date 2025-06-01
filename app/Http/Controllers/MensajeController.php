<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
 
    public function mensajePersonalizado($nombre)
    {
        return view('mensajePersonalizado', ['nombre' => $nombre]);
    }
}