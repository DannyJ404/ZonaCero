<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiempoConsola extends Controller
{
    // Ruta en tu controlador para obtener los tiempos de inicio y fin para cada consola
    public function getTimesForConsoles($idConsola)
    {
        // Obtener el último registro (mayor ID_RENTA) donde ID_FK_CONSOLA coincide
        $ultimaConsola = DB::table('tbl_renta AS t')
            ->join('tbl_juego AS j', 't.ID_FK_JUEGO', '=', 'j.ID_JUEGO') // Relacionar correctamente
            ->where('j.ID_FK_CONSOLA', $idConsola) // Filtrar por ID_FK_CONSOLA proporcionado
            ->orderBy('t.ID_RENTA', 'desc') // Ordenar por ID_RENTA descendente
            ->select('t.INICIO', 't.FINAL') // Seleccionar solo los campos INICIO y FINAL
            ->first(); // Tomar solo el primer (último) registro

        // Validar si se encuentra un registro
        if ($ultimaConsola) {
            // Retornar el registro como JSON
            return response()->json($ultimaConsola);
        } else {
            // Si no se encuentra ningún registro, devolver un mensaje de error
            return response()->json(['error' => 'No se encontraron datos'], 404);
        }
    }
}
