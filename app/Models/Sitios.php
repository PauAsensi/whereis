<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitios extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tipo',
        'direccion',
        'descripcion',
        'imagen',
        'titulo',
        'h_apertura',
        'h_cierre',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comentarios(){
        return $this->hasMany(Comentarios::class);
    }
    public function hora_apertura(){
        return date('H:i a',strtotime($this->h_apertura));
    }
    public function hora_cierre(){
        return date('H:i a',strtotime($this->h_cierre));
    }
    
}
