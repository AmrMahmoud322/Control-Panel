<?php

use Illuminate\Database\Seeder;
use App\bill;

class billTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bill = new bill([
            'customer' => 'customer 1',
            'status' => 'done',
            'totalBefore' => 550,
            'total' => 495,
            'discount' => 10,
            'owner' => 55
        ]);
        $bill->save();

        $bill = new bill([
            'customer' => 'customer 2',
            'status' => 'done',
            'totalBefore' => 3098,
            'total' => 3098,
            'discount' => 0,
            'owner' => 6
        ]);
        $bill->save();

        $bill = new bill([
            'customer' => 'customer 3',
            'status' => 'not done',
            'totalBefore' => 678.5,
            'total' => 678.5,
            'discount' => 0,
            'owner' => 8
        ]);
        $bill->save();

    }
}
