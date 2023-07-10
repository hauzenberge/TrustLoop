<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use League\Csv\Writer;
use App\Models\Answer;

class CSVController extends Controller
{
    public function export()
    {
        $answers = Answer::where('user_id', Auth::user()->id)
            ->with('question')
            ->get()
            ->groupBy(function ($answer) {
                return $answer->created_at->format('d.m.Y h:m:s');
            })
            ->map(function ($item, $key) {
                $rate_as = $item->filter(function ($item) {
                    return $item->question->text == "Rate Us";
                })->first();

                if ($rate_as) {
                    $rate_as = $rate_as->text;
                } else {
                    $rate_as = '0';
                }

                $all_questions = $item->filter(function ($item) {
                    return $item->question->text != "Rate Us";
                })
                    ->values()
                    ->map(function ($item) {
                        return $item->question->text . ' : ' . $item->text;
                    })
                    ->toArray();

                $all_questions_string = implode(', ', $all_questions);

                // dd($all_questions);

                return [
                    'rate_as' => intval($rate_as),
                    'date' => $key,
                    'all_questions' => $all_questions_string
                ];
            });

        $data = [
            ['Review', 'Date', 'All Questions'],
        ];

        foreach ($answers as $answer) {
            $row = [
                $answer['rate_as'],
                $answer['date'],
                json_encode($answer['all_questions']),
            ];

            $data[] = $row;
        }

        $csv = Writer::createFromString('');
        $csv->insertAll($data);

        $filename = 'export.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        return response($csv->getContent(), 200, $headers);
    }
}
