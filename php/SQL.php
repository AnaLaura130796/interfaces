<?php
define("queryInsert", " 
	INSERT INTO usuarios
	(nombre_usuario, nombres, apaterno, amaterno, password)
	VALUES 
	(:nombre_usuario, :nombres, :apaterno, :amaterno, :password);");
//Conultas para usuarios y el login
//Consultas para traer todos los lugares
//Consultas para traer todos los tipos de comidas
//Consultas para traer todos los actividades
 define("querySelect", "
        SELECT id FROM usuarios WHERE nombre_usuario= :nombre_usuario AND password = :password;
        ");
  ?>