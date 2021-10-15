<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Double;
use PhpParser\Node\Expr\Cast\Int_;
use Ramsey\Uuid\Type\Integer;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Iphone XS Max',
                'price' => 10000000,
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addDay(3)
            ],
            [
                'id' => 2,
                'name' => 'MacBook Pro 2022',
                'price' => 45000000,
                'created_at'=>Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(4)
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
