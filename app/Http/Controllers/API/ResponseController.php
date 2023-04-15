<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Models\Survey;


class ResponseController extends Controller
{
    public function store(Request $request, Survey $survey)
    {
        $validatedData = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required',
        ]);

        $response = new Response([
            'question_id' => $validatedData['question_id'],
            'answer' => $validatedData['answer'],
        ]);

        $survey->responses()->save($response);

        return response()->json([
            'message' => 'Response saved successfully',
            'response' => $response,
        ]);
    }
}
