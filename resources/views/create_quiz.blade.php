@include('partial.top')

@if(!empty($info))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ $info }}
    </div>
@endif

<div class="col-xs-8 col-xs-offset-2">
    <form action="{{route('post-create-next-question')}}" method="post" id="forms">
        <span>Pytanie:</span> <input class="form-control" type="text" name="question" placeholder="question"><br>
        <span>Poprawna odpowiedź:</span><input class="form-control has-success" type="text" name="true"
                                               placeholder="answer1"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false1"
                                             placeholder="answer2"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false2"
                                             placeholder="answer3"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false3"
                                             placeholder="answer4"><br>
        {{csrf_field()}}
        <button class="btn btn-default" type="submit">Następne pynanie</button>
    </form>
    <form action="{{route('post-save-quiz')}}">
        <button class="btn btn-default" type="submit">Zapisz</button>
    </form>
</div>

