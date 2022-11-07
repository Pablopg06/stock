<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Pablo Pereyra',
            'email' => 'pablopg0694@gmail.com',
            'password' => bcrypt('abcde123'),
            'remember_token' => Str::random(10)

        ]);
        User::factory(10)->create();
    }
}
