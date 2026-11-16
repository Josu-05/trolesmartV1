<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Unidad</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-sm">

        <div class="card-header">
            <h2 class="mb-0">✏️ Editar Unidad</h2>
        </div>

        <div class="card-body">

            <form action="/unidades/update/<?= $unidad['id'] ?>" method="post">

                <div class="mb-3">
                    <label class="form-label">Código</label>

                    <input
                        type="text"
                        name="codigo"
                        value="<?= $unidad['codigo'] ?>"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Placa</label>

                    <input
                        type="text"
                        name="placa"
                        value="<?= $unidad['placa'] ?>"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo</label>

                    <select
                        name="tipo"
                        class="form-select"
                        required>

                        <option
                            value="Regular"
                            <?= ($unidad['tipo'] == 'Regular') ? 'selected' : '' ?>>
                            Regular
                        </option>

                        <option
                            value="Expreso"
                            <?= ($unidad['tipo'] == 'Expreso') ? 'selected' : '' ?>>
                            Expreso
                        </option>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Capacidad</label>

                    <input
                        type="number"
                        name="capacidad"
                        value="<?= $unidad['capacidad'] ?>"
                        class="form-control"
                        min="1"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado</label>

                    <select
                        name="estado"
                        class="form-select"
                        required>

                        <option value="Disponible"
                            <?= ($unidad['estado'] == 'Disponible') ? 'selected' : '' ?>>
                            Disponible
                        </option>

                        <option value="En servicio"
                            <?= ($unidad['estado'] == 'En servicio') ? 'selected' : '' ?>>
                            En servicio
                        </option>

                        <option value="Mantenimiento"
                            <?= ($unidad['estado'] == 'Mantenimiento') ? 'selected' : '' ?>>
                            Mantenimiento
                        </option>

                        <option value="Dañada"
                            <?= ($unidad['estado'] == 'Dañada') ? 'selected' : '' ?>>
                            Dañada
                        </option>

                        <option value="Fuera de servicio"
                            <?= ($unidad['estado'] == 'Fuera de servicio') ? 'selected' : '' ?>>
                            Fuera de servicio
                        </option>

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

                            <option
                                value="<?= $ruta['id'] ?>"
                                <?= ($ruta['id'] == $unidad['ruta_id']) ? 'selected' : '' ?>>
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

                            <option
                                value="<?= $estacion['id'] ?>"
                                <?= ($estacion['id'] == $unidad['estacion_base_id']) ? 'selected' : '' ?>>
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

                            <option
                                value="<?= $estacion['id'] ?>"
                                <?= ($estacion['id'] == $unidad['estacion_actual_id']) ? 'selected' : '' ?>>
                                <?= $estacion['nombre'] ?>
                            </option>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-warning">
                        Actualizar
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
