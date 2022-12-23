<?php
class Query extends Connection
{

    private $conn, $sql,$data;

    public function __construct()
    {
        $pdo = new Connection();
        $this->conn = $pdo->connect();
    }
    
    public function select(string $sql,array $data=array())
    {
        $this->sql = $sql;
        $this->data = $data;
        $statement = $this->conn->prepare($this->sql);
        $statement->execute($this->data);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function selectAll(string $sql)
    {
        $this->sql = $sql;
        $statement = $this->conn->prepare($this->sql);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function save(string $sql,array $data)
    {
       $this->sql = $sql;
       $this->data = $data;
       $statement = $this->conn->prepare($this->sql);
       return $statement->execute($this->data);
    }
}
?>