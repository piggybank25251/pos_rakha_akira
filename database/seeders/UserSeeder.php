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
        $data = [
            ['name' => 'Luffy', 'email' => 'luffy@eastblue.com', 'password' => bcrypt('luffy')],
            ['name' => 'Zoro', 'email' => 'zoro@eastblue.com', 'password' => bcrypt('zoro')],
            ['name' => 'Sanji', 'email' => 'sanji@eastblue.com', 'password' => bcrypt('sanji')],
        ];
        \App\Models\User::insert($data);
    }
}
