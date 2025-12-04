# 📚 EXAMEN FINAL DE TEORÍA - DWES 2025
## Temas 2, 3 y 4 - PHP 8.4, Base de Datos y POO

| **Información del Examen** | |
|---------------------------|---|
| **Valor** | 75% de la nota final |
| **Duración** | 2 horas (teoría + práctica) |
| **Parte Teoría** | 50 puntos |
| **Material permitido** | ❌ SIN APUNTES |
| **Fecha** | 04/12/2025 |

---

| **Alumno/a** | |
|-------------|---|
| **Nombre** | M.ª Ángeles |
| **Apellidos** | Buzón Campaña |

---

# PARTE A: TEST (20 puntos - 1 punto cada pregunta)
### Marca con una X la respuesta correcta

---

## TEMA 2: PHP 8.4 Básico

### 1. ¿Cuál es la forma correcta de declarar una variable en PHP?
- [ ] a) `var $nombre = "Juan";`
- [x] b) `$nombre = "Juan";`
- [ ] c) `let nombre = "Juan";`
- [ ] d) `nombre := "Juan";`

### 2. ¿Qué tipo de dato devuelve la expresión `3 / 2` en PHP?
- [ ] a) `int`
- [x] b) `float`
- [ ] c) `string`
- [ ] d) `double`

### 3. ¿Cuál es la diferencia entre `==` y `===` en PHP?
- [ ] a) No hay diferencia, son equivalentes
- [ ] b) `==` compara valor y tipo, `===` solo valor
- [x] c) `===` compara valor y tipo, `==` solo valor
- [ ] d) `===` es para strings, `==` para números

### 4. ¿Qué función se usa para obtener la longitud de un array en PHP?
- [ ] a) `length($array)`
- [ ] b) `size($array)`
- [x] c) `count($array)`
- [ ] d) `len($array)`

### 5. ¿Cuál es la sintaxis correcta de la expresión `match` en PHP 8.4?
- [ ] a) `match($x) { 1: "uno", 2: "dos" }`
- [x] b) `match($x) { 1 => "uno", 2 => "dos" }`
- [ ] c) `match $x { case 1: "uno"; case 2: "dos"; }`
- [ ] d) `match($x) { when 1 then "uno", when 2 then "dos" }`

### 6. ¿Qué valor devuelve `isset($variable)` si `$variable = null`?
- [ ] a) `true`
- [x] b) `false`
- [ ] c) `null`
- [ ] d) Error de sintaxis

### 7. ¿Cuál es la forma correcta de concatenar strings en PHP?
- [ ] a) `$a + $b`
- [x] b) `$a . $b`
- [ ] c) `$a & $b`
- [ ] d) `concat($a, $b)`

---

## TEMA 3: Acceso a Base de Datos

### 8. ¿Qué significa PDO en PHP?
- [x] a) PHP Data Object
- [ ] b) PHP Database Operations
- [ ] c) PHP Data Objects
- [ ] d) Personal Database Objects

### 9. ¿Cuál es el modo de error recomendado para PDO en producción?
- [ ] a) `PDO::ERRMODE_SILENT`
- [ ] b) `PDO::ERRMODE_WARNING`
- [x] c) `PDO::ERRMODE_EXCEPTION`
- [ ] d) `PDO::ERRMODE_DEBUG`

### 10. ¿Qué método de PDO se usa para obtener el ID del último registro insertado?
- [x] a) `getLastId()`
- [ ] b) `insertId()`
- [ ] c) `lastInsertId()`
- [ ] d) `getInsertedId()`

### 11. ¿Cuál es la principal ventaja de usar prepared statements?
- [ ] a) Son más rápidos
- [x] b) Previenen SQL Injection
- [ ] c) Usan menos memoria
- [ ] d) Son más fáciles de escribir

### 12. ¿Qué método se usa para obtener todos los resultados de una consulta SELECT?
- [ ] a) `fetch()`
- [x] b) `fetchAll()`
- [ ] c) `getAll()`
- [ ] d) `selectAll()`

### 13. ¿Qué operación SQL se usa en una relación 1:N para unir tablas?
- [ ] a) `MERGE`
- [ ] b) `UNION`
- [x] c) `JOIN`
- [ ] d) `CONCAT`

### 14. ¿Cuál es el propósito de `$pdo->beginTransaction()`?
- [ ] a) Iniciar una nueva conexión
- [x] b) Iniciar un grupo de operaciones que se ejecutan como unidad
- [ ] c) Resetear la base de datos
- [ ] d) Crear una nueva tabla

---

## TEMA 4: Clases y Herencia (POO)

### 15. ¿Cuál es la visibilidad por defecto de una propiedad en PHP si no se especifica?
- [ ] a) `private`
- [ ] b) `protected`
- [ ] c) `public`
- [x] d) Error de sintaxis (debe especificarse)

### 16. ¿Qué palabra clave se usa para heredar de una clase en PHP?
- [ ] a) `inherits`
- [x] b) `extends`
- [ ] c) `implements`
- [ ] d) `derives`

### 17. ¿Cuál es la diferencia entre una clase abstracta y una interfaz?
- [ ] a) No hay diferencia
- [x] b) Una clase abstracta puede tener implementación, una interfaz no (antes de PHP 8)
- [ ] c) Una interfaz puede tener propiedades, una clase abstracta no
- [ ] d) Solo se puede heredar de interfaces

### 18. ¿Qué son los Property Hooks en PHP 8.4?
- [x] a) Funciones para validar propiedades al asignarlas o accederlas
- [ ] b) Eventos que se disparan al crear objetos
- [ ] c) Decoradores de métodos
- [ ] d) Macros de preprocesamiento

### 19. ¿Cuál es la sintaxis correcta para Asymmetric Visibility en PHP 8.4?
- [ ] a) `public(get) private(set) string $nombre`
- [x] b) `public private(set) string $nombre`
- [ ] c) `get:public set:private string $nombre`
- [ ] d) `@visibility(public, private) string $nombre`

### 20. ¿Para qué sirven los Traits en PHP?
- [ ] a) Para crear interfaces múltiples
- [x] b) Para reutilizar código entre clases no relacionadas por herencia
- [ ] c) Para definir constantes globales
- [ ] d) Para crear variables estáticas

---

# PARTE B: PREGUNTAS CORTAS (15 puntos - 3 puntos cada una)

### 21. Explica la diferencia entre `include` y `require` en PHP. ¿Cuándo usarías cada uno?

```
Los dos insertan código PHP en el documento, pero si "include" falla no pasa nada.
Si falla "require", da un error fatal y no carga la página.

Usaría "include" en la mayoría de los casos para que pueda seguir cargando y ejecutándose la aplicación,
y "require" solo para lo que sea estrictamente necesario.
```

### 22. ¿Qué es "Soft Delete" en base de datos? Escribe un ejemplo de consulta SQL que lo implemente.

```
Borrar los datos de una tabla sin borrar la tabla en sí.

Borrar todo:
DELETE * FROM tabla;

Borrar especificando algo para no liarla parda:
DELETE * FROM tabla WHERE columna = "lo que sea";
```

### 23. Explica qué es una transacción en base de datos y para qué sirven los métodos `commit()` y `rollBack()`.

```
Es un grupo de operaciones que se ejecutan como unidad en una sentencia.
"commit()" sirve para confirmar los cambios que hace la transacción; "rollBack()" sirve para deshacer la transacción y volver al estado anterior de la BD.
```

### 24. ¿Cuál es la diferencia entre `public`, `private` y `protected` en POO? Pon un ejemplo de cuándo usarías cada uno.

```
A las propiedades y métodos "public" se puede acceder desde cualquier parte del programa. Ejemplo: funciones getter en general.
A las "protected", solo desde esa clase y sus subclases. Ejemplo: atributos y funciones que necesitarán las subclases, pero a las que no tiene por qué tener acceso el resto del programa.
A las "private", solo esa misma clase. Ejemplo: atributos y funciones que solo se usan dentro de otras funciones de la clase.
```

### 25. Explica qué es el operador nullsafe (`?->`) en PHP 8.4 y pon un ejemplo de su uso.

```
_______________________________________________________________________________

_______________________________________________________________________________

_______________________________________________________________________________

_______________________________________________________________________________
```

---

# PARTE C: CÓDIGO Y ANÁLISIS (15 puntos - 5 puntos cada pregunta)

### 26. Analiza el siguiente código e indica qué errores tiene y cómo los corregirías:

```php
<?php
class Producto {
    public $nombre;
    private $precio;
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    
    private function getPrecio() {
        return $this->precio;
    }
}

$p = new Producto("Manzana", 2.50);
echo $p->getPrecio();
?>
```

**Errores encontrados y correcciones:**
```
La función getPrecio() se ha definido como privada, así que no podrá usarse fuera de la propia clase. La haría pública:

public function getPrecio() {
    return $this->precio;
}

Como PHP no tiene tipado estricto, y nunca he definido propiedades sin tiparlas,
no sé si dará error el no especificar el tipo de las propiedades. Aunque no diera error me parece recomendable, y lo haría así:

class Producto {
    public string $nombre;
    private float $precio;

    // Métodos y demás info de la clase
}
```

---

### 27. Escribe el código PHP para conectar a una base de datos MySQL llamada "tienda" con las siguientes características:
- Host: localhost
- Puerto: 3306
- Usuario: admin
- Contraseña: secret123
- Debe configurarse para lanzar excepciones en caso de error

```php
<?php
// Escribe tu código aquí:

try {
    $detalles = "
        host=localhost;
        port=3306;
        dbname=tienda;
    ";
    $usuario = "admin";
    $contrasena = "secret123";

    $pdo = new PDO($detalles, $usuario, $contrasena);

    // No recuerdo bien la sintaxis para establecer el lanzamiento de excepciones:
    $pdo->setMode(PDO::ERRMODE_EXCEPTION);

    echo "Conexión correcta";

} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>
```

---

### 28. Dado el siguiente diagrama de clases, escribe la declaración de la clase `Empleado` en PHP 8.4 usando Property Hooks:

```
┌─────────────────────────────┐
│         Empleado            │
├─────────────────────────────┤
│ - nombre: string            │
│ - salario: float (≥ 1000)   │
│ - email: string             │
├─────────────────────────────┤
│ + getNombreCompleto()       │
│ + subirSalario(porcentaje)  │
└─────────────────────────────┘
```

**Requisitos:**
- El salario mínimo es 1000 (validar al asignar)
- El nombre debe guardarse en mayúsculas
- El email es de solo lectura después de crearse

```php
<?php
// Escribe tu código aquí:

class Empleado {
    public string $nombre {
        set($nombrePropuesto) {
            $this->nombre = strtoupper($nombrePropuesto);
        }
    }
    public float $salario {
        set($importePropuesto) {
            if ($importePropuesto < 1000) {
                throw new Error("El salario debe ser de 1000 como mínimo");
            }
        }
    }
    public private(set) string $email;
}

?>
```

---

# PARTE D: TEORÍA CONCEPTUAL (10 puntos)

### 29. (5 puntos) Explica los tipos de relaciones en Base de Datos (1:1, 1:N, N:M) con ejemplos del mundo real:

```
ONE-TO-ONE (1:1):
El elemento A solo puede tener relación con un solo elemento B, y viceversa.

Ejemplo: En las sociedades donde no es legal la poligamia, una persona solo puede ser cónyuge de una única persona a la vez, y viceversa.

ONE-TO-MANY (1:N):
El elemento A puede tener relación con varios elementos B, pero estos solo pueden tener relación con un elemento A.

Ejemplo: Una editorial puede publicar muchos libros, pero un libro (la misma edición, con su propio ISBN) solo puede tener una editorial.

MANY-TO-MANY (N:M):
El elemento A puede tener relación con varios elementos B, y el elemento B puede tener relación con varios elementos A.

Ejemplo: Yo puedo tener varios amigos, y cada uno de mis amigos puede tener otras amistades aparte de mí.
```

---

### 30. (5 puntos) Explica las diferencias entre **Clase Abstracta**, **Interface** y **Trait** en PHP. ¿Cuándo usarías cada uno?

```
CLASE ABSTRACTA:
¿Qué es?
Plantilla base para crear subclases, pero que en sí no será instanciada.

¿Cuándo usarla?
Cuando queramos establecer una serie de propiedades y métodos que van a ser comunes a varias subclases.

INTERFACE:
¿Qué es?
Viene a ser una clase que solo puede tener métodos.

¿Cuándo usarla?
Cuando queramos establecer unos métodos que puedan asignarse libremente a diferentes clases sin ningún tipo de jerarquía.

TRAIT:
¿Qué es?
Una clase, con sus propiedades y métodos, pero sin herencia vertical.

¿Cuándo usarlo?
Cuando en otras clases queramos poder implementar propiedades y métodos de esa clase/trait sin las limitaciones del sistema de jerarquía vertical (en el que las clases tienen relación padre-hija).

¿Puede una clase usar los tres a la vez? Explica:
Sí. Una clase puede a la vez:
* Ser subclase de una clase abstracta
* Implementar los métodos de una interfaz 
* Heredar propiedades y métodos de uno o varios traits
```

---

## 📊 TABLA DE PUNTUACIÓN

| Parte | Puntos Máximos | Puntos Obtenidos |
|-------|----------------|------------------|
| A - Test | 20 | |
| B - Preguntas Cortas | 15 | |
| C - Código y Análisis | 15 | |
| D - Teoría Conceptual | 10 | |
| **TOTAL TEORÍA** | **50** | |

---

> ⏰ **Recuerda:** Esta es solo la parte teórica. Después continuarás con la parte práctica donde SÍ podrás usar apuntes.
