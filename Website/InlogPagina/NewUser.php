<?php
    require_once ('LoginController.php');
    session_start();
?>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../header-footer/header.footer.css" />
    <link rel="stylesheet" href="inlog.css" />
    <title>www.verassendbarcelona.nl/aanmelden</title>
</head>
<body>
    <form action="NewUser.php" method="post">
        <table>
            <tr>
                <td>Gebruiker</td>
                <td>
                    <input type="text" name="user" />
                </td>
            </tr>
            <tr>
                <td>Volledige naam</td>
                <td>
                    <input type="text" name="userName" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" />
                </td>
            </tr>
            <tr>
                <td>Wachtwoord</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td>Herhaal wachtwoord</td>
                <td>
                    <input type="password" name="repeatedPassword" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="submit" type="submit" name="newUser" value="Opslaan" />
                </td>
            </tr>
        </table>
    </form>
<?php
if (isset($_POST['newUser']))
{
    try
    {
        $loginController = new LoginController();
        $loginController->CreateUser($_POST['user'], $_POST['password'], 
                                     $_POST['repeatedPassword'],
                                     $_POST['userName'], $_POST['email']);
        echo 'Gebruiker opgeslagen<br/>';
    }
    catch (Exception $ex)
    {
        echo $ex->getMessage() . "<br />";
    }
}
?>


</body>