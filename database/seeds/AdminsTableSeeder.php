<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'mamun',
            'email' => 'sakib@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '01864090759',
        ]);
    }
}
