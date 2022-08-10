<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de cria</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>
<body>
    <header>
        <nav>
        <a href="/" > Home </a>
    <a href="/contato" > Contato </a>
    <a href="/cliente" > Cliente </a>
    <a href="/pedido" > Pedido </a>
    <a href="/produto" > Produto </a>
    <a href="/categoria" > Categoria </a>
        </nav>
    </header>


    @yield('content')

    <footer>
    <p>Todos direitos reservados mini d - 2022</p>
<img class="chave" src="{{url('images/chavedms.jpg')}}">

</footer>

</body>


</html>