<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    
    protected $fillable = [
        'id_libro', 'id_estudiante', 'id_empleado', 'fprestamo', 'fentrega'
    ];

}