<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }


    protected $table = "questions";
        protected $fillable = [
            "photo",
            "question",
            "ans1",
            "ans2",
            "ans3",
            "ans4",
            "position",
            "correct_answer",
            "quiz_id"
    ];
    
}
