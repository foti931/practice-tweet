<?php

namespace Tests\Feature;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_delete_successed(): void
    {
        $user = User::factory()->create();

        $tweet = Tweet::factory()->create(['user_id'=> $user->id]);

        $this->actingAs($user);

        $response = $this->delete('/tweet/delete/'.$tweet->id);

        $response->assertRedirect('/tweet');
    }
}
