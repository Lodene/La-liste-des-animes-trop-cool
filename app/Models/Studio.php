<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    
    protected $table = "studio_stu";
    protected $primaryKey = "stu_id";
    public $timestamps = false;
    use HasFactory;
}
