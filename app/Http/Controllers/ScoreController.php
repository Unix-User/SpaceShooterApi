<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{

    public function index()
    {
        $scores = Score::orderBy('score', 'desc')->get();
        return response()->json($scores);
    }
    public function store(Request $request)
    {
        $score = new Score;
        $score->name = $request->name;
        $score->score = $request->score;
        $score->save();

        return response()->json($score, 201);
    }
    public function show($id)
    {
        $score = Score::find($id);
        if ($score) {
            return response()->json($score);
        } else {
            return response()->json(['error' => 'Score not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $score = Score::find($id);
        if ($score) {
            $score->name = $request->name;
            $score->score = $request->score;
            $score->save();
            return response()->json($score);
        } else {
            return response()->json(['error' => 'Score not found'], 404);
        }
    }

    public function destroy($id)
    {
        $score = Score::find($id);
        if ($score) {
            $score->delete();
            return response()->json(['message' => 'Score deleted successfully']);
        } else {
            return response()->json(['error' => 'Score not found'], 404);
        }
    }
}
