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
                    <h3>Contacts</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, cum. Voluptates quam voluptatum necessitatibus modi alias ad quis incidunt distinctio.</p>
                </div>
            </div>
        </div>
    </body>

</html>
