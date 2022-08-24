<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>

    <title>Restaurante na Web</title>
  </head>

  <body class="bg-light">

    <div class="container">

      @yield('content')

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; {{ now()->year }} - Lucas Campos</p>
      </footer>
    </div>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.min.js"></script>
    <script src="assets/js/jquery.serializeObject.min.js"></script>
  </body>
</html>
