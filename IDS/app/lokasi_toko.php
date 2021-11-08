<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi_toko extends Model
{
    protected $table = "lokasi_toko";
    protected $primaryKey =  "barcode";
    protected $fillable = ['nama_toko','latitude','longitude','accuracy'];
    public $incrementing = false;

}
