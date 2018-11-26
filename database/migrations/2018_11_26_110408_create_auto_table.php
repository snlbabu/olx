<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('cat1')->nullable();
            $table->string('cat2')->nullable();
            $table->string('cat3')->nullable();
            $table->integer('price')->nullable();

            $table->string('model')->nullable();
            $table->year('year')->nullable();
            $table->enum('fuel', ['Petrol', 'Diesel', 'LPG', 'CNG & Hybrids'])->nullable();
            $table->integer('km_driven')->nullable();

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
        Schema::dropIfExists('auto');
    }
}
