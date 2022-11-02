<!DOCTYPE html>
<html>
  <head>
      <title>Reservering</title>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../Website/header-footer/header.footer.css" />
      <link rel="stylesheet" href="form.css"/>
      <?php
      require_once '../Website/Classes/PageLayout.php';
      $layout = new PageLayout();
      ?>
  </head>
  <body>
    <?php
    $layout->getNavbarHead("../Website/Homepage/", "", "../Website/Informatiepagina/", "../Website/Tarievenpagina/", "../Website/InlogPagina/");
    $layout->form("Reserveer uw fietstour hier!");
    $layout->getNavbarFoot("../Website/IMG/route.png");
    if (isset($_POST['Voornaam'])) {
      require "saveTour.php";
    }
    ?>
  </body>
</html>