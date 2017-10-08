@extends('layouts.app')

@section('content')
    <form action="{{route('post-create-quiz-name')}}" method="post" role="form">
        <legend>Nazwa Quizu</legend>

        <div class="form-group">
            <label for="quiz-name">Nazwa Quizu</label>
            <input type="text" class="form-control" name="quiz-name" placeholder="Nazwa Quizu" required>
        </div>
        <button type="submit" class="btn btn-primary">Utwórz</button>
        {{csrf_field()}}
    </form>

@endsection('content')