<?php
require_once 'bd/Conexion.php';
require_once 'modelo/Usuario.php';

class UsuarioDao{
    public function autenticar($usuario,$clave){
        $conexion = new Conexion();

        $pdo=$conexion->conectar();
        $sql="SELECT * FROM usuarios WHERE usuario= :usuario AND clave = :clave ";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([
            'usuario'=> $usuario,
            'clave'=> $clave
        ]);

        $fila= $stmt->fetch(PDO::FETCH_ASSOC);

        if($fila){
            $user= new Usuario();
            $user->id= $fila['id'];
            $user->usuario= $fila['usuario'];
            return $user;
        }

        return null;



    
    }
}
