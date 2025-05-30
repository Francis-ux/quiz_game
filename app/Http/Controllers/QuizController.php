<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function play()
    {
        $questions = Question::inRandomOrder()->limit(5)->get();
        return view('play', compact('questions'));
    }

    public function submitScore(Request $request)
    {
        Score::create([
            'user_id' => Auth::id(),
            'score' => $request->score,
            'time_taken' => $request->time_taken,
        ]);
        return response()->json(['status' => 'success']);
    }

    public function leaderboard()
    {
        $scores = Score::with('user')
            ->orderByDesc('score')
            ->orderBy('time_taken')
            ->take(10)
            ->get();
        return view('leaderboard', compact('scores'));
    }
}
