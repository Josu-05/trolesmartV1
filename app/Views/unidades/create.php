<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Unidad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">

        <div class="card-header">
            <h2 class="mb-0">🚌 Nueva Unidad</h2>
        </div>

        <div class="card-body">

            <form action="/unidades/store" method="post">

                <div class="mb-3">
                    <label class="form-label">Código</label>

                    <input
                        type="text"
                        name="codigo"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Placa</label>

                    <input
                        type="text"
                        name="placa"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo</label>

                    <select
                        name="tipo"
                        class="form-select"
                        required>

                        <option value="Regular">
                            Regular
                        </option>

                        <option value="Expreso">
                            Expreso
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Capacidad</label>

                    <input
                        type="number"
                        name="capacidad"
                        min="1"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado</label>

                    <select
                        name="estado"
                        class="form-select"
                        required>

                        <option value="Disponible">Disponible</option>
                        <option value="En servicio">En servicio</option>
                        <option value="Mantenimiento">Mantenimiento</option>
                        <option value="Dañada">Dañada</option>
                        <option value="Fuera de servicio">Fuera de servicio</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Ruta Asignada
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
                        Estación Base
                    </label>

                    <select
                        name="estacion_base_id"
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
                        Estación Actual
                    </label>

                    <select
                        name="estacion_actual_id"
                        class="form-select"
                        required>

                        <?php foreach($estaciones as $estacion): ?>

                            <option value="<?= $estacion['id'] ?>">
                                <?= $estacion['nombre'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Guardar
                    </button>

                    <a href="/unidades"
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
