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
        
            $table->string('family');
            $table->text('like_to_work');
            $table->string('previously_work');
            $table->text('should_choose');
            $table->string('shirt_size');
            $table->string('pant_size');
            $table->string('shoes_size');

            $table->string('children');
            $table->string('file_cv');
      
        
            
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
