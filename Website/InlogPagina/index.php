<!DOCTYPE HTML>
<html>
<?php
use function CommonMark\Render\HTML;

$host = "127.0.0.1";
$database = "fietsverhuur";
$user = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
?>

<h3>
    <?php
    $sql = $pdo->query("SELECT * FROM reserveringennorm");
    while($row = $sql->fetch()) {
        echo $row["Voornaam"];
    };
 ?>
</h3>
</html>