<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'firstname' => 'Rodrigo',
            'lastname' => 'Oliveira',
            'email' => 'contato@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
