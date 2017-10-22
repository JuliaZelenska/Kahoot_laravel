<?php

namespace App\Http\Controllers;

use App\Library\Services\Quiz;
use App\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function postSaveQuestion(Request $request, Quiz $quiz)
    {
        $quizNameArray = $request->session()->get('quiz-name');
        $quizName = $quiz->validateQuizName($quizNameArray);
        if (false === $quizName) {
            return redirect()->route('create-quiz-name');
        }
        
        $data = $quiz->saveQuestion($request);
        $lastQuestion = $request->input('last_question');
        
        if ('true' === $lastQuestion) {
            
            $request->session()->remove('quiz-name');
            
            return redirect()->route('quiz-list');
        }
        
        return view('create_quiz', ['quizName' => $quizName])->with('info', 'Pytanie ' . $data['question']);
    }
    
    public function postUpdate(Request $request, Question $question)
    {
        $id = $request->input('id');
        $questionContent = $request->input('question');
        $true = $request->input('true');
        $false1 = $request->input('false1');
        $false2 = $request->input('false2');
        $false3 = $request->input('false3');
        
        $questionQuery = $question->newQuery();
        $questionResult = $questionQuery->where('id', '=', $id)->first();
        
        $data = [
            'question' => $questionContent,
            'true'     => $true,
            'false1'   => $false1,
            'false2'   => $false2,
            'false3'   => $false3,
        ];
        
        if (!empty($questionResult)) {
            $questionResult->update($data);
            $responseMessage = 'Pytanie ' . $question . ' dodano pomyślnie';
        } else {
            $responseMessage = 'Nie udało się utworzyć';
        }
        
        return \Redirect::back()->with('info', $responseMessage);
    }
    
    /**
     * @param Question $question
     *
     * @return $this
     * @internal param $id
     */
    public function getQuestion(Question $question)
    {
        $idFromUrl = request()->id;
        
        $questionQuery = $question->newQuery();
        $questionResult = $questionQuery->where('id', '=', $idFromUrl)->first();
        
        return view('edit_quiz', ['question' => $questionResult]);
    }
    
    public function getCreateQuiz(Request $request, Quiz $quiz)
    {
        $quizNameArray = $request->session()->get('quiz-name');
        $quizName = $quiz->validateQuizName($quizNameArray);
        if (false === $quizName) {
            return redirect()->route('create-quiz-name');
        }
        
        return view('create_quiz', ['quizName' => $quizName]);
    }
    
    public function getQuizList()
    {
        $question = new Question();
        $quizList = $question->select('name')->groupBy('name')->get();
        
        return view('quiz_list', ['quizList' => $quizList]);
    }
    
    public function postPlayQuiz(Request $request)
    {
        $quizName = $request->input('quiz_name');
        
        $question = new Question();
        $questions = $question->where('name', '=', $quizName)->get();
        
        return view('play_quiz', ['questions' => $questions]);
    }

    public function getCreateQuizName()
    {
        \Session::remove('quiz-name');
        
        return view('name_quiz');
    }
    
    public function postQuizName(Request $request)
    {
        $quizName = $request->input('quiz-name');
        $request->session()->push('quiz-name', $quizName);
        
        return redirect()->route('create-quiz');
        
    }
    
    public function test(Quiz $demoOne)
    {
        echo $demoOne->doSomethingUseful();

//        $data = $request->session()->all();
//        dump($data);
    }
    
    public function getQuiz(Request $request, Question $question)
    {
        $quizName = $request->input('quiz_name');
        $questionTableQuery = $question->newQuery();
        $quiz = $questionTableQuery->where('name', '=', $quizName)->get();
        
        return $quiz;

// zapytac baze danych o quiz o podanej nazwie ($quizname) i zwraca znaleziony quiz
    }
    
    public function postCheckQuestion()
    {
// przyjmuje id odpowiedzi
//jesli poprawna -> metoda dodajaca punkty i zwraca true
//jesli zla -> zwraca false
    }
    
    public function getQuizResult()
    {
// zwraca widok i zliczone punkty i dodaje do rankingu nazwe uzytkownika oraz liczbe punktów
    }
    
    public function getRanking()
    {
//        zwraca widok wraz z rankingiem
    }
}
