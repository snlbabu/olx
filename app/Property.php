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
        'title', 'cat1', 'cat2', 'cat3', 'price', 'bedrooms', 'bathrooms', 'subtype', 'furnishing', 'construction_status', 'listed_by', 'super_builtup_area', 'carpet_area', 'bachelors_allowed', 'maintenance_monthly', 'total_floors', 'floor_no', 'car_parking', 'plot_area', 'length', 'breadth', 'facing', 'washrooms', 'project_name', 'meals_included', 'ad_description', 'img1', 'img2', 'img3', 'img4', 'name', 'phone', 'city', 
    ];

}
