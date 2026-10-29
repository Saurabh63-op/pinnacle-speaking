<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAndDrillSeeder extends Seeder
{
    public function run(): void
    {
        // Create or update Default Admin
        User::updateOrCreate(
            ['email' => 'admin@pinnacle.in'],
            [
                'name' => 'Pinnacle Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );
    }
}
