<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmigosSecretos extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_empleado_fk',
        'id_amigo_secreto'
    ];
}
