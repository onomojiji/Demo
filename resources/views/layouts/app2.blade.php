<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
         crossorigin="anonymous">
        <title>App - @yield('title')</title>
        @yield('styleCSS')
    </head>

    <body>

        {{-- La ligne cidessous permet d'executer une partie du script qui
        se touve dans un autre fichier --}}

        @include('layouts.navbar')


        @yield('content')



    </body>
    <footer>
        <?print "jiji.dev &copy 2018-".date('Y');?>
    </footer>

</html>

{{-- En gros cette page est le squellette de toutes mes autres pages... --}}
