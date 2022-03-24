<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
        $product->name = 'sản phảm 1';
        $product->category = 'Sản phẩm mới';
        $product->price = 1231;
        $product->quantity = 1;
        $product->image = 'ádf';
        $product->status = 'Active';
        $product->save();
    }
}
