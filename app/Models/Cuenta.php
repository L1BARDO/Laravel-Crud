<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    protected $fillable = ['usuario', 'correo', 'telefono', 'cedula', 'saldo'];

    protected $table = 'cuentas'; // Si deseas especificar un nombre de tabla diferente.

    public $timestamps = true; // Si no necesitas las columnas created_at y updated_at.

    public static $rules = [
        'correo' => 'unique:cuentas',
        'telefono' => 'unique:cuentas',
        'cedula' => 'unique:cuentas',
    ];
}
