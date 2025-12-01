# Entorno Docker para PHP + MariaDB

### Iniciar el entorno
```bash
docker compose -f docker-compose.yml up -d
```

### Detener el entorno
```bash
docker compose -f docker-compose.yml down
```

### Detener y eliminar datos (reinicio completo)
```bash
docker compose -f docker-compose.yml down -v
```

## 🌐 Accesos

- **Aplicación PHP**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081

## 🔑 Credenciales de Base de Datos

### Acceso Root
- **Host**: `localhost` (o `db` desde PHP)
- **Puerto**: `3306`
- **Usuario**: `root`
- **Contraseña**: `root`

### Acceso Usuario Normal
- **Usuario**: `alumno`
- **Contraseña**: `alumno`
- **Base de datos**: `testdb`
