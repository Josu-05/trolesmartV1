<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Estaciones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>🚏 Listado de Estaciones</h1>

        <div>
            <a href="/" class="btn btn-secondary">
                ← Dashboard
            </a>

            <a href="/estaciones/create" class="btn btn-success">
                + Nueva Estación
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
                        <th>Ubicación</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($estaciones as $estacion): ?>

                    <tr>

                        <td><?= $estacion['id'] ?></td>

                        <td><?= $estacion['nombre'] ?></td>

                        <td><?= $estacion['ubicacion'] ?></td>

                        <td>

                            <a href="/estaciones/edit/<?= $estacion['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="/estaciones/delete/<?= $estacion['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Eliminar estación?')">
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
