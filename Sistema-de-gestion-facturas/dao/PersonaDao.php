<?php

require_once __DIR__ . '/../bd/Conexion.php';
require_once __DIR__ . '/../modelo/Persona.php';


class PersonaDao{

    public function guardarPersona(Persona $persona) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'INSERT INTO personas
                (cedula, nombre, apellido, correo, telefono, rol, direccion) 
                VALUES (:cedula,:nombre,:apellido,:correo,:telefono,:rol,:direccion)';

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':cedula' => $persona->cedula,
            ':nombre' => $persona->nombre,
            ':apellido' => $persona->apellido,
            ':correo' => $persona->correo,
            ':telefono' => $persona->telefono,
            ':rol' => $persona->rol,
            ':direccion' => $persona->direccion
        ]);
    }

    // 🔹 Listar todas las personas
    public function consultarPersonas(){

        $conexion = new Conexion();
        $pdo = $conexion->conectar();
        
        $sql = 'SELECT cedula, nombre, apellido, correo, telefono, rol, direccion
                FROM personas
                ORDER BY apellido';

        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 🔹 Obtener persona por cédula
    public function obtenerPersonaPorCedula($cedula) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'SELECT * FROM personas WHERE cedula = :cedula';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':cedula' => $cedula]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // 🔹 Actualizar persona
    public function actualizarPersona(Persona $persona) {

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'UPDATE personas SET
                    nombre = :nombre,
                    apellido = :apellido,
                    correo = :correo,
                    telefono = :telefono,
                    rol = :rol,
                    direccion = :direccion
                WHERE cedula = :cedula';

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nombre' => $persona->nombre,
            ':apellido' => $persona->apellido,
            ':correo' => $persona->correo,
            ':telefono' => $persona->telefono,
            ':rol' => $persona->rol,
            ':direccion' => $persona->direccion,
            ':cedula' => $persona->cedula
        ]);
    }

    // 🔹 Eliminar persona
    public function eliminarPersona($cedula){

        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = 'DELETE FROM personas WHERE cedula = :cedula';
        $stmt = $pdo->prepare($sql);

        return $stmt->execute([':cedula' => $cedula]);
    }
}

?>
