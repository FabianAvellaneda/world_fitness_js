<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    use HasFactory;

    protected $fillable = ['identificacion_Gerente',
                            'nombre_Geren',
                            'apellido_Geren',
                            'fecha_Nac_Geren',
                            'telefono_Geren',
                            'direccion_Geren',
                            'estado_Geren',
                            'identificacion_Usuario_FK'];
}
