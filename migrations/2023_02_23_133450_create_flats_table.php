<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('side_id');
            $table->foreign('side_id')->references('id')->on('sides');
            $table->string('description'); //Описания
            $table->string('photo'); //фото
            $table->float('area'); //Плозадь
            $table->float('floor'); // Этаж
            $table->float('rooms'); //Кол-во комнат
            $table->integer('price'); // цена
            $table->foreignId('catprice_id');
            $table->foreign('catprice_id')->references('id')->on('catprices');
            $table->string('plan'); // тип планировки
            $table->float('house'); // дом
            $table->foreignId('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreignId('position_id');
            $table->foreign('position_id')->references('id')->on('positions');
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
        Schema::dropIfExists('flats');
    }
}
