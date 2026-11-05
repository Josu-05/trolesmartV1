TroleSmart V1

Sistema de administración para la gestión de rutas, estaciones, unidades y relaciones operativas del sistema Trolebús, desarrollado con CodeIgniter 4 bajo el patrón de arquitectura MVC (Model - View - Controller).

Integrantes
Josue Martin Villalva Freire
Tecnologías utilizadas
PHP 8.2

CodeIgniter 4

MySQL / TiDB Cloud

HTML5

CSS3

Bootstrap

Docker

Git y GitHub

Render

Arquitectura MVC

El proyecto implementa el patrón MVC:

Modelos

Gestionan el acceso a los datos y la interacción con la base de datos.

Ejemplos:

RutaModel.php

EstacionModel.php

UnidadModel.php

RutaEstacionModel.php

Vistas

Presentan la información al usuario.

Ejemplos:

rutas/index.php

estaciones/index.php

unidades/index.php

Controladores

Procesan las solicitudes y coordinan la comunicación entre modelos y vistas.

Ejemplos:

RutaController.php

EstacionController.php

UnidadController.php

RutaEstacionController.php

Funcionalidades implementadas

Gestión de Estaciones

Permite:

Crear estaciones

Listar estaciones

Editar estaciones

Eliminar estaciones

Datos administrados

Nombre

Ubicación

Gestión de Rutas

Permite:

Crear rutas

Listar rutas

Editar rutas

Eliminar rutas

Datos administrados

Nombre de la ruta

Tiempo estimado

Gestión Ruta - Estación

Permite relacionar estaciones con rutas.

Datos administrados

Ruta

Estación

Orden dentro de la ruta

Gestión de Unidades

Permite administrar las unidades operativas del sistema.

Datos administrados

Código

Placa

Tipo

Capacidad

Estado

Ruta asignada

Estación base

Estación actual

Validaciones Back-End

El sistema implementa validaciones del lado del servidor utilizando CodeIgniter.

Ejemplos:

Validación de campos obligatorios.

Validación de códigos únicos de unidades.

Validación de placas únicas.

Validación de integridad de relaciones entre tablas.

Estas validaciones se ejecutan en el servidor antes de almacenar información en la base de datos.

Relaciones entre tablas

El proyecto utiliza claves foráneas y relaciones entre entidades.

Tablas principales

estaciones

Almacena la información de las estaciones.

rutas

Almacena la información de las rutas.

ruta_estacion

Relaciona rutas con estaciones y controla el orden de recorrido.

unidades

Almacena las unidades operativas asignadas a rutas y estaciones.

Implementación en formularios

Las claves foráneas no son ingresadas manualmente.

Se utilizan listas desplegables (dropdowns) para seleccionar:

Ruta
Estación base
Estación actual

Esto garantiza la integridad referencial de los datos.

Base de Datos

Base de datos desplegada en:

TiDB Cloud

Motor compatible con MySQL utilizado para almacenamiento persistente de la aplicación.

Control de Versiones

El proyecto se encuentra versionado mediante Git.

Repositorio:

Se han realizado commits durante todo el desarrollo para mantener trazabilidad y control de cambios.

Despliegue

La aplicación se encuentra desplegada en la nube mediante Render.

URL pública:

https://trolesmartv1.onrender.com
