<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('cat1')->nullable();
            $table->string('cat2')->nullable();
            $table->string('cat3')->nullable();
            $table->integer('price')->nullable();

            $table->enum('type_of_job', ['Offering job', 'Seeking job'])->nullable();
            $table->enum('salary_period', ['Hourly', 'Weekly', 'Monthly', 'Yearly'])->nullable();
            $table->integer('salary_range_from')->nullable();
            $table->integer('salary_range_to')->nullable();
            $table->enum('position_type', ['Full-time', 'Part-time', 'Contract', 'Temporary'])->nullable();

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
        Schema::dropIfExists('jobs');
    }
}
