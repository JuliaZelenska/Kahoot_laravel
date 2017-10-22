@extends('layouts.app')

@section('content')

    {{--@each('partial.question', $questions, 'question')--}}
    <button id="btn-next">NEXT Question</button>

    <div id="question-container"></div>

@endsection('content')

@section('javascript')

    <script src="{{ asset('js/ajax.js') }}"></script>


@endsection('javascript')