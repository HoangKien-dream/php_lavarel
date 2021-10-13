<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('orders_detail')->insert([
            'orderID'=>random_int(1,10),
            'productID'=>random_int(1,10),
             'quantity'=>random_int(5000,500000),
            'amount'=>random_int(10,20)
        ]);
    }
}
