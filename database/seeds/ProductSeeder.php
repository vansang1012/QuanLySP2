<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Leaf Rake';
        $product->code = 'GDN-0011';
        $product->available = '14156';
        $product->price = 20;
        $product->save();


    }
}
