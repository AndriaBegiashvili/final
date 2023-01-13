<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([
            "name" => "pirveli test",
            "photo" => "https://ichef.bbci.co.uk/news/999/cpsprodpb/15951/production/_117310488_16.jpg",
            "description" => "joni juga",
            "user_id" => "1"
        ]);
        Quiz::create([
            "name" => "2",
            "photo" => "https://ichef.bbci.co.uk/news/999/cpsprodpb/15951/production/_117310488_16.jpg",
            "description" => "qvi zi zize",
            "user_id" => "1"
        ]);
        Quiz::create([
            "name" => "3",
            "photo" => "https://ichef.bbci.co.uk/news/999/cpsprodpb/15951/production/_117310488_16.jpg",
            "description" => "qvizi fexze",
            "user_id" => "1"
        ]);
    }
}
