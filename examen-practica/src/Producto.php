<?php
require_once 'conexion.php';

class Producto {
    public private(set) int $id;
    public string $nombre {
        set(string $nombrePropuesto) {
            $this->nombre = trim($nombrePropuesto);
        }
    }
    public float $precio {
        set(float $precioPropuesto) {
            if ($precioPropuesto < 0.01) {
                throw new Error("El precio debe ser de 0.01 como mínimo");
            }
        }
    }
    public int $stock {
        set(int $stockPropuesto) {
            if ($stockPropuesto < 0) {
                throw new Error("El stock no puede ser menor que 0");
            }
        }
    }
    public int $categoriaId;
    public bool $activo;

    function __construct($id, $nombre, $precio, $stock, $categoriaId, $activo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->categoriaId = $categoriaId;
        $this->activo = $activo;
    }

    public function hayStock(): bool {
        if ($this->stock > 0) return true;
        else return false;
    }

    public function reducirStock(int $cantidad): bool {
        if ($this->stock - $cantidad >= 0) {
            $this->stock = $this->stock - $cantidad;
            return true;
        } else {
            return false;
        }
    }

    public function calcularTotal(int $cantidad): float {
        return $this->precio * $cantidad;
    }

    public function toArray(): array {
        $nuevoArray = [
            "id" => $this->id,
            "nombre" => $this->nombre,
            "precio" => $this->precio,
            "stock" => $this->stock,
            "categoriaID" => $this->categoriaId,
            "activo" => $this->activo
        ];

        return $nuevoArray;
    }

    static public function findByID(int $id): ?Producto {
        $producto = null;

        try {
            $pdo = getConexion();

            $sql = "SELECT * FROM productos WHERE id = ?";
            $consulta = $pdo->prepare($sql);
            $consulta->execute([$id]);

            $producto = $consulta->fetch();

        } catch (Exception $e) {
            echo "Error en findByID: " . $e->getMessage();
        }

        return $producto;
    }

    static public function findAll(): array {
        $listaProductos = null;

        try {
            $pdo = getConexion();

            $sql = "SELECT * FROM productos";
            $consulta = $pdo->prepare($sql);
            $consulta->execute();

            $listaProductos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            foreach ($listaProductos as $p) {
                if ($p['activo'] == false) {
                    // ...
                }
            }

        } catch (Exception $e) {
            echo "Error en findByID: " . $e->getMessage();
        }

        return $listaProductos;
    }
    
    
}