@extends('layouts.app')

@section('content')

    <div class="col-xs-8 col-xs-offset-2">
        <form action="{{route('post-create-next-question')}}" method="post" id="send_question">
            <span>Nazwa quizu:</span>
            <span class="badge">{{ $quizName }}</span><br>

            <span>Pytanie:</span>
            <input class="form-control" type="text" name="question" placeholder="question" required><br>

            <span>Poprawna odpowiedź:</span>
            <input class="form-control has-success" type="text" name="true" placeholder="answer1" required><br>

            <span>Błędna odpowiedź:</span>
            <input class="form-control has-error" type="text" name="false1" placeholder="answer2" required><br>

            <span>Błędna odpowiedź:</span>
            <input class="form-control has-error" type="text" name="false2" placeholder="answer3" required><br>

            <span>Błędna odpowiedź:</span>
            <input class="form-control has-error" type="text" name="false3" placeholder="answer4" required><br>

            {{csrf_field()}}
            <input type="checkbox" name="last_question" value="true" title="last_question"
                   id="checkbox_last_question" class="hidden"><br>
            <button class="btn btn-default" type="submit">Następne pynanie</button>
            <button class="btn btn-default" onclick="finishQuiz()">Zapisz</button>
        </form>
    </div>

@endsection('content')

@section('javascript')
    <script type="text/javascript" src="{{ URL::asset('js/create_quiz.js') }}"></script>
@endsection('javascript')