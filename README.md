### Konecta - Inventario

- Primero se debe importar la base de datos que se encuentra en la siguiente ruta:
 > directorio_principal/sql/inventory.sql
- Configurar las varibles globales (host, port, directorio_principal) del servidor, en la siguiente ruta:
> directorio_principal/config/constants.php
```php
<?php
	const PATH_LOCAL = "http://localhost:port/directorio_principal/";
?>
```
- Configurar las variables de conexión a la base de datos (host, user, password, database name), en la siguiente ruta:
> directorio_principal/src/private/model/connection.php
```php
<?php
	private $host ="localhost"; // Host
	private $user="root"; // Database user
	private $pass=''; // Password database user
	private $dbName="inventory"; // Database name
?>
```
- Se debe configurar el php.init para el buen funcionanmiento del proyecto, se debe cambiar la siguiente opción `allow_url_include=Off` a `allow_url_include=On`
- Por último reiniciar el servidor de PHP y luego desde un navegador ingresar a la página configurada http://localhost:port/directorio_principal/
- la cónsulta que indica cuál es el producto con el stock más alto y la consulta que indica cuál es el producto más vendido se encuentran en la carpeta sql que se encuentra en el directorio principal
