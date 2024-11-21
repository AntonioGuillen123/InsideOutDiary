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
        Journal::Factory()->create([
            'entry' => 'Hoy estoy cansado',
            'emotion' => 'img/emotions/sad.jpg'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy estoy feliz',
            'emotion' => 'img/emotions/happy.jpg'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy estoy cabreado',
            'emotion' => 'img/emotions/angry.jpg'
        ]);
    }
}