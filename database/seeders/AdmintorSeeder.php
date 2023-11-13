<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Admintor;

class AdmintorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecord=['id'=>1,'email'=>'anhvanbuithi45@gmail.com','password'=>$password,'type'=>'1','fullname'=>'Admin','dayOfbirth'=>Carbon::parse('2001-12-12'), 'phone'=>'0123456789','address'=>'So 3 Cau Giay', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()];
        Admintor::insert($adminRecord);
    }
}
