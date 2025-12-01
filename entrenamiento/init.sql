USE biblioteca;

-- Tabla: autores
CREATE TABLE autores (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    nacionalidad VARCHAR(50),
    fecha_nacimiento DATE
);

-- Tabla: generos
CREATE TABLE generos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT
);

-- Tabla: libros
CREATE TABLE libros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(200) NOT NULL,
    autor_id INT NOT NULL,
    genero_id INT NOT NULL,
    isbn VARCHAR(20) UNIQUE,
    ejemplares INT DEFAULT 1,
    disponibles INT DEFAULT 1,
    FOREIGN KEY (autor_id) REFERENCES autores(id),
    FOREIGN KEY (genero_id) REFERENCES generos(id)
);

-- Tabla: socios
CREATE TABLE socios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20),
    fecha_alta DATE DEFAULT (CURRENT_DATE),
    activo BOOLEAN DEFAULT TRUE
);

-- Tabla: prestamos
CREATE TABLE prestamos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    socio_id INT NOT NULL,
    libro_id INT NOT NULL,
    fecha_prestamo DATE DEFAULT (CURRENT_DATE),
    fecha_devolucion DATE,
    devuelto BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (socio_id) REFERENCES socios(id),
    FOREIGN KEY (libro_id) REFERENCES libros(id)
);

-- Datos iniciales
INSERT INTO autores (nombre, nacionalidad, fecha_nacimiento) VALUES
('Gabriel García Márquez', 'Colombiana', '1927-03-06'),
('Isabel Allende', 'Chilena', '1942-08-02'),
('Mario Vargas Llosa', 'Peruana', '1936-03-28'),
('Jorge Luis Borges', 'Argentina', '1899-08-24');

INSERT INTO generos (nombre, descripcion) VALUES
('Novela', 'Narrativa extensa de ficción'),
('Cuento', 'Narrativa breve'),
('Poesía', 'Composiciones en verso'),
('Ensayo', 'Textos argumentativos');

INSERT INTO libros (titulo, autor_id, genero_id, isbn, ejemplares, disponibles) VALUES
('Cien años de soledad', 1, 1, '978-0307474728', 5, 3),
('El amor en los tiempos del cólera', 1, 1, '978-0307387264', 3, 2),
('La casa de los espíritus', 2, 1, '978-0525433477', 4, 4),
('Paula', 2, 1, '978-0061564901', 2, 1),
('La ciudad y los perros', 3, 1, '978-8420471549', 3, 3),
('Ficciones', 4, 2, '978-0802130303', 2, 2),
('El Aleph', 4, 2, '978-0142437889', 3, 1);

INSERT INTO socios (nombre, email, telefono) VALUES
('Ana Martínez', 'ana@email.com', '666111222'),
('Pedro Sánchez', 'pedro@email.com', '666333444'),
('Laura García', 'laura@email.com', '666555666');

INSERT INTO prestamos (socio_id, libro_id, fecha_prestamo, devuelto) VALUES
(1, 1, '2025-11-15', FALSE),
(1, 3, '2025-11-20', FALSE),
(2, 2, '2025-11-10', TRUE),
(3, 6, '2025-11-25', FALSE);
