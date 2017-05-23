<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    protected $guarded = [];
    protected $table = 'user_activations';
    public function user(){
   	return $this->belongsTo('App\User');
   } 
}
