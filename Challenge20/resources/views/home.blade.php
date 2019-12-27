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

    <div class="container-fluid">
        <div class="row">
            <h1 class="text-uppercase text-center">business casual</h1>
            <ul class="list">
                <li><a href="{{URL::to('/home')}}" class="text-uppercase">home</a></li>
                <li><a href="{{URL::to('/login')}}" class="text-uppercase">log in</a></li>
                <li><a href="{{URL::to('/login')}}" style="display: none;" class="text-uppercase">log out</a></li>
                @if($name && $lastName)
                <li><a href="{{session()->flush()}}" class="text-uppercase">log out</a></li>
                @endif

            </ul>
            <div class="col-md-6 col-md-offset-2" style="margin-top:8%;">
                <div class="text-box">
                    <p class="text-uppercase text-center">lorem ipsum</p>
                    <h3 class="text-uppercase text-center">lorem ipsum</h3>
                    <p class="text-center">Enim sunt aliquip ullamco laborum ad laboris non aliqua mollit consequat. <br>
                        Sunt quis laboris quis tempor reprehendrit nulla irure labore irure aute <br>
                        ipsum incididunt nostrud laborum. Consequat enim ex non velit veniam <br>
                        excepteur nisi sunt et.</p>
                        <div class="text-center">
                            <button class="btn btn-style">Visit us today</button>
                        </div>
                    </div>
                <div>
            </div>
                <img src="/img/cafe.jpg" alt="cafe" class="img-responsive">
            </div>
        </div>
            <div class="row" style="margin-top:3%;background-color: #ed9902; padding:30px 350px;">
                <div class="result text-center">
                    <p class="text-uppercase">our promise</p>
                    @if($name && $lastName)
                    <h3 class="text-uppercase">to {{$name}} {{$lastName}}</h3>
                    @else
                    <h3 class="text-uppercase">to you</h3>
                    @endif
                    <p>Irure reprehendrit magna aliquip nisi ex pariatur. Magna aliquip dolore deserunt pariatur anim. Ex excepteur officia veniam commodo culps aute in esse. Dolore ea nisi nostrud <br>
                        do culpa. Irure commodo cupidatat tempor esse aliquip eiusmod excepteur nulla ut duis do aliquip et. Incididunt magna elit reprehendrit do culpa aliquip. Id proident ex eu <br>
                        quis aliqua elit cilum consecetetr ut enim. Non aute consectetur exercitation occaecat reprehendrit adipisicing consequat laborum commodo et. Aliqua duis officia eiusmod <br>
                        voluptate eu occaecat aliquip eu.</p>
                </div>
            </div>
    </div>
    <div class="container-fluid background-1">
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
