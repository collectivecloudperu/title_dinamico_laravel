<!DOCTYPE html>
 
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <title>{!!$title_page!!} - Collective Cloud Perú</title>

    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>

</head>
    <body>

        <div class="container">

           <!-- Static navbar -->
           <nav class="navbar navbar-default">
             <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Collective Cloud Perú</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::is('/*')  ? 'active' : '' }}">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="{{ Request::is('nosotros*')  ? 'active' : '' }}">
                        <a href="{{ url('nosotros') }}">¿Quienes Somos?</a>
                    </li>
                    <li class="{{ Request::is('contacto*')  ? 'active' : '' }}">
                        <a href="{{ url('contacto') }}">Contacto</a>
                    </li>                  
                </ul>
              </div><!--/.nav-collapse -->
             </div><!--/.container-fluid -->
           </nav> 

            
            <div class="row">
                

            </div>


            <br><br><br>


            @yield('content')


            <footer align="center">                     
                Desarrollado por <a href="http://www.collectivecloudperu.com" target="_blank">Collective Cloud Perú</a>
            </footer>

        </div>

    </body>
</html>