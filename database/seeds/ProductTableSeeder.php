<?php

use Illuminate\Database\Seeder;
use App\products;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new products([
            'name' => 'Product 0',
            'buy_price' => 10,
            'wholesale' => 12,
            'price' => 13,
            'type' => 'type 0',
            'quantity' => 10,
            'min_quantity' => 1,
            'notes' => 'Notes for Product 0',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 1',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 1',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 1',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 2',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 2',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 2',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 3',
            'buy_price' => 120,
            'wholesale' => 140,
            'price' => 150,
            'type' => 'type 2',
            'quantity' => 200,
            'min_quantity' => 30,
            'notes' => 'Notes for Product 3',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 4',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 2',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 4',
            'availability' => 'No'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 5',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 3',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 5',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 6',
            'buy_price' => 300,
            'wholesale' => 500,
            'price' => 650.50,
            'type' => 'type 3',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 6',
            'availability' => 'NO'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 7',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 4',
            'quantity' => 30,
            'min_quantity' => 20,
            'notes' => 'Notes for Product 7',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 8',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 4',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 8',
            'availability' => 'No'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 9',
            'buy_price' => 1000,
            'wholesale' => 1100,
            'price' => 1400,
            'type' => 'type 6',
            'quantity' => 50,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 9',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 10',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 1',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 10',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 11',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 9',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 11',
            'availability' => 'no'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 12',
            'buy_price' => 1100,
            'wholesale' => 1300,
            'price' => 1400,
            'type' => 'type 5',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 12',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 13',
            'buy_price' => 11122,
            'wholesale' => 13122,
            'price' => 14122,
            'type' => 'type 6',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 13',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 14',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 14,
            'type' => 'type 1',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 14',
            'availability' => 'yes'
        ]);
        $product->save();

        $product = new products([
            'name' => 'Product 15',
            'buy_price' => 11,
            'wholesale' => 13,
            'price' => 15,
            'type' => 'type 1',
            'quantity' => 30,
            'min_quantity' => 3,
            'notes' => 'Notes for Product 15',
            'availability' => 'yes'
        ]);
        $product->save();
    }
}
