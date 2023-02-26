<?php

namespace Database\Seeders;

use App\Models\Catprice;
use App\Models\Position;
use App\Models\Side;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Status::insert([
            'name'=>'Куплена',
        ]);
        Status::insert([
            'name'=>'Свободна',
        ]);
        Status::insert([
            'name'=>'Забронирована',
        ]);

        Side::insert([
            'name'=>'Север',
        ]);
        Side::insert([
            'name'=>'Юг',
        ]);
        Side::insert([
            'name'=>'Запад',
        ]);
        Side::insert([
            'name'=>'Восток',
        ]);
        Side::insert([
            'name'=>'Северо-восток',
        ]);
        Side::insert([
            'name'=>'Северо-запад',
        ]);
        Side::insert([
            'name'=>'Юго-запад',
        ]);
        Side::insert([
            'name'=>'Юго-восток',
        ]);
        Catprice::insert([
            'name'=>'Дешево',
        ]);
        Catprice::insert([
            'name'=>'Средне',
        ]);
        Catprice::insert([
            'name'=>'Дорого',
        ]);
        Position::insert([
            'name'=>'1',
        ]);
        Position::insert([
            'name'=>'2',
        ]);
        Position::insert([
            'name'=>'3',
        ]);
        Position::insert([
            'name'=>'4',
        ]);
        Position::insert([
            'name'=>'5',
        ]);
        Position::insert([
            'name'=>'6',
        ]);
        Position::insert([
            'name'=>'7',
        ]);
        Position::insert([
            'name'=>'8',
        ]);
        Position::insert([
            'name'=>'9',
        ]);
        Position::insert([
            'name'=>'10',
        ]);
        Position::insert([
            'name'=>'11',
        ]);

    }
}
