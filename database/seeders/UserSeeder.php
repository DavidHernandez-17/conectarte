<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'David Hernández',
            'email' => 'admin@conectarte.co',
            'password' => bcrypt('12345'),
        ]);
    }
}
