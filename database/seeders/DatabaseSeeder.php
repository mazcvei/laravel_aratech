<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TestSeeder::class);
        $this->call(ModeloSeeder::class);
        User::truncate();
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'lastname' => "fake lastname",
             'email' => 'test@example.com',
         ]);
    }
}
