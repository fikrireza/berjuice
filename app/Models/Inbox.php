<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'amd_inbox';

    protected $fillable = ['email','name','messages'];
}
