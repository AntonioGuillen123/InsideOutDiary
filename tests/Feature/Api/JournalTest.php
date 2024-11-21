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
}
