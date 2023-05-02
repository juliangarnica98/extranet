<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscardedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discardeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comentarios');

            $table->unsignedBigInteger('cvvacant_id');
            $table->foreign('cvvacant_id')->references('id')->on('cvvacants')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discardeds');
    }
}
