<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_features', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('category');
            $table->tinyInteger('course');
            $table->integer('students');
            $table->integer('duration');
            $table->string('shift');
            $table->integer('price');
            $table->tinyInteger('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_features');
    }
}
