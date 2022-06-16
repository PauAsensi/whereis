<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    use HasFactory;
    protected $fillable = [
        'ciudad',
        'nombre',
        'latitud',
        'longitud'
    ];

    public function sitios(){
        return $this->hasMany(Sitios::class);
    }
}
