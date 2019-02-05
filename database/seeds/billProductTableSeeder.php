<?php

use Illuminate\Database\Seeder;
use App\bill_products;

class billProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill_product = new bill_products([
            'bill_id' => 1,
            'product_id' => 1,
            'note' => 'notes for product no 1',
            'amount' => 10 ,
            'price' => 13,
            'total_price' => 130 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 1,
            'product_id' => 2,
            'note' => 'notes for product no 2',
            'amount' => 10 ,
            'price' => 14,
            'total_price' => 140 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 1,
            'product_id' => 3,
            'note' => 'notes for product no 3',
            'amount' => 20 ,
            'price' => 14,
            'total_price' => 280 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 2,
            'product_id' => 4,
            'note' => 'notes for product no 4',
            'amount' => 20 ,
            'price' => 150,
            'total_price' => 3000 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 2,
            'product_id' => 5,
            'note' => 'notes for product no 5',
            'amount' => 2 ,
            'price' => 14,
            'total_price' => 28 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 2,
            'product_id' => 6,
            'note' => 'notes for product no 6',
            'amount' => 5 ,
            'price' => 14,
            'total_price' => 70 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 3,
            'product_id' => 7,
            'note' => 'notes for product no 7',
            'amount' => 5 ,
            'price' => 650.50,
            'total_price' => 3252.5 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 3,
            'product_id' => 8,
            'note' => 'notes for product no 8',
            'amount' => 10 ,
            'price' => 14,
            'total_price' => 140 
        ]);
        $bill_product->save();

        $bill_product = new bill_products([
            'bill_id' => 3,
            'product_id' => 9,
            'note' => 'notes for product no 9',
            'amount' => 1 ,
            'price' => 14,
            'total_price' => 14 
        ]);
        $bill_product->save();

    }
}
