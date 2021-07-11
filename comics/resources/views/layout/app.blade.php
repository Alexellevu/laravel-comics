

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC @yield('title','Comics')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="">
    
        @yield('css')
        @yield('js')
    </head>

    <style>
        body{
            background-color: cyan;
        }
    </style>
    <body>
       
        @include('partials.header')
       

       <main id="site_main">
       @yield('content')
       </main>

        <footer id="site_footer">
                footer content
        </footer>
    </body>
</html>




