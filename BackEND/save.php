<?php

$dbhost = "127.0.0.1";
$dbname = "fietsverhuur";
$user = "root";
$pass = "";
$charset = "utf8mb4";
$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
    ];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch(PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$error = null;
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $ex) {$error = $ex->getMessage();}


        if (is_null($error)) {
            try {
                $stmt = $pdo->prepare("INSERT INTO `reserveringennorm` (`Voornaam`, `Achternaam`, `fietsen`, `datum`, `email`) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$_POST['Voornaam'], $_POST['Achternaam'], $_POST['fietsen'], $_POST['datum'], $_POST['email']]);
            } catch (Exception $ex) { $error = $ex->getMessage(); }
        }

echo is_null($error) ? "Bedankt voor de reservering,<br> U krijgt zo spoedig mogelijk een bevestiging via de mail.<br>" : $error;
?>