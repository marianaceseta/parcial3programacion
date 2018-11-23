<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class librosController extends Controller
{
    function index(){
    	
		$libros = Libro::all();
		return view('libros.index', compact('libros'));
    }

	function create() {
        return view('libros.create');
    }

    function store() {
        Libro::create(request(['nombre', 'editorial', 'anio', 'ubicacion', 'autor', 'tipo', 'area', 'prestamo']));
        return redirect('/libros');
    }

    function update(Libro $libro) {
        $libro->update(request(['nombre', 'editorial', 'anio', 'ubicacion', 'autor', 'tipo', 'area', 'prestamo']));
        return redirect('/libros');
    }

    function destroy(Libro $libro) {
        $libro->delete();
        return redirect('/libros');
    }

    function edit(Libro $libro) {
        return view('libros.edit', compact('libros'));
    }

    function show(Libro $libro) {
        return view('libros.show', compact('libros'));
    }

}
