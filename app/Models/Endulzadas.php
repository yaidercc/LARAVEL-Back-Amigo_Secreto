<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endulzadas extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_endulzadas',
        'lugar_endulzada',
        'id_grupo_fk',
    ];
}
