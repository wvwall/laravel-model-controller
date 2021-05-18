<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>db_movies</title>
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">   

        
    </head>
    <body>
        <main>
            @yield("main")
        </main>
    </body>
</html>
