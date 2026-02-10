<?php

require_once __DIR__ . '/../dao/ProductoDao.php';
require_once __DIR__ . '/../modelo/Producto.php';

class ProductoControlador {

    public function consultarProductos() {
        $productoDao = new ProductoDao();
        return $productoDao->consultarProductos();
    }

    public function guardarProducto() {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $producto = new Producto();

        $producto->nombre = $_POST['nombre'] ?? null;
        $producto->descripcion = $_POST['descripcion'] ?? null;
        $producto->precio = $_POST['precio'] ?? null;
        $producto->stock = $_POST['stock'] ?? null;
        $producto->estado = $_POST['estado'] ?? 1;

        $producto->tipo = $_POST['tipo'] ?? null;

        $dao = new ProductoDao();
        $dao->guardarProducto($producto);

        header("Location: index.php?accion=consultarProductos");
        exit;
    }
}

    public function obtenerProducto($id) {
        $dao = new ProductoDao();
        return $dao->obtenerProductoPorId($id);
    }


    public function actualizarProducto() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?accion=menu');
            exit;
        }

        $producto = new Producto();
        $producto->id = $_POST['id'];
        $producto->nombre = $_POST['nombre'];
        $producto->descripcion = $_POST['descripcion'];
        $producto->precio = $_POST['precio'];
        $producto->stock = $_POST['stock'];
        $producto->estado = $_POST['estado'];
        $producto->tipo = 'Producto';


        if ($producto->precio <= 0 || $producto->stock < 0) {
            echo 'Precio o stock inválido';
            return;
        }

        $dao = new ProductoDao();

        if ($dao->actualizarProducto($producto)) {
            header('Location: index.php?accion=consultarProductos');
        } else {
            echo 'Error al actualizar el producto';
        }
    }


    public function eliminarProducto($id) {

        $dao = new ProductoDao();

        if ($dao->eliminarProducto($id)) {
            header('Location: index.php?accion=consultarProductos');
        } else {
            echo 'Error al eliminar el producto';
        }
    }
}
?>