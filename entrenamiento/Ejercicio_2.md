# 📝 EJERCICIO 2: Jerarquía de Personas (30 min)

## Contexto
En la biblioteca hay diferentes tipos de personas: socios normales, socios premium y bibliotecarios.

---

## Parte A: Clase abstracta Persona

Crea una clase abstracta `Persona` con:

### Propiedades:
- `id`: int
- `nombre`: string
- `email`: string

### Métodos:
- Constructor que reciba los 3 parámetros
- `abstract getRol(): string` - Devuelve el rol de la persona
- `getInfoCompleta(): string` - Devuelve "[ROL] Nombre (email)"

---

## Parte B: Clase Socio

Extiende `Persona` con:

### Propiedades adicionales:
- `fechaAlta`: DateTime
- `activo`: bool

### Métodos:
- `getRol()`: devuelve "Socio"
- `antiguedad(): int` - Meses desde la fecha de alta
- `estaActivo(): bool` - Getter del estado
- `darDeBaja(): void` - Pone activo a false
- `guardar(): bool` - INSERT o UPDATE en tabla `socios`
- `static buscarPorEmail(string $email): ?Socio` - Busca por email

---

## Parte C: Clase SocioPremium

Extiende `Socio` con:

### Propiedades adicionales:
- `limiteLibros`: int (máximo de libros simultáneos, default 10)

### Métodos:
- `getRol()`: devuelve "Socio Premium"
- `puedePrestar(int $librosActuales): bool` - True si librosActuales < limiteLibros

---

## Parte D: Clase Bibliotecario

Extiende `Persona` con:

### Propiedades adicionales:
- `seccion`: string (ej: "Infantil", "Adultos", "Consulta")

### Métodos:
- `getRol()`: devuelve "Bibliotecario - {seccion}"
- `guardar(): bool` - Puede simular (no hay tabla)

---

## Tu código:

```php
<?php
require_once 'conexion.php';

// Persona.php (abstracta)




// Socio.php




// SocioPremium.php




// Bibliotecario.php




```
