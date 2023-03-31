<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('author');
            $table->string('title');
            $table->string('city');
            $table->string('description');
            $table->string('state');
            $table->string('salary');
            $table->text('experience');
            $table->text('num_vacants');
            $table->string('num_aplic');

            $table->string('education');
            $table->string('language');
            $table->string('availability_travel');
            $table->string('type_contract');
                   
            $table->unsignedBigInteger('type_cv_id');
            $table->foreign('type_cv_id')->references('id')->on('type_cvs')->onDelete('cascade');

            $table->string('area');
            $table->string('filtro');
            
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacants');
    }
}
