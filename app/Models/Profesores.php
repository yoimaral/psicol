<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'documento',
        'nombre',
        'telefono',
        'email',
        'direccion',
        'ciudad'
    ];
}
