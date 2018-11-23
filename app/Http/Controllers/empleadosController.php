<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class empleadosController extends Controller
{
    function index(){
    	
		//$empleados = Empleado::all();
		return view('empleados.index', compact('Empleado'));
    }

	function create() {
        return view('empleados.create');
    }

    function store() {
        Empleado::create(request(['nombre', 'cedula']));
        return redirect('/empleados');
    }

    function update(Empleado $empleados) {
        $empleados->update(request(['nombre', 'cedula']));
        return redirect('/empleados');
    }

    function destroy(Empleado $empleados) {
        $empleados->delete();
        return redirect('/empleados');
    }

    function edit(Empleado $empleados) {
        return view('empleados.edit', compact('empleado'));
    }

    function show(Empleado $empleados) {
        return view('empleados.show', compact('empleado'));
    }
}
