<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Excursões</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header"><a class="navbar-brand" href="#">NOME EMPRESA</a>
             <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </a>
        </div>
        <div class="navbar-collapse collapse">
             <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Clientes</a></li>
                      <li><a href="#">Excursões</a></li>
                      <li><a href="#">Ônibus</a></li>
                      <li><a href="#">Empresas</a></li>
                      <li><a href="#">Hospedaria</a></li>
                    </ul>
                  </li>
               <li><a href="#">Cadastros</a></li>
               <li><a href="#">Vendas</a></li>
               <li><a href="#">outros</a></li>
             </ul>
        </div>
    </div>
    <div class="contect container">
        <div class="col-md-10 col-md-offset-1">
            @yield('conteudo')
        </div>
    </div>
</body>

<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script src="{{asset('site/bootstrap.js')}}"></script>
</html>