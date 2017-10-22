<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--jquerry--}}
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<canvas id="c"></canvas>
<div>
    @include('partial.top')
    <div class="content">
        @yield('content')

    </div>

</div>

<!-- JavaScript -->
@yield('javascript')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
