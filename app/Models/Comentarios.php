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
        'user_id',
        'name',
        'valoracion',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function sitio(){
        return $this->belongsTo(Sitio::class);
    }
    public function created_at(){
        return date('Y-m-d H:ia',strtotime($this->created_at));
    }
    public function updated_at(){
        return date('Y-m-d H:ia',strtotime($this->updated_at));
    }
    public function valoracion(){
        $estrellas="";
        for($i=0;$i<5;$i++){
            if($i<$this->valoracion){
                $estrellas.='<input id="radio'.($i+1).'" type="radio" name="estrellas">
                                    <label style="color:orange;" for="radio'.($i+1).'" >★</label>';
            }else{
                $estrellas.='<input id="radio'.($i+1).'" type="radio" name="estrellas">
                <label style="color:grey;" for="radio'.($i+1).'" >★</label>';
            }
        }
        echo $estrellas;
    }

}
