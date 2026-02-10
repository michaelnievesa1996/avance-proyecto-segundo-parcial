<?php
require_once __DIR__ . '/../dao/PersonaDao.php';
require_once __DIR__ . '/../modelo/Persona.php';

class PersonaControlador{

    public function consultarPersonas(){
        $personaDao = new PersonaDao();
        return $personaDao->consultarPersonas();
    }

    public function guardarPersona() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?accion=menu');
            exit;
        }

        $persona = new Persona();
        $persona->cedula = $_POST['cedula'];
        $persona->nombre = $_POST['nombre'];
        $persona->apellido = $_POST['apellido'];
        $persona->correo = $_POST['correo'];
        $persona->telefono = $_POST['telefono'];
        $persona->rol = $_POST['rol'];
        $persona->direccion = $_POST['direccion'];

        $dao = new PersonaDao();

        if ($dao->guardarPersona($persona)) {
            header('Location: index.php?accion=consultarPersonas');
        } else {
            echo 'Error al guardar la persona';
        }
    }

    public function obtenerPersona($cedula) {
        $dao = new PersonaDao();
        return $dao->obtenerPersonaPorCedula($cedula);
    }

    public function actualizarPersona() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?accion=menu');
            exit;
        }

        $persona = new Persona();
        $persona->cedula = $_POST['cedula'];
        $persona->nombre = $_POST['nombre'];
        $persona->apellido = $_POST['apellido'];
        $persona->correo = $_POST['correo'];
        $persona->telefono = $_POST['telefono'];
        $persona->rol = $_POST['rol'];
        $persona->direccion = $_POST['direccion'];

        $dao = new PersonaDao();

        if ($dao->actualizarPersona($persona)) {
            header('Location: index.php?accion=consultarPersonas');
        } else {
            echo 'Error al actualizar la persona';
        }
    }

    public function eliminarPersona($cedula){
        $dao = new PersonaDao();

        if ($dao->eliminarPersona($cedula)) {
            header('Location: index.php?accion=consultarPersonas');
        } else {
            echo 'Error al eliminar la persona';
        }
    }
}
?>
