<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $table = "anime_ani";
    protected $primaryKey = "ani_id";
    public $timestamps = false;

    public function genres(){
        return $this->belongsToMany(
            Genre::class, 
            "animegenre_ang",
            "ani_id",
            "gen_id"
        );
    } 

    public function studios(){
        return $this->belongsToMany(
            Studio::class, 
            "animestudio_ans",
            "ani_id",
            "stu_id"
        );
    } 

}
