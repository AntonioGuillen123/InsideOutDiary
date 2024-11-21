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
        $journal = Journal::factory(2)->create();

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
}
