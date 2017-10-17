<form action="{{route('post-play-quiz')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" value="{{ $quiz->name}}"
                    name="quiz_name">{{ $quiz->name}}</button>
        </div>
    </div>
</form>


