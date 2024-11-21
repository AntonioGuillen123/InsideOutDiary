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
            'entry' => 'Hoy me siento feliz',
            'emotion' => 'img/emotions/joy.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento triste',
            'emotion' => 'img/emotions/sadness.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy estoy enfadado',
            'emotion' => 'img/emotions/anger.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento ansioso',
            'emotion' => 'img/emotions/anxiety.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento asustado',
            'emotion' => 'img/emotions/fear.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento nostalgico',
            'emotion' => 'img/emotions/nostalgia.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy estoy emocionado',
            'emotion' => 'img/emotions/joy.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento vergonzoso',
            'emotion' => 'img/emotions/embarrassment.png'
        ]);

        Journal::Factory()->create([
            'entry' => 'Hoy me siento asqueado',
            'emotion' => 'img/emotions/disgust.png'
        ]);

}
}
