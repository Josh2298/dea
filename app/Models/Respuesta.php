<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respuesta extends Model
{
    use HasFactory;
    protected $table='respuestas';
    protected $fillable=['iddato','CO_1_P1',
    'CO_1_P2',
    'CO_1_P3',
    'CO_1_P4',
    'CO_1_P5',
    'CO_2_P1',
    'CO_2_P2',
    'CO_2_P3',
    'CO_2_P4',
    'CO_2_P5',
    'CO_3_P1',
    'CO_3_P2',
    'CO_3_P3',
    'CUA_1_P1',
    'CUA_1_P2',
    'CUA_1_P3',
    'CUA_2_P1',
    'CUA_2_P2',
    'CUA_2_P3',
    'CUA_2_P4',
    'CUA_3_P1',
    'CUA_3_P2',
    'CUA_3_P3',
    'CUA_3_P4',
    'CUA_3_P5',
    'CUA_4_P1',
    'CUA_4_P2',
    'CUA_4_P3',
    'CUM_1_P1',
    'CUM_2_P1','CUM_2_P2'];
}
