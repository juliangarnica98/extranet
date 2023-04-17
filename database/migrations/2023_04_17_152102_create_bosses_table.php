<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bosses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('centro_costo')->nullable();
            $table->string('name')->nullable();
            $table->string('documento')->nullable();
            $table->string('cargo')->nullable();
            $table->string('email')->nullable();

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bosses');
    }
}
