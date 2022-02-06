<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            "first_name" => "Admin",
            "last_name" => "",
            "email" => env("DEFAULT_ADMIN_EMAIL"),
            "password" => Hash::make(env("DEFAULT_ADMIN_PASSWORD")),
            "role" => "super_user"
        ]);
        User::create([
            "first_name" => "User",
            "last_name" => "",
            "email" => "test@email.com",
            "password" => Hash::make(env("DEFAULT_ADMIN_PASSWORD")),
            "role" => "user"
        ]);
    }
}
