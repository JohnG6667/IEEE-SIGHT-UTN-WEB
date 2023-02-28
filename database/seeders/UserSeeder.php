<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Prueba',
            'last_name' => 'Last_Name Prueba',
            'phone' => '123456789',
            'status' => 1,
            'email' => 'prueba@gmail.com',
            'password' => bcrypt('prueba')
        ]);
    }
}
