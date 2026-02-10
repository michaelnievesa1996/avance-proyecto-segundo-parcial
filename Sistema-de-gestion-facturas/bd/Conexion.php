<?php
class Conexion{
    public function conectar(){
        $host = "localhost";
        $port = "5432";
        $dbname = "sistema_facturacion";
        $user = "postgres";
        $password = "admin";

        try {
            $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES 'UTF8'");

            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }

    }
}


?>