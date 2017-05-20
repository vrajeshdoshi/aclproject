<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobpostJobtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpost_jobtypes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jobpost_id')->index();
            $table->foreign('jobpost_id')->references('id')->on('jobposts')->onDelete('cascade');
            $table->unsignedInteger('jobtype_id')->index();
            $table->foreign('jobtype_id')->references('id')->on('jobtypes')->onDelete('cascade');
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
        Schema::dropIfExists('jobpost_jobtypes');
    }
}
