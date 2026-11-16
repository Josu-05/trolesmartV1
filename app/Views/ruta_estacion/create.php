<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignar Estación a Ruta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">

        <div class="card-header">
            <h2 class="mb-0">🔗 Asignar Estación a Ruta</h2>
        </div>

        <div class="card-body">

            <form action="/ruta-estacion/store" method="post">

                <div class="mb-3">

                    <label class="form-label">
                        Ruta
                    </label>

                    <select
                        name="ruta_id"
                        class="form-select"
                        required>

                        <?php foreach($rutas as $ruta): ?>

                            <option value="<?= $ruta['id'] ?>">
                                <?= $ruta['nombre'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Estación
                    </label>

                    <select
                        name="estacion_id"
                        class="form-select"
                        required>

                        <?php foreach($estaciones as $estacion): ?>

                            <option value="<?= $estacion['id'] ?>">
                                <?= $estacion['nombre'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Orden de Parada
                    </label>

                    <input
                        type="number"
                        name="orden"
                        min="1"
                        class="form-control"
                        required>

                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Guardar
                    </button>

                    <a href="/ruta-estacion"
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
