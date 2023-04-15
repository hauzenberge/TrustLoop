<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;

class UsersSurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 'user')->get();

        foreach ($users as $user) {
            $survey = Survey::create(['title' => 'Survey Into '. $user->name]);

            $questions = [
                ['text' => 'How would you rate our service?', 'type' => 'rating'],
                ['text' => 'How likely are you to recommend us?', 'type' => 'rating'],
                ['text' => 'How satisfied are you with our product?', 'type' => 'rating'],
            ];

            foreach ($questions as $questionData) {
                $question = Question::create([
                    'text' => $questionData['text'],
                    'type' => $questionData['type'],
                    'survey_id' => $survey->id,
                ]);
            }

            $user->survey()->associate($survey)->save();
        }
    }
}
