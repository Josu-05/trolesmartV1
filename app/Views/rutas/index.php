<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Rutas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>🛣️ Listado de Rutas</h1>

        <div>
            <a href="/" class="btn btn-secondary">
                ← Dashboard
            </a>

            <a href="/rutas/create" class="btn btn-primary">
                + Nueva Ruta
            </a>
        </div>

    </div>

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

        <div class="card-body">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tiempo Estimado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($rutas as $ruta): ?>

                    <tr>

                        <td><?= $ruta['id'] ?></td>

                        <td><?= $ruta['nombre'] ?></td>

                        <td><?= $ruta['tiempo_estimado'] ?> min</td>

                        <td>

                            <a href="/rutas/edit/<?= $ruta['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="/rutas/delete/<?= $ruta['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Eliminar ruta?')">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
