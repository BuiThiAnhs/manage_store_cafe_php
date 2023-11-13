<?php

namespace Database\Seeders;

use App\Models\IngredientType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredientTypeRecord=[
            ["id"=>1,"name"=>"Sữa đặc", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>2,"name"=>"Bột cà phê", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>3,"name"=>"Quả", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>4,"name"=>"Bột cacao", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>5,"name"=>"Đường", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>6,"name"=>"Mật ong", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>7,"name"=>"Bột quế", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>8,"name"=>"Sữa tươi", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
        ];
        IngredientType::insert($ingredientTypeRecord);
    }
}
