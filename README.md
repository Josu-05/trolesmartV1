# 🚎 TroleSmart V1

Sistema web de gestión operativa para la administración de rutas, estaciones y unidades del sistema Trolebús.

---

# 📋 Descripción

TroleSmart es una aplicación desarrollada con CodeIgniter 4 y MySQL que permite gestionar la información operativa de una red de transporte público.

La plataforma centraliza la administración de:

- Rutas
- Estaciones
- Relación Ruta-Estación
- Unidades de transporte

Además, permite definir recorridos mediante un orden de paradas y asignar unidades a rutas específicas dentro del sistema.

---

# 🎯 Objetivo

Desarrollar una plataforma administrativa que permita organizar y gestionar la información operativa de una red de transporte público, estableciendo una base sólida para futuras funcionalidades relacionadas con monitoreo, simulación y análisis de flota.

---

# 🛠 Tecnologías Utilizadas

## Backend

- PHP 8+
- CodeIgniter 4

## Base de Datos

- MySQL

## Frontend

- HTML5
- CSS

## Control de Versiones

- Git
- GitHub

---

# 🗄 Modelo de Datos

## Rutas

Representan los recorridos operativos del sistema.

Ejemplos:

- C1 Norte-Sur | El Labrador - El Recreo
- C1 Sur-Norte | El Recreo - El Labrador
- C2 Norte-Sur | El Labrador - Morán Valverde
- C2 Sur-Norte | Morán Valverde - El Labrador
- C3 Norte-Sur | Quitumbe - Colón
- C3 Sur-Norte | Colón - Quitumbe

---

## Estaciones

Representan las paradas de la red de transporte.

El sistema incluye estaciones reales del corredor Trolebús, entre ellas:

- El Labrador
- La Y
- El Recreo
- Morán Valverde
- Quitumbe

---

## Ruta - Estación

Relaciona las estaciones pertenecientes a cada ruta.

Cada relación contiene:

- Ruta
- Estación
- Orden de Parada

Esto permite reconstruir el recorrido completo de una ruta.

---

## Unidades

Representan los vehículos que operan dentro del sistema.

Cada unidad posee:

- Código
- Placa
- Tipo
- Capacidad
- Estado
- Ruta asignada
- Estación base
- Estación actual

---

# ⚙ Funcionalidades Implementadas

## Gestión de Rutas

- Crear rutas
- Editar rutas
- Eliminar rutas
- Listar rutas

---

## Gestión de Estaciones

- Crear estaciones
- Editar estaciones
- Eliminar estaciones
- Listar estaciones

---

## Gestión Ruta-Estación

- Crear asignaciones
- Editar asignaciones
- Eliminar asignaciones
- Gestión del orden de parada
- Visualización completa del recorrido

---

## Gestión de Unidades

- Crear unidades
- Editar unidades
- Eliminar unidades
- Asignar rutas
- Gestionar estaciones base
- Gestionar estaciones actuales
- Gestionar estados operativos

---

# ✅ Validaciones Implementadas

## Rutas

- Nombre obligatorio
- Tiempo estimado obligatorio
- Tiempo estimado mayor a cero

## Estaciones

- Nombre obligatorio
- Ubicación obligatoria

## Ruta-Estación

- Evita duplicar estaciones dentro de una misma ruta
- Orden de parada mayor a cero

## Unidades

- Código único
- Placa única
- Capacidad mayor a cero
- Ruta obligatoria
- Estación base obligatoria
- Estación actual obligatoria

---

# 🚎 Datos de Prueba Incluidos

## Estaciones

Corredor completo desde:

- El Labrador

hasta

- Quitumbe

incluyendo estaciones intermedias reales.

---

## Rutas

- C1 Norte-Sur
- C1 Sur-Norte
- C2 Norte-Sur
- C2 Sur-Norte
- C3 Norte-Sur
- C3 Sur-Norte

---

## Unidades

Flota simulada compuesta por:

- Unidades regulares
- Unidades expresas

Distribuidas entre:

- El Labrador
- El Recreo
- Quitumbe

---

# 🚀 Instalación

## Clonar repositorio

```bash
git clone https://github.com/Josu-05/trolesmartV1.git
```

## Ingresar al proyecto

```bash
cd trolesmartV1
```

## Instalar dependencias

```bash
composer install
```

## Configurar archivo de entorno

Copiar:

```text
env
```

como:

```text
.env
```

y configurar los datos de conexión:

```env
database.default.hostname=
database.default.database=
database.default.username=
database.default.password=
```

## Ejecutar servidor local

```bash
php spark serve
```

## Abrir aplicación

```text
http://localhost:8080
```

---

# 📊 Estado Actual del Proyecto

## Implementado

- CRUD de Rutas
- CRUD de Estaciones
- CRUD de Ruta-Estación
- CRUD de Unidades
- Relaciones mediante claves foráneas
- Orden de paradas
- Validaciones de negocio
- Dashboard principal

---

## Mejoras Futuras

- Interfaz con Bootstrap
- Dashboard analítico
- Simulación de recorridos
- Gestión automática de ubicación de unidades
- Reportes operativos
- Gestión de conductores
- Estadísticas de operación

---

# 👨‍💻 Autor

**Josue Martin Villalva Freire**

Proyecto académico desarrollado utilizando CodeIgniter 4 y MySQL.

---

# 📌 Versión

**TroleSmart V1**
