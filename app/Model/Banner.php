<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table        =   'banner';
    protected $fillable     =   ['id','title','image','rank','status'];
}
