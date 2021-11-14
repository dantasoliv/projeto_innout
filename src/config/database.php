<?php

class Database { // Criando classe para conecatar com o banco de dados
    public static function getConnection() {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if($conn->connect_error) { // Verificando se existe reeos na conexão com o banco de dados
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }
}