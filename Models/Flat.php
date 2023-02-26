<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $fillable = [
        'us',
        'description',
        'photo',
        'area',
        'status_id',
        'floor',
        'rooms',
        'price',
        'catprice_id',
        'position_id',
        'plan',
        'house',

        //            $table->string('us'); сторона света
        //            $table->string('description'); Описания
        //            $table->string('photo'); фото
        //            $table->float('area'); Плозадь
        //            $table->float('floor'); Этаж
        //            $table->float('rooms'); Кол-во комнат
        //            $table->float('price');  цена
        //            $table->float('catprice'); категория цены
        //            $table->string('plan');  тип планировки
        //            $table->string('house'); дом

    ];
    public function status(){
        return $this->hasOne(Status::class, 'id', 'status_id')->first()->name;
    }
    public function catprice(){
        return $this->hasOne(Catprice::class, 'id', 'catprice_id')->first()->name;
    }
    public function position(){
        return $this->hasOne(Position::class, 'id', 'position_id')->first()->name;
    }
}
