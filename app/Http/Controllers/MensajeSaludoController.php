<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Importa la clase Request para posibles futuras necesidades
use Carbon\Carbon;          // Importa Carbon para el manejo de fechas y horas

class MensajeSaludoController extends Controller
{

    public function saludoRepetido($veces)
    {
        // 1. Validación y Sanitización del Argumento:
        //    Convertimos el argumento $veces a un entero para asegurar que es numérico.
        //    Esto es importante ya que los argumentos de la ruta son strings por defecto.
        $veces = (int) $veces;

        //    Se implementa una pequeña validación para asegurar que el número de repeticiones
        //    sea positivo y no excesivamente grande, para evitar posibles problemas de rendimiento
        //    o abusos (ej. alguien pide 1,000,000 de repeticiones).
        //    Si no es válido, se asigna un valor por defecto (ej. 5).
        if ($veces <= 0 || $veces > 100) { // Establecemos un límite razonable de 100 repeticiones
            $veces = 5; // Valor por defecto si el argumento es inválido o excede el límite.
        }

        // 2. Definición del Contenido a Repetir:
        //    Se define el string de saludo que queremos que se repita.
        $saludo = "¡Hola, que tengas un lindo dia!";

        // 3. Preparación y Renderizado de la Vista:
        //    Se pasa tanto el string del $saludo como el número validado de $veces
        //    a la vista 'saludoRepetido'.
        //    La lógica de repetición (el bucle) se manejará directamente en la vista Blade.
        return view('saludoRepetido', [
            'saludo' => $saludo,
            'veces'  => $veces
        ]);

        // La vista 'saludoRepetido.blade.php' utilizará un bucle (ej. @for) para
        // mostrar {{ $saludo }} la cantidad de {{ $veces }} especificada.
    }
}