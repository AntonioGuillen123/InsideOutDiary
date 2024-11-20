<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Journal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

         //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
=======
        Journal::factory(1)->create();
>>>>>>> a9a3c3e9691aa54d750aeb4a8dedf52e35abd0ac
    }
}

Journal::Factory(1)->create();


