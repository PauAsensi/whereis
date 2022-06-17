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
        'valoracion'
    ];

   
    public function calle(){
        return Calles::get()->where('id',$this->direccion)->first();
    }
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

    public function valoracion(){
        $numValoraciones=Comentarios::get()->where('sitio',$this->id);
        if(count($numValoraciones)>0){
            $media=$this->valoracion/count($numValoraciones);
        }else{
            $media=0;
        }
        
        $estrellas="";
        for($i=0;$i<5;$i++){
            if($i<round($media)){
                $estrellas.='<label style="color:orange;font-size:30px"><input type="radio">★</label>';
            }else{
                $estrellas.='<label style="color:grey;font-size:30px"><input type="radio">★</label>';
            }
        }
        $estrellas.='('.count($numValoraciones).' valoraciones)';
        echo $estrellas;
    }

}
