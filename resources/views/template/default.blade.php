<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de cria</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pedido">Pedido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produto">Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categoria">Categoria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>


    @yield('content')

    <footer>
    
        <img class="chave1" src="{{url('images/chavedms.jpg')}}">
        <img src="{{url('images/chavedms.jpg')}}" class="img-fluid" alt="...">

        <div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Todos direitos reservados Marcus, Diego e Diegão - 2022
      </p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>

    </footer>

</body>


</html>
