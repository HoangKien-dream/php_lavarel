<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id' => 1,
                'customerID' => 1,
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addDay(3)
            ],
            [
                'id' => 2,
                'customerID' => 2,
                'created_at'=>Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(4)
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
