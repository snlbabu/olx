<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Model;

class Classified extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category', 'options', 'ad_description', 'img1', 'img2', 'img3', 'img4', 'name', 'phone', 'city', 
    ];

}
