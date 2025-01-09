#1ro Crear la BD, y aplicar el conjunto de caracteres para que
# se pueda usar el idoma español (acentos, tildes y la Ñ).
CREATE DATABASE tutorias_lacademia CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

# 2do Crear tabla de Productos.
CREATE CREATE TABLE productos (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(20) NOT NULL,
  precio decimal(10, 2) NOT NULL,
  descripcion text,
  PRIMARY KEY id
);


# 3ro Realizar las consultas.

#Guarda datos en la BD
INSERT INTO productos(nombre,precio,descripcion) VALUES ('papa', 1500, '1kg de papa');

# Lista todos los datos de la BD.
SELECT * FROM productos LIMIT 25;

# Actualiza un Campo en la BD.
UPDATE productos SET nombre = 'Papa' WHERE id = 1;

# Actualiza varios campos de la BD.
UPDATE productos SET nombre = 'Papa', precio = 2000, descripcion = '1kg de papa en bolsa' 
WHERE id = 1;

# Elimina un Registro de la BD.
DELETE FROM productos WHERE id = 1;