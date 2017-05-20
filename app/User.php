<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPZen\LaravelRbac\Traits\Rbac;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{   
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    use Notifiable;
    use Rbac;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
     
    public function companies(){
        return $this->hasMany(Company::class);
    }

    public function jobposts(){
        return $this->hasMany(Jobpost::class);
    }
    public function jobtypes(){
        return $this->hasMany(Jobtype::class);
    }

    protected $guarded = [];
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
