<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => "Alphagene",
            'email' => "admin@alpha.com",
            'password' => Hash::make('alphagenea'),
        ]);
        $user->assignRole('super-admin');
    }
}
