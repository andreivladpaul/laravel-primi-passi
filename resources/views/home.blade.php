<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>First Laravel Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,600" rel="stylesheet">

        <!-- Style -->
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
                    <h1>First Project With Laravel</h1>
                </div>
            </div>
        </div>
    </body>

</html>
