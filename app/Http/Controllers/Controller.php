<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function insert(Request $request)
    {


        $question = $request->input('question');
        $true = $request->input('true');
        $false1 = $request->input('false1');
        $false2 = $request->input('false2');
        $false3 = $request->input('false3');

        $data = array('question' => $question, 'true' => $true, 'false1' => $false1, 'false2' => $false2, 'false3' => $false3);

        DB::table('questions')->insert($data);


        return view('create_quiz')->with('info', 'Pytanie ' . $question);

    }
}
