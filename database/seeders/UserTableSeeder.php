<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        echo '---------------------------------------' . "\n";
        echo '--------User Seeding-------' . "\n";

        $users = [
            [
                'first_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@1234'),
                'type' => 'superadmin',
            ],
            [
                'first_name' => 'developer',
                'email' => 'developer@syscorp.in',
                'password' => bcrypt('password'),
                'type' => 'superadmin',
            ]
        ];

        foreach ($users as $userdata) {
            User::create($userdata);
        }

        echo '--------User Seeding Completed-------' . "\n";
    }
}
