<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fruit;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*DB::insert('INSERT INTO fruits (id, name) VALUES (1, "みかん")');
        DB::insert('INSERT INTO fruits (id, name) VALUES (2, "りんご")');
        DB::insert('INSERT INTO fruits (id, name) VALUES (3, "ぶどう")');
        DB::insert('INSERT INTO fruits (id, name) VALUES (4, "バナナ")');
        DB::insert('INSERT INTO fruits (id, name) VALUES (5, "梨")');
        */
        /*DB::table('fruits')->insert(['name'=> 'みかん']);*/
        Fruit::create(['name'=> 'みかん']);
        Fruit::create(['name'=> 'りんご']);
        Fruit::create(['name'=> 'ぶどう']);
        Fruit::create(['name'=> 'バナナ']);
        Fruit::create(['name'=> '梨']);
    }
}
