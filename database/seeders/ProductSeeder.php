<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productRecord=[
            ['id' =>1,"name_product"=>"Americano đá","type"=>1,"price_product"=>35000,"image_product"=>"","assess_product"=>4,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>2,"name_product"=>"Americano nóng","type"=>1,"price_product"=>30000,"image_product"=>"","assess_product"=>5,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>3,"name_product"=>"Bạc xỉu đá","type"=>1,"price_product"=>25000,"image_product"=>"","assess_product"=>3,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>4,"name_product"=>"Bạc xỉu nóng","type"=>1,"price_product"=>30000,"image_product"=>"","assess_product"=>4,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>5,"name_product"=>"Cà phê đen","type"=>1,"price_product"=>30000,"image_product"=>"","assess_product"=>4,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>6,"name_product"=>"Cà phê sữa đá","type"=>1,"price_product"=>40000,"image_product"=>"","assess_product"=>5,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>7,"name_product"=>"Capuchino đá","type"=>1,"price_product"=>35000,"image_product"=>"","assess_product"=>3,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>8,"name_product"=>"Capuchino lạnh","type"=>1,"price_product"=>40000,"image_product"=>"","assess_product"=>4,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
            ['id' =>9,"name_product"=>"Caramel macchiato đá","type"=>1,"price_product"=>50000,"image_product"=>"","assess_product"=>3,"description_product"=>"product in group 008", "created_at"=>Carbon::now(), "updated_at"=>Carbon::now()],
        ];
        Product::insert($productRecord);
    }
}
