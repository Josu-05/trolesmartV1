<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TroleSmart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="text-center mb-5">
        <h1>🚎 TroleSmart</h1>

        <p class="text-muted">
            Sistema de Gestión Operativa del Trolebús
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🛣️ Gestión de Rutas</h5>

                    <a href="/rutas" class="btn btn-primary">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🚏 Gestión de Estaciones</h5>

                    <a href="/estaciones" class="btn btn-success">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🔗 Asignación Ruta - Estación</h5>

                    <a href="/ruta-estacion" class="btn btn-warning">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">🚌 Gestión de Unidades</h5>

                    <a href="/unidades" class="btn btn-danger">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>

    </div>

    <hr class="my-5">

    <div class="text-center text-muted">
        <p>
            Total de módulos implementados:
            Rutas, Estaciones, Ruta-Estación y Unidades.
        </p>
    </div>

</div>

</body>
</html>
