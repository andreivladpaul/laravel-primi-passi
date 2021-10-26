<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <!---------- BODY -------->
    <body>
        <div class="header">
            <ul class="nav">
                <li><a href="{{route('homepage') }}"> Home</a></li>
                <li><a href="{{route('about') }}"> About</a></li>
                <li><a href="{{route ('contacts') }}"> Contacts</a></li>
            </ul>
        </div>
        <div class="flex-center">

            <div class="content">
                <div class="title ">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsum sequi quibusdam sit tempora placeat nobis illo ea soluta maiores, rerum dolores doloremque eaque iste fugit ut dolor quidem quasi perferendis at nostrum a sint deleniti! Quis provident reiciendis fuga magni, ad aliquid delectus obcaecati. Eligendi non adipisci ex at.</p>
                </div>
            </div>
        </div>
    </body>

</html>
