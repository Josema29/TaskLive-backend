<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
            <h1>TaskLive</h1>
            <pre>
                {
                    POST Login request https://tasklive-backend.herokuapp.com//api/login 
                    {
                        email: " ",
                        password: " "
                    }
                    POST createUser request https://tasklive-backend.herokuapp.com/ 
                    {
                        name:" "|required,
                        email:" "|required,
                        password:" " |confirmationrequired
                    }
                }
            </pre>
    </body>
</html>
