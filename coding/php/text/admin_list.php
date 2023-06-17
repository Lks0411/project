<?php
class Database{
    private $conn;

    function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if($this->conn->connect_error) {
            die("connection error" .$this->conn->connect_error);
        }
    }

    function queryTableSinger(){
        $sql = "SELECT * FROM singer ";
        $result = $this->conn->query($sql);
        return $result;
    }

    function queryTableAlbum(){
        $sql = "SELECT * FROM album ";
        $result = $this->conn->query($sql);
        return $result;
    }

    function queryTableMusic(){
        $sql = "SELECT * FROM music ";
        $result = $this->conn->query($sql);
        return $result;
    }

    function close() {
        $this->conn->close();
    }
}
?>
