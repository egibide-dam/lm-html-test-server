<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Visualizador de GET y POST</title>
    <style>
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #eeeeee;
        }
    </style>
</head>
<body>

<main role="main" class="container">
    <h1 class="mt-3 text-bold">Visualizador de GET y POST</h1>
    <hr>
    <div class="row mt-3">
        <div class="col-12 my-auto">
            <h2>$_GET</h2>
        </div>
        <div class="col-12 py-3 my-1 bg-dark rounded">
            <pre class="text-light m-0 p-0"><?php print_r($_GET); ?></pre>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 my-auto">
            <h2>$_POST</h2>
        </div>
        <div class="col-12 py-3 my-1 bg-dark rounded">
            <pre class="text-light m-0 p-0"><?php print_r($_POST); ?></pre>
        </div>
    </div>
    <div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
            <img alt="Licencia de Creative Commons" style="border-width:0"
                 src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>
        </a>
        <span class="text-muted ml-2">Esta web está bajo <a rel="license"
                                                            target="_blank"
                                                            href="http://creativecommons.org/licenses/by/4.0/">licencia CC BY 4.0</a>.</span>
    </div>
</footer>

</body>
</html>
