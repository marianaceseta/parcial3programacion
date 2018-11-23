<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;

class prestamosController extends Controller
{
    function index(){
    	
		//$prestamos = Prestamo::all();
		return view('prestamos.index', compact('Prestamo'));
    }

	function create() {
        return view('prestamos.create');
    }
    
    function store() {
        Prestamo::create(request(['id_libro', 'id_estudiante', 'id_empleado', 'fprestamo', 'fentrega']));
        return redirect('/prestamos');
    }

    function update(Prestamo $prestamos) {
        $prestamos->update(request(['id_libro', 'id_estudiante', 'id_empleado', 'fprestamo', 'fentrega']));
        return redirect('/prestamos');
    }

    function destroy(Prestamo $prestamos) {
        $prestamos->delete();
        return redirect('/prestamos');
    }

    function edit(Prestamo $prestamos) {
        return view('prestamos.edit', compact('Prestamo'));
    }

    function show(Prestamo $prestamos) {
        return view('prestamos.show', compact('Prestamo'));
    }
}
