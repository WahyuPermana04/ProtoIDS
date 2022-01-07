<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class scoreboard extends Model
{
    protected $table = "scoreboard";
    // protected $primaryKey =  "id_customer";
    protected $fillable = ['id','score_home', 'score_away','musik','menit','detik','name_home','name_away'];
    public $incrementing = false;
    
}
