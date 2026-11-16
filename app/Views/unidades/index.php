<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Unidades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>🚌 Listado de Unidades</h1>

        <div>

            <a href="/" class="btn btn-secondary">
                ← Dashboard
            </a>

            <a href="/unidades/create" class="btn btn-primary">
                + Nueva Unidad
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
                        <th>Código</th>
                        <th>Placa</th>
                        <th>Tipo</th>
                        <th>Capacidad</th>
                        <th>Estado</th>
                        <th>Ruta</th>
                        <th>Estación Base</th>
                        <th>Estación Actual</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($unidades as $unidad): ?>

                    <tr>

                        <td><?= $unidad['id'] ?></td>

                        <td><?= $unidad['codigo'] ?></td>

                        <td><?= $unidad['placa'] ?></td>

                        <td><?= $unidad['tipo'] ?></td>

                        <td><?= $unidad['capacidad'] ?></td>

                        <td><?= $unidad['estado'] ?></td>

                        <td><?= $unidad['ruta_nombre'] ?></td>

                        <td><?= $unidad['estacion_base_nombre'] ?></td>

                        <td><?= $unidad['estacion_actual_nombre'] ?></td>

                        <td>

                            <a href="/unidades/edit/<?= $unidad['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="/unidades/delete/<?= $unidad['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Eliminar unidad?')">
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
