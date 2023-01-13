<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;


class UserController extends Controller
{
    public function homePage()
    {
        $user = Auth::user();
        $quizzes = Quiz::where("user_id", 1)->get();
        return view('index', ["user" => $user], ["quizzes"=>$quizzes]);
    }
    
}
