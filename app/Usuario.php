<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $fillable = [

        'rut_usuario',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'asignatura',
        'password',
        'aprobacion',
    ];

}
