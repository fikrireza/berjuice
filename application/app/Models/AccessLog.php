<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $table = 'amd_access_log';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'actor_id','action'
    ];

    public function actor()
    {
      return $this->belongsTo('App\Models\User', 'actor_id');
    }
}
