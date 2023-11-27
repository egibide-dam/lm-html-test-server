<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN">
    <title>Visualizador de peticiones HTTP</title>
    <style>
        html,
        body {
            height: 100%;
        }

        #page-content {
            flex: 1 0 auto;
        }

        #sticky-footer {
            flex-shrink: 0;
        }
    </style>
</head>
<body class="d-flex flex-column">

<div id="page-content">
    <main class="container">
        <h1 class="mt-3 display-4">Visualizador de peticiones HTTP</h1>
        <hr>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">GET</h5>
                    <div class="card-body">
                        <pre class="text-primary m-0 p-0"><?php echo(!empty($_GET) ? print_r($_GET, true) : 'No hay datos.') ?></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">POST</h5>
                    <div class="card-body">
                        <pre class="text-primary m-0 p-0"><?php echo(!empty($_POST) ? print_r($_POST, true) : 'No hay datos.') ?></pre>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- REF: https://startbootstrap.com/snippets/sticky-footer-flexbox -->
<footer id="sticky-footer" class="mt-5 py-4 bg-light">
    <div class="container text-center">
        <a rel="license" href="https://creativecommons.org/licenses/by/4.0/deed.es_ES">
            <img alt="Licencia de Creative Commons" style="border-width:0"
                 src="by.svg"/></a>
        <small class="text-muted ms-2">Esta web está bajo <a rel="license"
                                                             target="_blank"
                                                             href="https://creativecommons.org/licenses/by/4.0/deed.es_ES">licencia
                CC BY 4.0</a>.</small>
    </div>
</footer>

<script src="bootstrap/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"></script>
</body>
</html>
