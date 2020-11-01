<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-with, initial-scale=1, shrink-to-fit=no">
    <title>@yield('titulo-pagina')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="jumbotrom.css">

  </head>
  <body>
    @yield('header')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="inicio">MG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="#navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"></button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="a">Futebol</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link desable" href="b">Carros</a>
                    
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link desable" href="c">Battle Royal</a>
                    
                </li>

            </ul>
        </div>
        
    </nav>
    <main role="main">
        
       
        @yield('conteudo')
        <br>


    <footer class="container"><p>&copy;Companhia 12ºI2 2020-2021</p></footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </main>
  </body>
</html>
