USE fruteria;

-- Tabla: categorias
CREATE TABLE categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT
);

-- Tabla: productos
CREATE TABLE productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(150) NOT NULL,
    categoria_id INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    activo BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

-- Tabla: clientes
CREATE TABLE clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla: pedidos
CREATE TABLE pedidos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2) NOT NULL,
    estado ENUM('pendiente', 'procesado', 'enviado', 'entregado') DEFAULT 'pendiente',
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);

-- Tabla: detalles_pedido
CREATE TABLE detalles_pedido (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pedido_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

-- Datos iniciales: Categorías
INSERT INTO categorias (nombre, descripcion) VALUES
('Cítricos', 'Naranjas, limones, pomelos y mandarinas'),
('Frutas Rojas', 'Fresas, frambuesas y arándanos'),
('Tropicales', 'Piñas, mangos y plátanos');

-- Datos iniciales: Productos
INSERT INTO productos (nombre, categoria_id, precio, stock) VALUES
('Naranjas', 1, 2.50, 100),
('Limones', 1, 2.00, 80),
('Pomelos', 1, 3.00, 50),
('Mandarinas', 1, 2.75, 60),
('Fresas', 2, 4.50, 40),
('Frambuesas', 2, 5.00, 30),
('Arándanos', 2, 5.50, 25),
('Piña', 3, 3.50, 45),
('Mango', 3, 4.00, 55),
('Plátano', 3, 1.50, 120);

-- Datos iniciales: Clientes
INSERT INTO clientes (nombre, email) VALUES
('Juan García', 'juan@example.com'),
('María López', 'maria@example.com'),
('Carlos Martínez', 'carlos@example.com');

-- Datos iniciales: Pedidos de ejemplo
INSERT INTO pedidos (cliente_id, total, estado) VALUES
(1, 25.00, 'entregado'),
(2, 15.50, 'procesado'),
(1, 32.00, 'pendiente');

-- Datos iniciales: Detalles de pedidos
INSERT INTO detalles_pedido (pedido_id, producto_id, cantidad, precio_unitario) VALUES
(1, 1, 5, 2.50),   -- 5 Naranjas
(1, 5, 2, 4.50),   -- 2 Fresas
(1, 10, 3, 1.50),  -- 3 Plátanos
(2, 2, 3, 2.00),   -- 3 Limones
(2, 8, 2, 3.50),   -- 2 Piñas
(3, 9, 4, 4.00),   -- 4 Mangos
(3, 6, 3, 5.00);   -- 3 Frambuesas
