<?php
class Conexion{ //Define una clase llamada Conexion.En este caso, la clase Conexion no necesita almacenar ningún atributo porque su único propósito es proporcionar una manera de establecer una conexión a la base de datos y configurar el manejo de errores a través del método estático StartUp.
	public static function StartUp() //Define un método estático llamado StartUp. Este método se encarga de establecer la conexión a la base de datos y configurar el modo de manejo de errores.
	{
		//VARIABLE PDO PARA CONECTARSE
		$pdo = new PDO('mysql:host=localhost;dbname=gestiondomiciliosdv;charset=utf8', 'root', 'NAMJOON'); //Dentro del método StartUp, se crea una instancia de la clase PDO para establecer la conexión con la base de datos MySQL. Aquí se especifica el servidor (localhost), la base de datos (gestiondomiciliosdv), el usuario (root), y la contraseña (en este caso, está en blanco, lo que significa que no se establece una contraseña).

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Esta línea configura el modo de error de PDO. PDO::ERRMODE_EXCEPTION indica que PDO lanzará excepciones en caso de error, lo que facilita la detección y el manejo de errores en la base de datos. NO CONTIENE ATRIBUTOS 
		return $pdo;//El método StartUp devuelve el objeto PDO configurado para la conexión a la base de datos.
	}
}
?>
