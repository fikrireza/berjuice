<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAccess extends Model
{
    protected $table = 'amd_log_access';

    protected $fillable = ['actor','action'];

    public function actor()
    {
      return $this->belongsTo('App\Models\User', 'actor');
    }
}
