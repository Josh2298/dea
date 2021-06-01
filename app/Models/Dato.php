<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dato extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='datos';
    protected $fillable=[
        'iddo',
        'facultad',
        'carrera',
        'sigla',
        'asignatura',
        'codigo'
    ];
}
