<?php

namespace Database\Seeders;

use App\Models\CouponTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // Trạng thái 0(true): co người ngồi; trạng thái 1(false): không có người ngồi
    public function run(): void
    {
        $tableRecord=[['id'=>1,'status'=>true],
        ['id'=>2,'status'=>false],
        ['id'=>3,'status'=>true],
        ['id'=>4,'status'=>true],
        ['id'=>5,'status'=>false],
        ['id'=>6,'status'=>false],
        ['id'=>7,'status'=>true],
        ['id'=>8,'status'=>true],
        ['id'=>9,'status'=>true],
        ['id'=>10,'status'=>true],
        ['id'=>11,'status'=>false],
        ['id'=>12,'status'=>true],
        ['id'=>13,'status'=>false],
        ['id'=>14,'status'=>false],
        ['id'=>15,'status'=>false],
        ['id'=>16,'status'=>true],
        ['id'=>17,'status'=>false],
        ['id'=>18,'status'=>false],
        ['id'=>19,'status'=>true],
        ['id'=>20,'status'=>false]];
        CouponTable::insert($tableRecord);
    }
}
