<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'texto',
        'sitio',
        'user'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sitio(){
        return $this->belongsTo(Sitio::class);
    }

}
