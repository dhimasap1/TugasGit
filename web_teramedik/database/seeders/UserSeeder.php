<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'username' => 'pemilik',
                'nama' => 'pemilik',
                'email' => 'pemilik@gmail.com',
                'level' => 'pemilik',
                'password' => bcrypt('pemilik123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
