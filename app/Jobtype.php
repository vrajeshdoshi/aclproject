<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Jobtype extends Model
{	use SoftDeletes;
    protected $guarded = [];   
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function jobposts(){
        return $this->belongsToMany(Jobpost::class);
    }
}
