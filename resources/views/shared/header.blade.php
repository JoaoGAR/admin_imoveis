<!DOCTYPE html>
<html>
<head>
  <title>ADMIN - Imovel</title>

  <link rel="stylesheet" id="bootstrap_css" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('/imoveis') }}">Listar imóveis</a></li>
        <li><a href="{{ route('/imoveis/cadastrar_imovel') }}">Cadastrar imóvel</a></li>
      </ul>
    </div>
  </nav>