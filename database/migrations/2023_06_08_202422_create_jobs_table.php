<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->string('experience');

            $table->string('currently')->nullable();
            $table->string('last_job_name')->nullable();
            $table->string('last_job_position')->nullable();
            $table->string('last_job_functions')->nullable();
            $table->string('last_job_date_init')->nullable();
            $table->string('last_job_date_end')->nullable();

            $table->string('penultimate_job_name')->nullable();
            $table->string('penultimate_job_position')->nullable();
            $table->string('penultimate_job_functions')->nullable();
            $table->string('penultimate_job_date_init')->nullable();
            $table->string('penultimate_job_date_end')->nullable();

            $table->string('antepenultimate_job_name')->nullable();
            $table->string('antepenultimate_job_position')->nullable();
            $table->string('antepenultimate_job_functions')->nullable();
            $table->string('antepenultimate_job_date_init')->nullable();
            $table->string('antepenultimate_job_date_end')->nullable();

            $table->unsignedBigInteger('cv_id');
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
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
