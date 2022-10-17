<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('nguyenthanhkhangcustomers')->insert([
            [
                'customerName'=>'Nguyenthanhkhang',
                'address'=>'1147, Đ.Nguyễn Duy Trinh, TP Thủ Đức, TP.HCM',
                'phone'=>'0704880256',
                'email'=>'nguyenthanhkhang@gmail.com',
                'password'=>bcrypt('12345'),
            ]
        ]);
    }
}
