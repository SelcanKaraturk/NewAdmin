<?php

namespace Database\Seeders;

use App\Models\CategoryLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE category_languages');

        CategoryLanguage::create(['category_id'=>1,'name'=>'Menü','description'=>'','contents'=>'','language_slug'=>'tr','url'=>'','seo_title'=>'','seo_description'=>'','seo_keywords'=>'']);
        CategoryLanguage::create(['category_id'=>1,'name'=>'Menu','description'=>'','contents'=>'','language_slug'=>'en','url'=>'','seo_title'=>'','seo_description'=>'','seo_keywords'=>'']);
        CategoryLanguage::create(['category_id'=>1,'name'=>'Menu','description'=>'','contents'=>'','language_slug'=>'fr','url'=>'','seo_title'=>'','seo_description'=>'','seo_keywords'=>'']);

    }
}
