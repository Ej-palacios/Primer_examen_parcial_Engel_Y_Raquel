<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Importa Carbon para manejar el tiempo

class MensajeControllerForHour extends Controller
{
    /**
     * Muestra un mensaje diferente basado en la hora del día.
     */
    public function mensajeHora()
    {
        $hora = Carbon::now()->hour;
        $mensaje = '';

        if ($hora >= 6 && $hora < 12) {
            $mensaje = 'Buenos días';
        } elseif ($hora >= 12 && $hora < 19) {
            $mensaje = 'Buenas tardes';
        } else {
            $mensaje = 'Buenas noches';
        }

        return view('mensajeHora', ['mensaje' => $mensaje]);
    }
}
