# 📝 EJERCICIO 5: Gestión de Inventario (15 min)

## Clase GestorInventario

Crea una clase para gestionar el inventario de la biblioteca:

### Método librosAgotados(): array
1. `SELECT * FROM libros`
2. Filtra con PHP los que tienen `disponibles = 0`
3. Devuelve el array

### Método librosPocoStock(int $minimo = 2): array
1. `SELECT * FROM libros`
2. Filtra con PHP los que tienen `disponibles < $minimo`
3. Devuelve el array

### Método agregarEjemplares(int $libroId, int $cantidad): bool
1. `SELECT * FROM libros WHERE id = ?`
2. Calcula nuevos valores: ejemplares + cantidad, disponibles + cantidad
3. `UPDATE libros SET ejemplares = ?, disponibles = ? WHERE id = ?`
4. Devuelve true si OK

### Método librosPorGenero(): array
1. `SELECT * FROM generos`
2. `SELECT * FROM libros`
3. Agrupa con PHP: para cada género, cuenta cuántos libros hay
4. Devuelve: `['Novela' => 5, 'Cuento' => 2, ...]`

### Método buscarPorAutor(string $nombreAutor): array
1. `SELECT * FROM autores`
2. Busca el autor que contenga $nombreAutor (usa `stripos()`)
3. `SELECT * FROM libros WHERE autor_id = ?`
4. Devuelve los libros de ese autor

---

## Tu código:

```php
<?php
require_once 'conexion.php';

// Clase GestorInventario




// Pruebas




```
