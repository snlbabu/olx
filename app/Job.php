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
        'title', 'cat1', 'cat2', 'cat3', 'price', 'type_of_job', 'salary_period', 'salary_range_from', 'salary_range_to', 'position_type', 'ad_description', 'img1', 'img2', 'img3', 'img4', 'name', 'phone', 'city', 
    ];

}
