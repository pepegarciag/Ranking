<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Http\Requests\CreateScore;

class ScoreController extends Controller
{
    public function index()
    {
        $ranking = Score::ranking()->get();

        return view('welcome', compact('ranking'));
    }

    public function create()
    {
        return view('scores.create');
    }

    public function store(CreateScore $request)
    {
        Score::create($request->validated());
        return redirect()->route('home');
    }
}
