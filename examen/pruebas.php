<?php
echo "=== Test de Conexión - Examen DWES ===\n\n";

try {
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=fruteria;';
    $usuario = 'alumno';
    $contraseña = 'alumno123';
    
    $pdo = new PDO($dsn, $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Conexión exitosa a la base de datos 'fruteria'\n\n";
    
    // Verificar tablas
    echo "📋 Tablas en la base de datos:\n";
    $stmt = $pdo->query("SHOW TABLES");
    $tablas = $stmt->fetchAll(PDO::FETCH_COLUMN);
    foreach ($tablas as $tabla) {
        echo "   - $tabla\n";
    }
    
    // Verificar productos
    echo "\n🍊 Productos cargados:\n";
    $stmt = $pdo->query("SELECT * FROM productos");
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $p) {
        $activo = $p['activo'] ? 'Sí' : 'No';
        echo "   [{$p['id']}] {$p['nombre']} - {$p['precio']}€ (Stock: {$p['stock']})\n";
    }
    
    // Verificar categorías
    echo "\n📂 Categorías:\n";
    $stmt = $pdo->query("SELECT * FROM categorias");
    $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($categorias as $c) {
        echo "   - {$c['nombre']}: {$c['descripcion']}\n";
    }
    
    // Verificar clientes
    echo "\n👥 Clientes:\n";
    $stmt = $pdo->query("SELECT * FROM clientes");
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clientes as $c) {
        echo "   - {$c['nombre']} ({$c['email']})\n";
    }
    
    echo "\n✅ Todo funciona correctamente. La base de datos está lista para el examen.\n";
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "\n";
}