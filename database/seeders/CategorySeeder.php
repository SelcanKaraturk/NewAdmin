<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['sorted'=>999,'block_id'=>0,'status'=>'1','file'=>'','file2'=>'','file3'=>'','parent_id'=>0]);
    }
}
