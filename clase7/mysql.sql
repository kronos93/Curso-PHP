#Conectarse a mysql 
mysql -u root -p;
#Desconectar de mysql
quit
exit;
#Saber version de mysql
SELECT VERSION();
#Ver la fecha actual
SELECT CURRENT_DATE();
#ver la fecha y hora actual
SELECT NOW();
#Ver usuario actual
SELECT USER();
#Ver bases de datos
SHOW DATABASES;
#Eliminar bases de datos
DROP DATABASE [nombre_bd];
#crear base de datos
CREATE DATABASE [nombre_bd]

#accesar base de datos
USE [nombre_b]
#mostrar las tablas de una base de datos
SHOW TABLES;
#Crear una table
CREATE TABLE productos (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
    talla VARCHAR(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
    precio INT(11) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
#ver detalles de una tabla
DESCRIBE [nombre_tabla]
#Eliminar una tabla
DROP TABLE [nombre_tabla]
#insertar registros en una tabla
INSERT INTO productos VALUES (null, 'Camisa CSS', 'L',1000);
INSERT INTO productos VALUES (null, 'Camisa PHP', 'XL',100),
                             (null, 'Camisa JS', 'C',200),
                             (null, 'Camisa HTML', 'M',200);
#Seleccionar todos los atributos de una tabla
SELECT * FROM productos;
#Seleccionar atributos especificos de una tabla
SELECT nombre, precio FROM productos;
#Seleccionar datos con condición
SELECT nombre, precio FROM productos WHERE precio = 200;
#Editar un registro
UPDATE productos SET precio = 150 WHERE id = 1;
#Ordenar registros
SELECT nombre,precio FROM productos ORDER BY precio ASC;
SELECT nombre,precio FROM productos ORDER BY nombre ASC;

#Nombre que termina con la letra S
SELECT nombre,precio FROM productos WHERE nombre LIKE '%s';
SELECT nombre,precio FROM productos WHERE nombre LIKE '%s' AND precio < 200;
#Eliminar registros
#Nunca olvida el where
DELETE FROM productos WHERE id = 3; SELECT * FROM productos;
