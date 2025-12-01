# 📝 EJERCICIO 3: Sistema de Préstamos con Interface (30 min)

## Parte A: Interface Prestable

Define una interface `Prestable` con los siguientes métodos:

```php
interface Prestable {
    public function registrarPrestamo(int $socioId, int $libroId): int;
    public function registrarDevolucion(int $prestamoId): bool;
    public function getPrestamosActivos(int $socioId): array;
    public function getHistorial(int $socioId): array;
}
```

---

## Parte B: Clase GestorPrestamos

Implementa la interface `Prestable`:

### Método registrarPrestamo():
1. Verifica que el libro tenga ejemplares disponibles (SELECT + comprobación PHP)
2. Usa una **transacción**:
   - INSERT en tabla `prestamos`
   - UPDATE en tabla `libros` para reducir `disponibles`
3. Si algo falla, rollback y lanzar excepción
4. Devuelve el ID del préstamo creado

### Método registrarDevolucion():
1. Busca el préstamo por ID
2. Usa una **transacción**:
   - UPDATE en `prestamos`: devuelto = TRUE, fecha_devolucion = HOY
   - UPDATE en `libros`: aumentar `disponibles`
3. Devuelve true si todo OK

### Método getPrestamosActivos():
1. SELECT * FROM prestamos WHERE socio_id = ? AND devuelto = FALSE
2. Devuelve array de préstamos

### Método getHistorial():
1. SELECT * FROM prestamos WHERE socio_id = ?
2. Devuelve todos los préstamos (activos y devueltos)

---

## Parte C: Probar el sistema

Crea un archivo `test_prestamos.php` que:
1. Cree una instancia de GestorPrestamos
2. Registre un préstamo del libro ID 5 al socio ID 2
3. Muestre los préstamos activos del socio 2
4. Registre la devolución del préstamo
5. Muestre el historial completo

---

## Tu código:

```php
<?php
require_once 'conexion.php';

// Interface Prestable




// Clase GestorPrestamos




// test_prestamos.php




```
