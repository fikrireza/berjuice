<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table = 'amd_home_slider';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'img_slider','img_alt','position','publish_date','flag_publish','actor_id'
    ];

}
