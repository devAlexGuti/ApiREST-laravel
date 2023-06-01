<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombres', 'apellidos', 'domicilio', 'dni'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
