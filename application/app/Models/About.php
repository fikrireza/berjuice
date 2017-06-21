<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'amd_about';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'about_description','director_img','director_description','certification_img','milestones_1','milestones_2','milestones_3','milestones_4','milestones_5','milestones_6'
    ];

}
