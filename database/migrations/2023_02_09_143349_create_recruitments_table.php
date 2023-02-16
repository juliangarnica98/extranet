<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('regional');
            $table->text('comentarios');
            $table->string('pruebas');
            
            $table->string('fecha');
            $table->string('ethikos')->nullable();
            $table->string('ten_disc')->nullable();

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
        Schema::dropIfExists('recruitments');
    }
}
