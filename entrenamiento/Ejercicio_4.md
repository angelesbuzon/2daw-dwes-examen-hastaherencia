# 📝 EJERCICIO 4: Trait y Estadísticas (25 min)

## Parte A: Trait Auditable

Crea un trait `Auditable` que permita registrar acciones:

### Propiedades:
- `array $registros = []`

### Métodos:
- `registrar(string $accion): void` - Añade "[Y-m-d H:i:s] $accion" al array
- `getRegistros(): array` - Devuelve todos los registros
- `limpiarRegistros(): void` - Vacía el array

---

## Parte B: Clase EstadisticasBiblioteca

Crea una clase que use el trait `Auditable`:

### Método librosDisponibles(): array
1. Obtén todos los libros: `SELECT * FROM libros`
2. Usa `array_filter()` para quedarte con los que tienen `disponibles > 0`
3. Registra la acción: "Consultados libros disponibles"
4. Devuelve el array filtrado

### Método sociosActivos(): array
1. Obtén todos los socios: `SELECT * FROM socios`
2. Filtra con PHP los que tienen `activo = true`
3. Registra la acción
4. Devuelve el resultado

### Método librosPopulares(int $limite = 3): array
1. Obtén todos los préstamos: `SELECT * FROM prestamos`
2. Cuenta cuántas veces aparece cada libro_id usando `foreach` y un array contador
3. Ordena el array de mayor a menor con `arsort()`
4. Devuelve los primeros $limite con `array_slice()`
5. Registra la acción

### Método prestamosPorMes(): array
1. Obtén todos los préstamos: `SELECT * FROM prestamos`
2. Agrupa por mes (formato "Y-m") usando `foreach`
3. Devuelve array asociativo: ['2025-11' => 4, '2025-10' => 2, ...]
4. Registra la acción

---

## Tu código:

```php
<?php
require_once 'conexion.php';

// Trait Auditable




// Clase EstadisticasBiblioteca




// Prueba las estadísticas




```
