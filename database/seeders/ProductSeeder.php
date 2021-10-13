<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('products')->insert([
            'price'=>50000,
            'name'=>Str::random(5)
        ]);
    }
}
