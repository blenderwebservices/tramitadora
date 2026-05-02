# Documentación del Proyecto - Tramitadora

## Objetivos del Código: `MySQLiConnection.php`

El archivo `MySQLiConnection.php` define la clase `MySQLiConnection` que sirve como capa de abstracción para la base de datos. Esta clase hereda de una clase genérica `Connection` y su propósito principal es gestionar y optimizar la interacción con bases de datos MySQL/MariaDB utilizando la extensión `mysqli` de PHP.

### Funcionalidades y Objetivos Principales:

1. **Gestión de Conexión y Seguridad:**
   - Establece la conexión al servidor de base de datos (`connect`).
   - Extrae de forma segura los parámetros como host, puerto, usuario, contraseña y base de datos (`assignConnectionParams`).
   - Ofrece soporte explícito para conexiones encriptadas **SSL** de forma nativa.
   - Resuelve problemas de lentitud de conexión en `localhost` por resolución de IPv6, priorizando conexiones a la sesión cacheada o a `127.0.0.1`.

2. **Ajuste de Compatibilidad y Configuración:**
   - Identifica la versión del motor de MySQL/MariaDB.
   - Evalúa si el servidor de base de datos soporta subconsultas y si están optimizadas (`checkDBSubqueriesSupport`, `checkIfJoinSubqueriesOptimized`).
   - Desactiva temporalmente modos de MySQL restrictivos (`STRICT_ALL_TABLES` y `STRICT_TRANS_TABLES`) durante la sesión para evitar errores fatales de código _legacy_ en inserciones o actualizaciones.

3. **Ejecución y Resultados de Consultas:**
   - Expone métodos para realizar sentencias SQL (`query`, `exec`).
   - Incluye funciones adaptadas para manejar guardado de archivos o datos binarios grandes (BLOB) mediante `execWithBlobProcessing`.
   - Recupera IDs de registros recién insertados (`getInsertedId`).
   - Transforma los resultados de la BD a tipos de datos manejables por PHP, como arreglos asociativos o numéricos (`fetch_array`, `fetch_numarray`).

4. **Manejo y Rastreo de Errores (Debugging interno):**
   - Rastrea automáticamente la última sentencia ejecutada (`$this->debugInfo($sql)`).
   - Recoge errores de ejecución directamente desde el driver para ser evaluados (`lastError`).

---

## Cómo Ejecutar la Aplicación en Modo Debug (Terminal)

Como este código está hecho en PHP nativo (o un framework personalizado) y no en Laravel, no puedes utilizar `php artisan serve`. Sin embargo, PHP incorpora su propio servidor web de desarrollo que funciona de la misma manera.

Para levantar el servidor y ver los errores o logs en vivo en la terminal, sigue estos pasos:

1. Abre tu terminal.
2. Navega al directorio raíz de tu proyecto:
   ```bash
   cd /Users/franc/Herd/tramitadora
   ```
3. Ejecuta el servidor web integrado de PHP (puedes elegir el puerto que prefieras, por ejemplo el `8000`):
   ```bash
   php -S localhost:8000
   ```
4. Abre tu navegador web y visita: [http://localhost:8000](http://localhost:8000)

**💡 Notas para el Debugging:**
- Todas las peticiones, errores de sintaxis (Parse error) o advertencias (Warnings) de PHP se imprimirán **directamente en esa ventana de la terminal**, en tiempo real, justo como lo haría artisan.
- El archivo `MySQLiConnection` tiene un método `$this->debugInfo($sql);`. Esto sugiere que puedes activar el "Modo Debug" desde algún archivo de configuración global de tu proyecto para que las consultas a la base de datos se impriman en pantalla o se guarden en un archivo de log.

