<?php

namespace App\Library\Services;

use App\Question;
use Illuminate\Http\Request;

class Quiz
{
    
    /**
     * @param Request $request
     *
     * @return array
     * @throws \RuntimeException
     */
    public function saveQuestion($request): array
    {
        $name = $request->session()->get('quiz-name')[0];
        $question = $request->input('question');
        $true = $request->input('true');
        $false1 = $request->input('false1');
        $false2 = $request->input('false2');
        $false3 = $request->input('false3');
        
        $data = [
            'name'     => $name,
            'question' => $question,
            'true'     => $true,
            'false1'   => $false1,
            'false2'   => $false2,
            'false3'   => $false3,
        ];
        
        $q = new Question($data);
        $q->save();
        
        return $data;
    }
    
    public function validateQuizName($quizNameArray)
    {
        $quizName = $quizNameArray[0];
        if (('' === $quizName) || (count($quizNameArray) !== 1)) {
            
            return false;
        }
        
        return $quizName;
    }
    
}