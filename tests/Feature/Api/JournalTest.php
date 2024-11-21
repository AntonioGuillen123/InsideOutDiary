<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Journal;

class JournalTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfJournalInJsonFile()
    {
        Journal::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteAnEntryOnJournalWithApi()
    {
        $journals = Journal::factory(2)->create();

        $this->delete(route('apidestroy', $journals->first()->id));

        $this->assertDatabaseCount('journal', 1);

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateAnEntryOnJournalWithApi()
    {
        $response = $this->post(route('apistore'), [
            'entry' => 'Test Entry',
            'emotion' => 'Test Emotion'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateAnEntryOnJournalWithApi()
    {
        $this->post(route('apistore'), [
            'entry' => 'Test Entry',
            'emotion' => 'Test Emotion'
        ]);

        $data = [
            'entry' => 'Test Entry'
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($data);

        $JournalID = $response->json()[0]['id'];

        $this->put(route('apiupdate', $JournalID), [
            'entry' => 'Test Entry Updated',
            'emotion' => 'Test Emotion Updated'
        ]);

        $newData = [
            'entry' => 'Test Entry Updated'
        ];

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment($newData);
    }
}
