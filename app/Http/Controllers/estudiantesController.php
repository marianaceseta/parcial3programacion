<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class estudiantesController extends Controller
{
    function index(){
    	
		$estudiantes = Estudiante::all();
		return view('estudiantes.index', compact('estudiantes'));
    }

	function create() {
        return view('estudiantes.create');
    }

    function store() {
        Estudiante::create(request(['nombre', 'cedula']));
        return redirect('/estudiante');
    }

    function update(Estudiante $estudiante) {
        $estudiante->update(request(['nombre', 'cedula']));
        return redirect('/estudiante');
    }

    function destroy(Estudiante $estudiantes) {
        $estudiantes->delete();
        return redirect('/estudiantes');
    }

    function edit(Estudiante $estudiante) {
        return view('estudiantes.edit', compact('estudiante'));
    }

    function show(Estudiante $estudiante) {
        return view('estudiantes.show', compact('estudiante'));
    }

}
