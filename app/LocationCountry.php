<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LocationCountry extends Model
{	use SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];
    public function locationcities(){
        return $this->hasMany(LocationCity::class);
    }
}
