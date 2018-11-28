<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Visualizador de GET y POST</title>
</head>
<body>

<div class="container">
    <div class="row mt-3">
        <div class="col-12 my-auto">
            <h1>$_GET</h1>
        </div>
        <div class="col-12 py-3 my-1 bg-dark">
            <code class="text-light"><?php print_r($_GET); ?></code>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 my-auto">
            <h1>$_POST</h1>
        </div>
        <div class="col-12 py-3 my-1 bg-dark">
            <code class="text-light"><?php print_r($_POST); ?></code>
        </div>
    </div>
</div>

</body>
</html>
