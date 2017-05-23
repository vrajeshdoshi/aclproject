<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobpostLocationCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_locationcities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jobpost_id')->index();
           /* $table->foreign('jobpost_id')->references('id')->on('jobposts')->onDelete('cascade');*/
            $table->unsignedInteger('location_city_id')->index();
           /* $table->foreign('location_city_id')->references('id')->on('location_cities')->onDelete('cascade');*/
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
        Schema::dropIfExists('job_locationcities');
    }
}
