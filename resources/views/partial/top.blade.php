<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Kahoot!</title>
</head>
<body>

@include('partial.navbar')


@if(!empty($info))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ $info }}
    </div>
@endif