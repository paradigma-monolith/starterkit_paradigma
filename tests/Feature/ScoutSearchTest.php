<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScoutSearchTest extends TestCase
{
    use RefreshDatabase;

    public function test_unauthenticated_user_cannot_access_search_api(): void
    {
        $response = $this->getJson('/api/v1/search?q=admin');
        $response->assertStatus(401);
    }

    public function test_authenticated_user_can_perform_global_search(): void
    {
        $user = User::factory()->create([
            'name' => 'John Doe Scout',
            'email' => 'john.scout@example.com',
        ]);

        $response = $this->actingAs($user, 'sanctum')->getJson('/api/v1/search?q=John');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'query',
            'results' => [
                'users',
                'navigation',
            ],
        ]);
        $response->assertJsonFragment([
            'title' => 'John Doe Scout',
        ]);
    }

    public function test_short_query_returns_empty_results(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user, 'sanctum')->getJson('/api/v1/search?q=a');

        $response->assertStatus(200);
        $response->assertJson([
            'query' => 'a',
            'results' => [
                'users' => [],
                'navigation' => [],
            ],
        ]);
    }
}
