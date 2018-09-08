<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 52px;
                margin-bottom: 40px;
            }
            a{ font-size: 22px;
               margin-bottom: 40px;
               font-weight: 200;
               font-family: Tahoma;
               
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Proceso No valido<br/>Error 404</div>
                <a href="{{ route('homeCCC')}}">Volver a la Home </a>
            </div>
        </div>
    </body>
</html>
