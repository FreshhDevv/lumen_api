<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $factory->define(Product::class, function (Faker\Generator $faker) {
//            return [
//                'name'=>$faker->name,
//                'price'=> rand(0, 300),
//                'description'=>$faker->text,
//            ];
//        });
        DB::table('products')->insert([
            'name'=>Str::random(10),
            'price'=>rand(0, 300),
            'description'=>Str::random(50),
        ]);
    }
}
