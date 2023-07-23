<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ('users')->insert([
            'email' => 'logistik@ittelkom-sby.ac.id',
            'username' => 'logistik',
            'password' => 'logistik',
        ]);
    }
}
