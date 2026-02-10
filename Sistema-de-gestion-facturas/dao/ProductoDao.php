<?php

require_once __DIR__ . '/../bd/Conexion.php';
require_once __DIR__ . '/../modelo/Producto.php';

class ProductoDao {

    public function guardarProducto(Producto $producto) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "INSERT INTO productos_servicios
                (nombre, descripcion, tipo, precio, stock, estado)
                VALUES (:nombre, :descripcion, :tipo, :precio, :stock, :estado)";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nombre' => $producto->nombre,
            ':descripcion' => $producto->descripcion,
            ':tipo' => $producto->tipo,      // 👈 AHORA SÍ
            ':precio' => $producto->precio,
            ':stock' => $producto->stock,
            ':estado' => $producto->estado
        ]);
    }

    public function consultarProductos() {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT id, nombre, descripcion, tipo, precio, stock, estado
                FROM productos_servicios
                WHERE tipo = 'producto'
                ORDER BY nombre";

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerProductoPorId($id) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT *
                FROM productos_servicios
                WHERE id = :id AND tipo = 'Producto'";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarProducto(Producto $producto) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "UPDATE productos_servicios SET
                    nombre = :nombre,
                    descripcion = :descripcion,
                    precio = :precio,
                    stock = :stock,
                    estado = :estado
                WHERE id = :id AND tipo = 'Producto'";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nombre' => $producto->nombre,
            ':descripcion' => $producto->descripcion,
            ':precio' => $producto->precio,
            ':stock' => $producto->stock,
            ':estado' => $producto->estado,
            ':id' => $producto->id
        ]);
    }

    public function eliminarProducto($id) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "DELETE FROM productos_servicios
                WHERE id = :id AND tipo = 'Producto'";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }
}