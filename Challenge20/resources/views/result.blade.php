<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge 20</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid background">
        <div class="row">
            <h1 class=" text-center text-uppercase">business casual</h1>
            <ul class="list">
                <li><a href="{{URL::to('/home')}}" class="text-uppercase">home</a></li>
                <li><a href="{{URL::to('/login')}}" disabled class="text-uppercase">log in</a></li>
                <li><a href="{{URL::to('/login')}}" class="text-uppercase">log out</a></li>
            </ul>
            <div class="output col-md-6 col-md-offset-2" style="padding-top:7%">
                <p>Your name is: {{$name}}</p>
                <p>Your last name is: {{$lastName}}</p>
                @if(!empty($email))
                <p>Your email is: {{$email}}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid background-1" style="margin-top:20.2%";>
        <div class="row">
            <p class="text-center">Copyright &copy; Your Website 2018</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>


</body>
</html>
