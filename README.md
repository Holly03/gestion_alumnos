PROYECTO CREACIÓN APLIACIÓN ALUMNOS

BASE DE DATOS

Para la creación de la aplicación para la gestión de alumnos, se crea la base de datos. Para ello se descarga e instala XAMPP. Se inicia la base de datos de MySQL haciendo click en Start en la opción de MySQL. Así pues, para la configuración y creación de la base de datos se hace click en Admin. Esto abre una pestaña en el navegador correspondiente a phpMyAdmin dónde, para crear la base de datos se hace click en el menú lateral en Nueva, se asigna un nombre (en este caso, alumnos) y se hace click en crear. Seguidamente, se crean las tablas con los datos que se quieren almacenar (en este caso nombre, teléfono y correo electrónico).

EXTENSIONES Y LIBRERÍAS

En lo referente al proyecto, se emplea el IDE Visual Studio Code donde se tienen instaladas las extensiones PHP Debug, PHP Extension Pack, PHP Intelephense, PHP IntelliSense, PHP Server.

FUNCIONAMIENTO Y EJECUCIÓN

En lo referente al código: 
•	Alumnos.php: este script recoge la parte visual de la aplicación. 
•	Conexión.php: este script establece la conexión con la base de datos.
•	Listar.php: en este script se establece la lógica para mostrar los datos almacenados.
•	Registrar.php: en este script se establece la lógica para registrar los datos de un alumno.
•	En la carpeta js, el archivo Alumnos.js recoge las funciones de los botones asociadas a los archivos php Listar y Registrar. Además, muestra los mensajes de alerta, así como, es dónde se establecen las validaciones para el correo, nombre y teléfono.

Para ejecutar el proyecto, en el script Alumnos.php se hace click derecho y se hace click en PHP Server: Serve Project.

