<h1>{{ $question->question}}</h1>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" value="{{ $question->true}}"
                name="quiz_name">{{ $question->true}}</button>
        <button type="submit" class="btn btn-default" value="{{ $question->false1}}"
                name="quiz_name">{{ $question->false1}}</button>
        <button type="submit" class="btn btn-default" value="{{ $question->false2}}"
                name="quiz_name">{{ $question->false2}}</button>
        <button type="submit" class="btn btn-default" value="{{ $question->false3}}"
                name="quiz_name">{{ $question->false3}}</button>
    </div>
</div>
