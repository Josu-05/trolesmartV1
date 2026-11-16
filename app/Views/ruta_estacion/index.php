<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignaciones Ruta - Estación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>🔗 Asignaciones Ruta - Estación</h1>

        <div>
            <a href="/" class="btn btn-secondary">
                ← Dashboard
            </a>

            <a href="/ruta-estacion/create" class="btn btn-primary">
                + Nueva Asignación
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

    <div class="card shadow-sm mb-4">

        <div class="card-body">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Ruta</th>
                        <th>Estación</th>
                        <th>Orden</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php foreach($asignaciones as $asignacion): ?>

                    <tr>

                        <td><?= $asignacion['id'] ?></td>

                        <td><?= $asignacion['ruta_nombre'] ?></td>

                        <td><?= $asignacion['estacion_nombre'] ?></td>

                        <td><?= $asignacion['orden'] ?></td>

                        <td>

                            <a href="/ruta-estacion/edit/<?= $asignacion['id'] ?>"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <a href="/ruta-estacion/delete/<?= $asignacion['id'] ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('¿Eliminar asignación?')">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

    <div class="card shadow-sm">

        <div class="card-header">
            <h4 class="mb-0">📍 Resumen de Rutas</h4>
        </div>

        <div class="card-body">

            <?php
            $rutaActual = '';

            foreach($rutaCompleta as $parada):

                if($rutaActual != $parada['ruta_nombre']):

                    if($rutaActual != ''):
                        echo '<hr>';
                    endif;

                    $rutaActual = $parada['ruta_nombre'];
            ?>

                <h5 class="mt-3">
                    <?= $rutaActual ?>
                </h5>

            <?php endif; ?>

                <div>
                    → <?= $parada['orden'] ?>.
                    <?= $parada['estacion_nombre'] ?>
                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>

</body>
</html>
