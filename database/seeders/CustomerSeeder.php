<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str as StrAlias;
use function Sodium\add;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Hoàng Kiên',
                'address'=>'78 Ngọc Hà Ba Đình Hà Nội',
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addDay(3)
            ],
            [
                'id' => 2,
                'name' => 'Thanh Mai',
                'address' => '10 ngõ 94 Ngọc Hà, Ba Đình, Hà Nội',
                'created_at'=>Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(4)
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
