<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'amd_social_media';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'facebook_url','instagram_url','twitter_url'
    ];

}
