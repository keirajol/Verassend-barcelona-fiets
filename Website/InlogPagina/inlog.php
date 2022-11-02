<?php
require_once ('LoginController.php');
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header-footer/header.footer.css">
    <link rel="stylesheet" href="inlog.css">
    <title>www.verassendbarcelona.nl/login</title>
</head>
<body>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Gebruiker</td>
                <td>
                    <input type="text" name="user" />
                </td>
            </tr>
            <tr>
                <td>Wachtwoord</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="submit" type="submit" name="login" value="Login"/><br>
                    <a href="NewUser.php">Nieuwe gebruiker</a>
                </td>
            </tr>
        </table>
    </form>
</body>

<?php
if (isset($_POST['login']))
{
    try
    {
        $user = $_POST['user'];
        $loginController = new LoginController();
        if ($loginController->Login($user, $_POST['password']))
        {
            echo 'ingelogd<br/>' . header("Location:index.php");
            $_SESSION['user'] = $user;
        }
        else
        {
            echo 'ongeldig user id of wachtwoord<br/>';
            unset( $_SESSION['user']);
        }
    }

    catch (Exception $ex)
    {
        echo $ex->getMessage() . "<br/>";
    }
    
}




?> 
</html>