<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvvacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvvacants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('revision')->default(0);
            $table->string('pruebas')->nullable();

            $table->unsignedBigInteger('cv_id');
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
            
            $table->unsignedBigInteger('vacant_id');
            $table->foreign('vacant_id')->references('id')->on('vacants')->onDelete('cascade');

            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');

            // $table->unsignedBigInteger('boss_id');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvvacants');
    }
}
