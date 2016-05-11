Este proyecto contiene una página web (index.html) que tiene que ser alojada en un Web Server con PHP y MySQL instalados.
- index.html contiene un formulario, donde el usuario ingresa los datos que luego son enviados al servidor a través de un POST request, quien luego disponibiliza estas variables a un archivo (welcome.php).
- welcome.php, contiene el código necesario para conectarse con el servidor MySQL, acceder a una de las bases de datos, luego a una de las tablas y guardar los valores que el usuario ingresó en index.html.


De manera general a través de PHP podemos enviar cualquier tipo de Query a nuestro servidor MySQL.
Para esto necesitamos:
- Dirección IP del Servidor: es saber cual es la dirección ip de nuestro servidor MySQL (el puerto no es encesario).
- Usurio (y contraseña): Un servidor MySQL, tiene registrados varios usuarios (los usuarios los crea el administrador del servidor). Distintos usuarios pueden tener derechos distintos sobre la base. Esto es interesante como una medida de seguridad. Por ejemplo, algunos de los privilegios que un usuario puede tener son CREATE (crear tablas), INSERT (Insertar datos en las tablas), ALTER (alterar la estructura de la tabla), entre otros.
(Opcionales)
- Nombre de la base de datos: Si estamos queriendo acceder a una base de datos que ya existe.
- Nombre de la tabla: Si queremos acceder a una tabla que ya existe.


$servername = "localhost";
$username = "test_user";
$password = "testpass";
$dbname = "tests";

Comando MySQL útiles para testear.
- Crear Base de Datos
CREATE DATABASE nombre_de_la_base;
- Borrar Base de Datos
DROP nombre_de_la_base;
- Ver lista de Bases de datos
SHOW DATABASES
- Elegir base de datos
USE nombre_de_la_base;
