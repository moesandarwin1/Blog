<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Category::factory(10)->create();
        //Post::factory(20)->create();

        // User::factory(10)->create();

        //User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
       // ]);
       User::create([
        'name' => 'Super Admin',
        'phone' => '09881234567',
        'profile' => '/images/profiles/sa.png',
        'email' => 'superadmin@gmail.com',
        'password' => Hash::make('123456789'),
        'role' => 'Super Admin',
       ]);
    }
}
