<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Up crea las tablas
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            //$table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('day');
            $table->integer('month');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**>
     * Reverse the migrations.
     *
     * @return void
     */
    //Down destruye tablas
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
