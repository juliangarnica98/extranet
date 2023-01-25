<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('type_id');
            $table->string('num_id');
            $table->string('num_cell');
            $table->string('num_cell2');
            $table->string('age');
            $table->string('email');
            $table->string('address');
            $table->string('city_address');
            $table->string('academic_profile');

            $table->string('name_last_company');
            $table->string('position_last_company');
            $table->string('funtion_last_company');
            $table->string('work_last_company');
            $table->string('date_init_company');
            $table->string('date_finally_company');
            
            $table->string('name_last_company2');
            $table->string('position_last_company2');
            $table->string('funtion_last_company2');
            $table->string('date_init_company2');
            $table->string('date_finally_company2');

    
            $table->string('family');
            $table->text('like_to_work');
            $table->string('previously_work');
            $table->text('should_choose');
            $table->string('shirt_size');
            $table->string('pant_size');

            $table->unsignedBigInteger('vacant_id');
            $table->foreign('vacant_id')->references('id')->on('vacants')->onDelete('cascade');;

            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
