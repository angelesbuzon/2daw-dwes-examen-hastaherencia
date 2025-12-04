<?php

require_once 'conexion.php';

class Administrador extends Usuario {
    public int $nivel {
        set(int $nivelPropuesto) {
            if ($nivelPropuesto < 1 || $nivelPropuesto > 5) {
                throw new Error ("El nivel debe ser entre 1 y 5");
            }
        }
    }

    function __construct($id, $nombre, $email, $nivel) {
        parent::__construct($id, $nombre, $email);
        $this->nivel = $nivel;
    }

    public function getTipo(): string {
        return "Admin nivel " . $this->nivel;
    }

    public function tienePermiso(int $nivelRequerido): bool {
        if ($this->nivel >= $nivelRequerido) return true;
        else return false;
    }

    public function guardar(): bool {
        $guardadoCorrecto = false;

        // No pondría if (true), haría una consulta para determinar si existe la tabla administradores
        // Pero no recuerdo cómo era y no lo veo en los apuntes, así que dejo la estructura así... 
        if (true) {
            try {
                $pdo = getConexion();

                $sql = "SELECT * FROM administradores";
                $consulta = $pdo->prepare($sql);
                $consulta->execute();
                $listaAdmins = $consulta->fetchAll(PDO::FETCH_ASSOC);

                // Recorrer
                $yaExiste = false;
                foreach ($listaAdmins as $c) {
                    if ($c['id'] == $this->id) {
                        $yaExiste = true;
                        break;
                    }
                }

                if ($yaExiste) {
                    $sql = "UPDATE administradores SET id = ?, nombre = ?, email = ?";
                } else {
                    $sql = "INSERT INTO administradores (id, nombre, email) VALUES (?, ?, ?)";
                }

                $consulta = $pdo->prepare($sql);
                $consulta->execute([$this->id, $this->nombre, $this->email]);

                $guardadoCorrecto = true;

            } catch (Exception $e) {
                echo "Error en guardar(): " . $e->getMessage();
            }
        } else {
            throw new Error("No existe la tabla de administradores");
        }

        return $guardadoCorrecto;
    }
}