<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders_detail')->truncate();
        \Illuminate\Support\Facades\DB::table('orders_detail')->insert([
            [
                'orderID' => 1,
                'productID'=>2,
                'amount'=>8,
                'quantity' => 'price'*'amount',
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addDay(3)
            ],
            [
                'orderID' => 2,
                'productID' => 1,
                'amount'=>20,
                'quantity' => 'price'*'amount',
                'created_at'=>Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(4)
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
