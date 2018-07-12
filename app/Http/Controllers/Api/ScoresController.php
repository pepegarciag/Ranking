<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Score as ScoreResource;
use App\Score;
use App\Http\Requests\CreateScore;

class ScoresController extends Controller
{
    public function index()
    {
        // Hacer un scope para el ranking.
        return ScoreResource::collection(Score::ranking()->get());
    }

    public function store(CreateScore $request)
    {
        $score = Score::create($request->validated());
        return new ScoreResource($score);
    }
}
