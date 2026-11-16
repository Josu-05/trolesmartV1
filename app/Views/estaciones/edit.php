<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Estación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-sm">

        <div class="card-header">
            <h2 class="mb-0">✏️ Editar Estación</h2>
        </div>

        <div class="card-body">

            <form action="/estaciones/update/<?= $estacion['id'] ?>" method="post">

                <div class="mb-3">

                    <label class="form-label">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        value="<?= $estacion['nombre'] ?>"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Ubicación
                    </label>

                    <input
                        type="text"
                        name="ubicacion"
                        value="<?= $estacion['ubicacion'] ?>"
                        class="form-control"
                        required>

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-warning">
                        Actualizar
                    </button>

                    <a href="/estaciones"
                       class="btn btn-secondary">
                        ← Volver al Listado
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>
