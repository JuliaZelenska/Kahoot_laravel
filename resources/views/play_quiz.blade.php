@extends('layouts.app')

@section('content')

    @each('partial.question', $questions, 'question')
    <button id="btntest">test</button>
@endsection('content')

@section('javascript')

    <script src="{{ asset('js/ajax.js') }}"></script>


@endsection('javascript')