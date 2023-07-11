<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Font;

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

        $questions = [
            ['text' => 'What would need to be improved for you to rate us 5-stars?', 'type' => 'question'],
            ['text' => 'How likely are you to tell share our product (1-10)?', 'type' => 'question'],
            ['text' => 'How satisfied are you with our product?', 'type' => 'question'],
            ['text' => 'Any other feedback?', 'type' => 'question'],
        ];


        foreach ($users as $user) {
            $font = Font::inRandomOrder()->first();

            $survey = Survey::create(
                [
                    'title' => 'Survey Into ' . $user->name,
                    'font_id' => $font->id
                ]);
           

            $questionsCount = count($questions);            

            $randomKeys = array_rand($questions, 3); 
            $randomQuestions = [];
            foreach ($randomKeys as $key) {
                $randomQuestions[] = $questions[$key]; 
            }

            $rate_as_quastion = Question::create([
                'text' => "Rate Us",
                'type' => 'rating',
                'survey_id' => $survey->id,
            ]);

            foreach ($randomQuestions as $questionData) {
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
