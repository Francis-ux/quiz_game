<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'What is the capital of France?',
                'option_a' => 'Paris',
                'option_b' => 'London',
                'option_c' => 'Berlin',
                'option_d' => 'Madrid',
                'correct_option' => 'a',
            ],
            [
                'question' => 'Which planet is known as the Red Planet?',
                'option_a' => 'Earth',
                'option_b' => 'Mars',
                'option_c' => 'Jupiter',
                'option_d' => 'Saturn',
                'correct_option' => 'b',
            ],
            [
                'question' => 'What is 2 + 2?',
                'option_a' => '3',
                'option_b' => '4',
                'option_c' => '5',
                'option_d' => '6',
                'correct_option' => 'b',
            ],
            [
                'question' => 'Who wrote "Romeo and Juliet"?',
                'option_a' => 'William Shakespeare',
                'option_b' => 'Charles Dickens',
                'option_c' => 'George Orwell',
                'option_d' => 'Jane Austen',
                'correct_option' => 'a',
            ],
            [
                'question' => 'What is the largest ocean?',
                'option_a' => 'Atlantic Ocean',
                'option_b' => 'Indian Ocean',
                'option_c' => 'Arctic Ocean',
                'option_d' => 'Pacific Ocean',
                'correct_option' => 'd',
            ],
        ];

        foreach ($questions as $q) {
            Question::create($q);
        }
    }
}
