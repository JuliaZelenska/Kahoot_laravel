<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function postInsert(Request $request)
    {
        $question = $request->input('question');
        $true = $request->input('true');
        $false1 = $request->input('false1');
        $false2 = $request->input('false2');
        $false3 = $request->input('false3');

        $data = [
            'question' => $question,
            'true' => $true,
            'false1' => $false1,
            'false2' => $false2,
            'false3' => $false3
        ];

        $q = new Question($data);
        $q->save();

        return view('create_quiz')->with('info', 'Pytanie ' . $question);
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
            'true' => $true,
            'false1' => $false1,
            'false2' => $false2,
            'false3' => $false3
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
}
