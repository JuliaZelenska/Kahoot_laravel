@extends('layouts.app')

@section('content')

    <div class="btn-group">
        <a href="{{route('create-quiz-name')}}" class="btn btn-primary">Create quiz</a>
        <a href="{{route('quiz-list')}}" class="btn btn-danger">Play quiz</a>
    </div>

@endsection('content')