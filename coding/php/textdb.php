
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
        $this->conn->query($sql);
        return $this->conn->query($sql);
    }

    function queryTableAlbum(){
        $sql = "SELECT * FROM album ";
        $this->conn->query($sql);
        return $this->conn->query($sql);
    }
    function queryTableMusic(){
        $sql = "SELECT * FROM music ";
        $this->conn->query($sql);
        return $this->conn->query($sql);
    }

    function close() {
        $this->conn->close();
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "musicdb";

$database = new Database($servername, $username, $password, $dbname);

    $Music = $database->queryTableMusic();
    $Album = $database->queryTableAlbum();
    $Singer = $database->queryTableSinger();



    while ($row = $Music->fetch_assoc()) {
        echo " - MusicCode: " . $row["MusicCode"]."\n";
        echo " - MusicName: " . $row["MusicName"]."\n";
        echo " - singer: " . $row["singer"]."\n";
        echo " - album: " . $row["album"]."\n";
        echo " - type: " . $row["type"]."\n\n";
    }
    

    while ($row = $Album->fetch_assoc()) {
        echo " - AlbumCode: " . $row["AlbumCode"]."\n";
        echo " - AlbumName: " . $row["AlbumName"]."\n";
        echo " - singer: " . $row["singer"]."\n";
        echo " - visitnum: " . $row["visitnum"]."\n\n";
    }
   

    while ($row = $Singer->fetch_assoc()) {
        echo " - SingerCode: " . $row["SingerCode"]."\n";
        echo " - SingerName: " . $row["SingerName"]."\n";
        echo " - gender: " . $row["gender"]."\n";
        echo " - birthday: " . $row["birthday"]."\n";

    }

$database->close();
?>


