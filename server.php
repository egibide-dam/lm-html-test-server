<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                 src="by.svg"/>
        </a>
        <small class="text-muted ml-2">Esta web está bajo <a rel="license"
                                                             target="_blank"
                                                             href="https://creativecommons.org/licenses/by/4.0/deed.es_ES">licencia
                CC BY 4.0</a>.</small>
    </div>
</footer>

</body>
</html>
