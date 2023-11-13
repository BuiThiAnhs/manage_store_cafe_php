<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procuctTypeRecord=[
            ["id"=>1,"name"=>"Cà phê", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>2,"name"=>"Nước ép", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ["id"=>3,"name"=>"Bánh ngọt", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
        ];
        ProductType::insert($procuctTypeRecord);
    }

}
