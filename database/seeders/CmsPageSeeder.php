<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsPage;
class CmsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsPageRecords =[
            ['id' => 1, 'title'=>'Liên hệ','description'=>'Chào mừng đến với nhóm 08','url'=>'about_us','meta_title'=>'Liên Hệ','meta_description'=>' Liên hệ','meta_keywords'=>'about us, about', 'status'=>1],
            ['id' => 2, 'title'=>'Điều khoản','description'=>' Điều khoản nhóm 08','url'=>'term_conditions','meta_title'=>'Điều Khoản','meta_description'=>' Điều Khoản','meta_keywords'=>'term, term condition', 'status'=>1],
            ['id' => 3, 'title'=>'Chính sách bảo mật','description'=>'Chính sách bảo mật nhóm 08','url'=>'privacy_policy','meta_title'=>'Chính sách bảo mật','meta_description'=>' Chính sách bảo mật','meta_keywords'=>'policy,privacy policy', 'status'=>1]
        ];
        CmsPage::insert($cmsPageRecords);
    }
}
