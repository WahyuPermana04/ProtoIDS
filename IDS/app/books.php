<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = "books";
    // protected $primaryKey =  "id_customer";
    protected $fillable = ['id','name','author'];
    public $incrementing = false;

}
