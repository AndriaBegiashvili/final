<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::Create([
            "question" => "ra ufro grdzelia",
            "photo" => "https://thumbs.dreamstime.com/z/extra-long-dachshund-manipulated-image-very-long-dachshund-extra-long-dachshund-manipulated-image-very-long-dachshund-103782436.jpg",
            "ans1" => "dzagli",
            "ans2" => "my tree",
            "ans3" => "sky",
            "ans4" => "kabeli",
            "position" => "1",
            "correct_answer" => "dzagli",
            "quiz_id" => "1"
        ]);
        Question::Create([
            "question" => "aaaaa",
            "photo" => "https://thumbs.dreamstime.com/z/extra-long-dachshund-manipulated-image-very-long-dachshund-extra-long-dachshund-manipulated-image-very-long-dachshund-103782436.jpg",
            "ans1" => "dzagli",
            "ans2" => "my tree",
            "ans3" => "sky",
            "ans4" => "kabeli",
            "position" => "1",
            "correct_answer" => "sky",
            "quiz_id" => "1"
        ]);
        Question::Create([
            "question" => "aaaaa",
            "photo" => "https://thumbs.dreamstime.com/z/extra-long-dachshund-manipulated-image-very-long-dachshund-extra-long-dachshund-manipulated-image-very-long-dachshund-103782436.jpg",
            "ans1" => "dzagli",
            "ans2" => "my tree",
            "ans3" => "aa",
            "ans4" => "kabeli",
            "position" => "1",
            "correct_answer" => "aa",
            "quiz_id" => "1"
        ]);
            
    }
}