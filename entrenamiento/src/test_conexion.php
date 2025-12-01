<?php
/**
 * Test de conexión a la base de datos
 * Ejecuta: php src/test_conexion.php
 */

try {
    $host = 'localhost';
    $port = '3307';
    $dbname = 'biblioteca';
    $user = 'estudiante';
    $password = 'estudiante123';
    
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    echo "✅ Conexión exitosa a la base de datos\n\n";
    
    // Probar que hay datos
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM libros");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "📚 Libros en la BD: " . $resultado['total'] . "\n";
    
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM socios");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "👥 Socios en la BD: " . $resultado['total'] . "\n";
    
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM prestamos");
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "📋 Préstamos en la BD: " . $resultado['total'] . "\n";
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "\n";
    echo "\n💡 Asegúrate de que el contenedor Docker está corriendo:\n";
    echo "   docker-compose up -d\n";
}
