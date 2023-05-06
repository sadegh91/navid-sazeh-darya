<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'صادق',
            'last_name' => 'همت نیا',
            'national_code' => '3490121724',
            'password' => Hash::make('123'),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => Str::random(100)
        ]);
    }
}
