<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairsController extends Controller
{
    public function showIndex()
    {
        // Lógica para mostrar todos los repairss
        return view('repairs');
    }

    public function show($id)
    {
        // Lógica para mostrar un repairs específico
        return view('repairs.show', ['id' => $id]);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación
        return view('repairs.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo repairs
        // Validación y almacenamiento en la base de datos
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
        return view('repairs.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un repairs existente
    }

    public function destroy($id)
    {
        // Lógica para eliminar un repairs
    }
}
