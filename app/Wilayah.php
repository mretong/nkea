<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayah';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','kod','daerah_id'];

    public $timestamps = true;

    public function daerah()
    {
        return $this->belongsTo('App\Daerah','daerah_id','id');
    }
}
