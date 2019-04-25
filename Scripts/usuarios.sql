CREATE TABLE usuarios (
	id INT(30) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_usuario VARCHAR(120) NOT NULL,
    contraseña_usuario VARCHAR(255) NOT NULL,
    estado_usuario TINYINT(1) NOT NULL DEFAULT 1
);



