<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'amd_inbox';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'nama','email','pesan','has_read'
    ];
}
