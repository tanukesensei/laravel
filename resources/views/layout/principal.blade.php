<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Controle de estoque</title>
  </head>
  <body>
    <div class="container">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="/produtos">
            Estoque Laravel
          </a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="{{action('ProdutoController@lista')}}">
              Listagem
            </a>
          </li>
          <li>
            <a href="{{action('ProdutoController@novo')}}">
              Novo
            </a>
          </li>
        </ul>

      </div>
    </nav>

      @yield('conteudo')

    <footer class="footer">
        <p>© Livro de Laravel da Casa do Código.</p>
    </footer>

    </div>
  </body>
</html>
