CREATE TABLE tabla05 (
	id INT(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codigo_producto VARCHAR(20) NOT NULL,
    nombre_producto VARCHAR(120) NOT NULL,
    marca_producto VARCHAR(255) NOT NULL,
    precio_compra DECIMAL(15,2) NOT NULL,
    cantidad_comprada INT(30) NOT NULL    
);