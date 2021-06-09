<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->category_name='Cafe Đen';
        $category->save();

        $category = new Category();
        $category->category_name='Cafe Nâu';
        $category->save();

        $category = new Category();
        $category->category_name='Capuchino';
        $category->save();
    }
}
