<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Jobpost extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    } 
    public function jobtypes(){
        return $this->belongsToMany(Jobtype::class);
    }

    public function locationcity(){
		return $this->belongsToMany(LocationCity::class);
    }

}
