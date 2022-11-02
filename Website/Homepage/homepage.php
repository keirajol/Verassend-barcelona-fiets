<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header-footer/header.footer.css">
    <link rel="stylesheet" href="homepage.content.page.css">
    <title>www.verassendbarcelona.nl</title>
    <?php
    require_once '../Classes/PageLayout.php';
    $layout = new PageLayout();
    ?>
</head>
<body>

    <?php
    $layout->getNavbarHead("", "../../BackEnd/", "../Informatiepagina/", "../Tarievenpagina/", "../InlogPagina/");
    ?>

    <div class="startcontainer">
        <div class="containerA">
            <h1 class="containertitle">Fiets-tours</h1>
            <img src="../IMG/fietstour.png"/>
            <a href="../../BackEND/formTour.php">Klik hier voor uw reservatie</a>
        </div>

        <div class="containerB" id="left">
            <h1 class="containertitle">Fiets-verhuur</h1>
            <img src="../IMG/fietshuur.png"/>
            <a href="../../BackEND/form.php">Klik hier voor uw reservatie</a>
        </div>
    </div>
    <?php
    $layout->getNavbarFoot("../IMG/route.png");
    ?>
</body>
</html>