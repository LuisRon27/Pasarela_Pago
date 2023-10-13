CREATE DATABASE Servicios;

USE Servicios;

-- Crear la tabla servicio
CREATE TABLE servicio (
    IDServicio INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255),
    Descripcion TEXT,
    Precio FLOAT
);

-- Crear la tabla cliente
CREATE TABLE cliente (
    IDCliente INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255),
    Apellido VARCHAR(255),
    Telefono VARCHAR(20),
    Email VARCHAR(255)
);

-- Crear la tabla trabajo
CREATE TABLE trabajo (
    IDTrabajo INT PRIMARY KEY AUTO_INCREMENT,
    IDCliente INT,
    IDServicio INT,
    FechaInicio DATE DEFAULT CURRENT_DATE,
    FechaFin DATE NULL,
    Estado VARCHAR(20) DEFAULT 'Por Iniciar',
    FOREIGN KEY (IDCliente) REFERENCES cliente(IDCliente) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (IDServicio) REFERENCES servicio(IDServicio)
);

-- Crear la tabla pago
CREATE TABLE pago (
    IDPago INT PRIMARY KEY AUTO_INCREMENT,
    IDTrabajo INT,
    Monto FLOAT,
    FechaPago DATE DEFAULT CURRENT_DATE,
    MetodoPago VARCHAR(255) DEFAULT 'Tarjeta',
    FOREIGN KEY (IDTrabajo) REFERENCES trabajo(IDTrabajo) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Inserciones en la tabla servicio
INSERT INTO servicio (Nombre, Descripcion, Precio)
VALUES
    ('Aplicación Web', 'Desarrollo de aplicaciones web', 200.00),
    ('Aplicación Móvil', 'Desarrollo de aplicaciones móviles', 300.00),
    ('Aplicación de Escritorio', 'Desarrollo de aplicaciones de escritorio', 250.00);
    
-- Inserciones en la tabla cliente
INSERT INTO cliente (Nombre, Apellido, Telefono, Email)
VALUES
    ('Juan', 'Pérez', '123-456-7890', 'juanperez@email.com'),
    ('Ana', 'Gómez', '987-654-3210', 'anagomez@email.com'),
    ('Luis', 'Martínez', '555-123-4567', 'luismartinez@email.com'),
    ('María', 'Rodríguez', '777-888-9999', 'mariarodriguez@email.com'),
    ('Pedro', 'Sánchez', '111-222-3333', 'pedrosanchez@email.com');

-- Inserciones en la tabla trabajo
INSERT INTO trabajo (IDCliente, IDServicio, FechaInicio, FechaFin, Estado)
VALUES
    (1, 1, '2023-01-15', '2023-02-10', 'Completado'),
    (2, 2, '2023-02-05', '2023-03-20', 'En Progreso'),
    (3, 3, '2023-03-10', '2023-04-05', 'Completado'),
    (4, 1, '2023-04-01', '2023-04-30', 'En Progreso'),
    (5, 2, '2023-05-15', '2023-06-10', 'Completado');

-- Inserciones en la tabla pago
INSERT INTO pago (IDTrabajo, Monto, FechaPago, MetodoPago)
VALUES
    (1, 500, '2023-02-12', 'Tarjeta de Crédito'),
    (2, 300, '2023-03-10', 'Transferencia Bancaria'),
    (3, 450, '2023-04-20', 'PayPal'),
    (4, 250, '2023-04-25', 'Efectivo'),
    (5, 400, '2023-06-05', 'Tarjeta de Débito');
