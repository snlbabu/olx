<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('cat1')->nullable();
            $table->string('cat2')->nullable();
            $table->string('cat3')->nullable();
            $table->integer('price')->nullable();

            $table->enum('bedrooms', ['1', '2', '3', '4', '4+'])->nullable();
            $table->enum('bathrooms', ['1', '2', '3', '4', '4+'])->nullable();

            $table->enum('subtype', ['PG', 'Roommate'])->nullable();

            $table->enum('furnishing', ['Furnished', 'Unfurnished', 'Semi-furnished'])->nullable();
            $table->enum('construction_status', ['under_construction', 'ready_to_move', 'new_launch'])->nullable();
            $table->enum('listed_by', ['owner', 'dealer', 'builder'])->nullable();

            $table->integer('super_builtup_area')->nullable();
            $table->integer('carpet_area')->nullable();

            $table->enum('bachelors_allowed', ['Yes', 'No'])->nullable();

            $table->integer('maintenance_monthly')->nullable();
            $table->tinyInteger('total_floors')->nullable();
            $table->tinyInteger('floor_no')->nullable();

            $table->enum('car_parking', ['1', '2', '3', '3+'])->nullable();
            $table->integer('plot_area')->nullable();
            $table->integer('length')->nullable();
            $table->integer('breadth')->nullable();
            $table->enum('facing', ['East', 'West', 'North', 'South', 
                'North-East', 'North-West', 'South-East', 'South-West'])->nullable();
            $table->string('washrooms')->nullable();
            $table->string('project_name')->nullable();
            $table->enum('meals_included', ['Yes', 'No'])->nullable();

            $table->text('ad_description')->nullable();
            $table->binary('img1')->nullable();
            $table->binary('img2')->nullable();
            $table->binary('img3')->nullable();
            $table->binary('img4')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
