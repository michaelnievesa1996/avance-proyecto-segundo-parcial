CREATE DATABASE sistema_facturacion;


CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL
);


CREATE TABLE personas (
    cedula VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    correo VARCHAR(150) UNIQUE,
    telefono VARCHAR(20),
    rol VARCHAR(50) NOT NULL,
    direccion VARCHAR(200)
);

CREATE TABLE productos_servicios (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT,
    tipo VARCHAR(20) NOT NULL CHECK (tipo IN ('Producto', 'Servicio')),
    precio DECIMAL(10,2) DEFAULT NULL,
    stock INT DEFAULT NULL,
    estado BOOLEAN DEFAULT TRUE,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO usuarios (usuario, clave)
VALUES (
    'admin',
    '1234'
);

INSERT INTO personas (cedula, nombre, apellido, correo, telefono, rol, direccion) VALUES
('0955907837', 'Michael', 'Nieves', 'michael3n1996@gmail.com', '0991234567', 'Cliente', 'Cuenca, Ecuador'),
('1102345678', 'Andrea', 'Martinez', 'andrea.martinez@gmail.com', '0987654321', 'Empleado', 'Quito, Ecuador'),
('0923456789', 'Carlos', 'Ramirez', 'carlos.ramirez@gmail.com', '0974561230', 'Cliente', 'Guayaquil, Ecuador'),
('0801234567', 'Sofia', 'Vera', 'sofia.vera@gmail.com', '0967890123', 'Empleado', 'Ambato, Ecuador'),
('0709876543', 'Luis', 'Gonzalez', 'luis.gonzalez@gmail.com', '0953216547', 'Proveedor', 'Loja, Ecuador');

INSERT INTO productos_servicios (nombre, descripcion, tipo, precio, stock) VALUES
('Desarrollo de Software a Medida','Desarrollo de sistemas personalizados','Servicio', NULL, NULL),
('Soporte Técnico Empresarial','Soporte técnico según horas trabajadas','Servicio', NULL, NULL),
('Consultoría en Seguridad Informática','Análisis y recomendaciones de seguridad','Servicio', NULL, NULL);


