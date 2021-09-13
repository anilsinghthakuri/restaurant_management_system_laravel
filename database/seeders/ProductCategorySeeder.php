<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'product_category_name'=>'momo',
        ]);
        DB::table('product_categories')->insert([
            'product_category_name'=>'Roll',
        ]);
        DB::table('product_categories')->insert([
            'product_category_name'=>'Pizza',
        ]);
    }
}
