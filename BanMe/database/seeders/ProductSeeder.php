<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Products();
        $product->product_name="Cafe Vy";
        $product->category_id='1';
        $product->price='20';
        $product->image='cf1.jpg';
        $product->save();

        $product = new products();
        $product->product_name="Cafe Yến";
        $product->category_id='2';
        
        $product->price='30';
        $product->image='cf2.jpg';
        $product->save();

        $product = new products();
        $product->product_name="Kem Coffee";
        $product->category_id='2';

        $product->price='202';
        $product->image='cf3.jpg';
        $product->save();

        $product = new products();
        $product->product_name="Coffee Mộc";
        $product->price='202';
        $product->category_id='3';

        $product->image='cf4.jpg';
        $product->save();

        $product = new products();
        $product->product_name="Coffee Hỏa";
        $product->category_id='3';

        $product->price='202';
        $product->image='cf2.jpg';
        $product->save();


        $product = new products();
        $product->product_name="Coffee Thổ";
        $product->category_id='1';

        $product->price='222222';
        $product->image='cf2.jpg';
        $product->save();
    }
}
