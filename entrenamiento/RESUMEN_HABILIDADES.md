# 🎯 RESUMEN DE HABILIDADES A PRACTICAR

## Lo que debes dominar para el examen:

### 1. Conexión PDO
- [ ] Crear función de conexión
- [ ] Configurar excepciones
- [ ] Configurar charset
- [ ] Manejar errores

### 2. Clases y Property Hooks (PHP 8.4)
- [ ] Propiedades con get/set
- [ ] Validaciones en setters
- [ ] Propiedades readonly
- [ ] Constructor con promoción

### 3. Herencia y Abstracción
- [ ] Clases abstractas
- [ ] Métodos abstractos
- [ ] Extender clases
- [ ] Implementar métodos abstractos
- [ ] Llamar a constructor padre

### 4. Interfaces
- [ ] Definir una interface
- [ ] Implementar todos los métodos
- [ ] Tipar parámetros con la interface

### 5. Traits
- [ ] Crear un trait
- [ ] Usar trait en una clase
- [ ] Propiedades y métodos del trait

### 6. Consultas PDO
- [ ] SELECT con prepare/execute
- [ ] INSERT con parámetros
- [ ] UPDATE con parámetros
- [ ] fetchAll() y fetch()
- [ ] lastInsertId()

### 7. Transacciones
- [ ] beginTransaction()
- [ ] commit()
- [ ] rollBack()
- [ ] try-catch con rollback

### 8. Manipulación de Arrays
- [ ] foreach para recorrer
- [ ] array_filter() para filtrar
- [ ] usort() / arsort() para ordenar
- [ ] array_slice() para limitar
- [ ] Agrupar datos con foreach

---

## Checklist de práctica:

| Ejercicio | Tiempo | Completado |
|-----------|--------|------------|
| Ejercicio 1: Conexión + Clase | 20 min | ⬜ |
| Ejercicio 2: Herencia | 30 min | ⬜ |
| Ejercicio 3: Interface + Transacciones | 30 min | ⬜ |
| Ejercicio 4: Trait + Estadísticas | 25 min | ⬜ |
| Ejercicio 5: Gestión Inventario | 15 min | ⬜ |

---

## 💡 Consejos para el examen:

1. **Empieza por lo que dominas** - No pierdas tiempo en algo difícil al principio
2. **Conexión primero** - Si la conexión no funciona, nada funciona
3. **Compila seguido** - Ejecuta `php archivo.php` frecuentemente para detectar errores
4. **Usa var_dump()** - Para depurar datos que vienen de la BD
5. **Lee bien el enunciado** - A veces piden cosas específicas que se pasan por alto
6. **Transacciones = try-catch** - Siempre envuelve las transacciones en try-catch

---

## ⚙️ Cómo ejecutar los ejercicios:

```bash
# 1. Ir a la carpeta
cd Entrenamiento

# 2. Levantar la BD
docker-compose up -d

# 3. Esperar 10 segundos a que MySQL inicie

# 4. Crear tu código en src/
mkdir src
touch src/conexion.php
touch src/Libro.php
# etc...

# 5. Ejecutar
php src/conexion.php
php src/test_prestamos.php
```

¡Buena suerte! 🍀
