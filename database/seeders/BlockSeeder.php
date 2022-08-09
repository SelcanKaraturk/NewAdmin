<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE blocks');
        Block::create(['name'=>'Sayfalar','block'=>'PagesController@index']);
        Block::create(['name'=>'İletisim','block'=>'ContactController@index']);
        Block::create(['name'=>'Blok','block'=>'BaseController@index']);
    }
}
