<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Score;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Carbon;

class ScoresApiTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_view_games_ranking()
    {
        $score = factory(Score::class)->create([
            'game' => 'Pinball',
            'points' => 500,
            'date' => (new Carbon())->startOfDay(),
        ]);

        $data = [
            'data' => [
                [
                    'id' => $score->id,
                    'game' => 'Pinball',
                    'score' => 500,
                    'date' => (new Carbon())->startOfDay()->format('Y-m-d'),
                ],
            ]
        ];

        $this->get('api/v1/scores')->assertStatus(200)->assertExactJson($data);
    }
}
