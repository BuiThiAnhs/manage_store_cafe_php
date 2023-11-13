<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredientRecord=[
            ['id'=>1,'name_ingredient'=>"Sữa Ông Thọ", "price_ingredient"=>23000, "amount"=>10, "type"=>1,"unit"=> 3],
            ['id'=>2,'name_ingredient'=>"Sữa TH true Milk", "price_ingredient"=>37000, "amount"=>15, "type"=>8,"unit"=> 5],
            ['id'=>3,'name_ingredient'=>"Cà phê Trung Nguyên", "price_ingredient"=>60000, "amount"=>12, "type"=>2,"unit"=> 5],
            ['id'=>4,'name_ingredient'=>"Cà phê Phương Vy", "price_ingredient"=>50000, "amount"=>10, "type"=>2,"unit"=> 10],
        ];
        Ingredient::insert($ingredientRecord);
    }
}
