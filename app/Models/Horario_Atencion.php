<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario_Atencion extends Model
{
    use HasFactory;
    protected $table='horarios_atencion';
protected $primaryKey='id';
public $timestamps='false';
protected $fillable=[
'horario_atencion_cdg',
'inicio_horario_cdg',
'fin_horario_cdg',
];

}
