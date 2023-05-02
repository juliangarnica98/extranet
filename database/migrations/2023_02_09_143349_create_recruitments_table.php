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
            // $table->string('regional');
            $table->text('comentarios');
            $table->string('pruebas')->nullable();
            
            $table->string('fecha')->nullable();
            $table->string('ethikos')->nullable();
            $table->string('ten_disc')->nullable();
            $table->string('potencial_comercial')->nullable();
            $table->string('iq_factorial')->nullable();
            $table->string('vp_test')->nullable();

            $table->text('entrevista_analista')->nullable();
            $table->text('poligrafo')->nullable();
            $table->text('visita_domiciliaria')->nullable();

            $table->unsignedBigInteger('cvvacant_id');
            $table->foreign('cvvacant_id')->references('id')->on('cvvacants')->onDelete('cascade');

            $table->foreignId('boss_id')->nullable()->constrained('bosses')->onDelete('cascade');
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
