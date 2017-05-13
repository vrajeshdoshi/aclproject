<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    public function roles(){
   	return $this->belongsToMany('App\Role','permission_role','role_id', 'permission_id');
   } 
}
