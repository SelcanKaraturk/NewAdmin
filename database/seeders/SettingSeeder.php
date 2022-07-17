<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE settings');

        Setting::create(['language_id'=>1,'default_lang'=>'1']);
        Setting::create(['language_id'=>2, 'default_lang'=>'0']);
        Setting::create(['language_id'=>3, 'default_lang'=>'0']);
    }
}
