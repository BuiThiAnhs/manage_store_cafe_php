<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//        $this->call(AdmintorSeeder::class);
//        $this->call(CmsPageSeeder::class);
//        $this->call(ProductSeeder::class);
//        $this->call(IngredientSeeder::class);
//        $this->call(IngredientTypeSeeder::class);
//        $this->call(UnitSeeder::class);
        $this->call(CouponTableSeeder::class);

    }
}
