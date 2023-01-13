<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function showQuiz(Quiz $quiz)
    {
        $user = Auth::user();
        return view("quiz",["user" => $user,"quiz" => $quiz]);
    }
    public function myQuiz()
    {   
        $user = Auth::user();
        $quizzes = Quiz::where("user_id", $user->id)->get();
        return view("myquiz", ["quizzes" => $quizzes, 'user' => $user]);
    }
    public function createMyQuiz()
    {
        return view('create');
    }
    public function quizzAdd(Request $request)
    {
        if($request->has('form1')){
            Quiz::Create([
                'name' => $request->input('input1'),
                'photo' => $request->input('input2'),
                'description' => $request->input('input3'),
                'user_id' => Auth::user()->id
            ]);
            return view('create');
        }
        else{
            Question::Create([
                'question' => $request->input('Question'),
                'photo' => $request->input('pic'),
                'ans1' => $request->input('Answer1'),
                'ans2' => $request->input('Answer2'),
                'ans3' => $request->input('Answer3'),
                'ans4' => $request->input('Answer4'),
                'position' => $request->input('position'),
                'correct_answer' => $request->input('correct'),
                'quiz_id' => $request->input('id')
            ]);
            return view('create');
        }
       
    
    }
    public function takeQuiz(Quiz $quiz)
    {
        $user = Auth::user();
       $questions = $quiz->questions;
        return view('takequiz',compact('questions', 'quiz','user'));
    }
    public function info(Quiz $quiz)
    {
        $questions = $quiz->questions;
        
        return response()->json([
            'questions' => $questions
        ]);
    }
    public function deletequiz(Request $request) {
    	if($request -> input('delete') != ""){
            Quiz::where('name', '=', $request->input('delete'))->delete();
        }
        return $this->myQuiz();
    }   

}


  


