<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre_gen";
    protected $primaryKey = "gen_id";
    public $timestamps = false;
    use HasFactory;
    

    public function animes(){
        return $this->belongsToMany(
            Anime::class, 
            "animegenre_ang",
            "gen_id",
            "ani_id"
        );
    } 
}
