<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBiasaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@macetoon.com',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole('user');
    }
}
