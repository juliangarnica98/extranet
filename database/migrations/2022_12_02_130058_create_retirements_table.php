<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retirements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // $table->string('document_user');
            $table->string('document_collaborator');
            $table->string('name_collaborator');
            $table->string('performance');
            $table->string('reason_performance');
            $table->text('reason');
            $table->string('last_day');
            $table->string('money_pend');
            $table->string('money_conc');
            $table->string('money_amou');
            $table->string('date_1')->nullable();
            $table->string('date_2')->nullable();
            $table->string('date_3')->nullable();
            $table->string('date_4')->nullable();
            $table->string('date_5')->nullable();
            $table->string('date_d_1')->nullable();
            $table->string('date_d_2')->nullable();
            $table->string('date_d_3')->nullable();
            $table->string('date_d_4')->nullable();
            $table->string('date_d_5')->nullable();
            // $table->string('cum_bonus');
            // $table->string('cat_bonus');
            // $table->string('ext_bonus');
            // $table->string('cell');
            $table->string('letter');
            $table->string('delivery_certificate');
            $table->text('admin_ent');
            $table->text('store_ent');
            $table->text('cedi_ent');
            
            $table->string('user_id')->nullable();

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')->references('id')->on('collaborators')->onDelete('cascade');;

            $table->unsignedBigInteger('type_retirement_id');
            $table->foreign('type_retirement_id')->references('id')->on('type_retirements')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retirements');
    }
}
