<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body >
        <div class="row" style="padding: 10px">
            <div class="col-lg-4 col-sm-8" style="margin:auto; text-align: center;
                                    border:1px solid #dfe1e5; border-radius: 2px">
                <img class="" src="{{$image}}" style="max-width: 100px;height: auto;">
                <div>
                    <p style="font-size: 0.857rem; text-align: right">{{$name}}</p>
                    <p style="font-size: 1rem; text-align: right">قیمت: {{$price}} تومان </p>
                </div>
            </div>

        </div>
    </body>
</html>
