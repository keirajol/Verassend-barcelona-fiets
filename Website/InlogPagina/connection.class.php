<?php


class connection {


private string $host = "127.0.0.1";
private string $database = "fietsverhuur";
private string $user = "root";
private string $password = "";
private PDO $pdo;

public function __construct() {
    $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
    echo "connect";
}

    


}

?>