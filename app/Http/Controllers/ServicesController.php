<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // 1. Fetch all services from the database using the Model
        $services = Services::all();

        // 2. Pass the services data to the 'services' view
        return view('services', [
            'services' => $services
        ]);
    }

    /**
     * Display the specified service.
     *
     * @param  int  $id (This will be the services_id)
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Fetch the service by its custom primary key (services_id)
        $service = Services::find($id);

        // Check if the service exists
        if (!$service) {
            // Handle case where the service is not found (e.g., redirect or show 404)
            abort(404);
        }

        // Pass the single service data to the 'services.show' view
        return view('services.show', [
            'service' => $service
        ]);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación
        return view('services.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo servicio
        // Validación y almacenamiento en la base de datos
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
        return view('services.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un servicio existente
    }

    public function destroy($id)
    {
        // Lógica para eliminar un servicio
    }
}