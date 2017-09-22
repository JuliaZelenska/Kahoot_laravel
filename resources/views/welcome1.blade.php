<!DOCTYPE html>
<html>
<head>

    {{--@include('partial\top');--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--}}
    {{--integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    <title>Kahoot!</title>
</head>
<body>

<div class="navbar">
    <span><a href="logowanie.php">Already got an account?</a></span>
    <button class="btn btn-default"><a href="rejestracja.php">Sing in</a></button>
</div>

<div class="using">

    <p class="moto">I want to use Kahoot!</p>
    <button class="btn btn-default " id="override1">As a <br/><b>Teacher</b></button>
    <button class="btn btn-default student" id="override2">As a <br/><b>Student</b></button>
    <br/>
    <button class="btn btn-default socially" id="override3"><b>Socially</b></button>
    <button class="btn btn-default work" id="override4">At <br/><b>Work</b></button>


</div>

</body>
</html>

