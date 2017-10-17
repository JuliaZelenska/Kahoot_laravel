@extends('layouts.app')

@section('content')

    <div class="btn-group-vertical">
        @each('partial.quizzes', $quizList, 'quiz')
    </div>

@endsection('content')