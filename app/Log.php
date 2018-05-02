<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $primaryKey = 'id';
    protected $fillable = ['table','desc','staff_id','created_at','updated_at','timestamps'];

    
}
