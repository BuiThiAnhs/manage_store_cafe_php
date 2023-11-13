<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitRecord=[
            ["id"=>1,"name_unit"=>"gam"],
            ["id"=>2,"name_unit"=>"ml"],
            ["id"=>3,"name_unit"=>"hộp"],
            ["id"=>4,"name_unit"=>"kg"],
            ["id"=>5,"name_unit"=>"túi"]
        ];
        Unit::insert($unitRecord);
    }
}
