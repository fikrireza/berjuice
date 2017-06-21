<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'amd_role';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'title','slug'
    ];


    public function users()
    {
      return $this->hasMany('App\Models\User');
    }
}
