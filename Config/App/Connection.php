<?php

class Connection
{
    private $conn;

    public function __construct()
    {
        $dsn = 'mysql:host=' . host . ';dbname=' . dbname .';charset='. charset;
        
        try {
            $this->conn = new PDO($dsn, user,pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error en la conexion :' . $e->getMessage());
        }
    }

    public function connect()
    {
        return $this->conn;
    }
}
?>