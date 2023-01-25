<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdcs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->string('boss_id')->nullable();
            

            $table->unsignedBigInteger('regional_id');
            $table->foreign('regional_id')->references('id')->on('regionals')->onDelete('cascade');;

            // $table->unsignedBigInteger('boss_id')->nullable();
            // $table->foreign('boss_id')->references('id')->on('boss_id');

            // $table->unsignedBigInteger('boss_id')->unsigned();
            // $table->foreign('boss_id')->references('id')->on('boss_id')->onDelete('cascade');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cdcs');
    }
}
