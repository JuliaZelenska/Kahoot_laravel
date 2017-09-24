@include('partial.top');

@if(!empty($info))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ $info }}
    </div>
@endif

<div class="col-xs-8 col-xs-offset-2">
    <form action="/edit" method="post" id="forms">
        <span>Pytanie:</span> <input class="form-control" type="text" name="question" placeholder="question"
                                     value="{{$question->question}}"><br>
        <span>Poprawna odpowiedź:</span><input class="form-control has-success" type="text" name="true"
                                               placeholder="answer1"
                                               value="{{$question->true}}"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false1"
                                             placeholder="answer2"
                                             value="{{$question->false1}}"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false2"
                                             placeholder="answer3"
                                             value="{{$question->false2}}"><br>
        <span>Błędna odpowiedź:</span><input class="form-control has-error" type="text" name="false3"
                                             placeholder="answer4"
                                             value="{{$question->false3}}"><br>
            <input type="hidden" value="{{$question->id}}" name="id">
        {{csrf_field()}}
        <button class="btn btn-default" type="submit">Zapisz</button>
    </form>
        <form action="/edit" method="get">
            <input type="hidden" value="{{$question->id-1}}" name="id">
            <button class="btn btn-default" type="submit">Poprzednie pynanie</button>
        </form>
        <form action="/edit" method="get">
            <input type="hidden" value="{{$question->id+1}}" name="id">
            <button class="btn btn-default" type="submit">Następne pynanie</button>
        </form>


</div>

</body>
</html>
