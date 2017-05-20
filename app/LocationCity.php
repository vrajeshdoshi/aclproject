<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LocationCity extends Model
{	use SoftDeletes;
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    public function locationcountry()
    {
        return $this->belongsTo(LocationCountry::class);
    } 
    public function jobposts(){
		return $this->belongsTo(Jobpost::class);
    }

}
