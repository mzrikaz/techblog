<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@demo.com',
                'password' => bcrypt('123456'), // Use bcrypt to hash the password
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => bcrypt('123456789'),
            ], // Use bcrypt to hash the password
            [
                'name' => 'Jane Smith',
                'email' => 'jane@doe.com',
                'password' => bcrypt('987654321'),
            ], // Use bcrypt to hash the password
        ];

        foreach ($users as $user) {

            $user = \App\Models\User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => $user['password'],
                    'email_verified_at' => now(),
                ]
            );

            echo "User {$user->email} created or already exists.\n";
        }
    }
}
