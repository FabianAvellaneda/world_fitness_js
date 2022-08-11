<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['identificacion_Cliente',
    'nombre_Clie',
    'apellido_Clie',
    'fecha_Nac_Clie',
    'telefono_Clie',
    'direccion_Clie',
    'estado_Clie'];
}
