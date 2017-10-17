@extends('layouts.app')

@section('content')

    @each('partial.question', $questions, 'question')

@endsection('content')