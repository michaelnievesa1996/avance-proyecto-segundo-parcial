<?php
require_once 'controlador/UsuarioControlador.php';
require_once 'controlador/PersonaControlador.php';
require_once 'controlador/ProductoControlador.php';

$opcion = $_GET['accion'] ?? 'login';

$usuarioCtrl  = new UsuarioControlador();
$personaCtrl  = new PersonaControlador();
$productoCtrl = new ProductoControlador();

session_start();

switch ($opcion) {

    /* ================= LOGIN ================= */

    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
        break;

    case 'inicio':
        include 'vista/inicio.php';
        break;

    case 'logout':
        $usuarioCtrl->logout();
        break;


    case 'registrarPersona':
        include 'vista/personas/registrar.php';
        break;

    case 'guardarPersona':
        $personaCtrl->guardarPersona();
        break;

    case 'consultarPersonas':
        $personas = $personaCtrl->consultarPersonas();
        include 'vista/personas/consultar.php';
        break;

    case 'editarPersona':
        $cedula = $_GET['cedula'];
        $persona = $personaCtrl->obtenerPersona($cedula);
        include 'vista/personas/editar.php';
        break;

    case 'actualizarPersona':
        $personaCtrl->actualizarPersona();
        break;

    case 'eliminarPersona':
        $cedula = $_GET['cedula'];
        $personaCtrl->eliminarPersona($cedula);
        break;


    case 'registrarProducto':
        include 'vista/productos/registrar.php';
        break;

    case 'guardarProducto':
        $productoCtrl->guardarProducto();
        break;

    case 'consultarProductos':
        $productos = $productoCtrl->consultarProductos();
        include 'vista/productos/consultar.php';
        break;

    case 'editarProducto':
        $id = $_GET['id'];
        $producto = $productoCtrl->obtenerProducto($id);
        include 'vista/productos/editar.php';
        break;

    case 'actualizarProducto':
        $productoCtrl->actualizarProducto();
        break;

    case 'eliminarProducto':
        $id = $_GET['id'];
        $productoCtrl->eliminarProducto($id);
        break;



    default:
        include 'vista/login.php';
        break;
}