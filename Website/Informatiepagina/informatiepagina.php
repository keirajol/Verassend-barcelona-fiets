<!DOCTYPE html>
<html>
<head>
    <title>Informatiepagina</title>
    <link rel="stylesheet" href="informatiepagina.css">
    <link rel="stylesheet" href="../header-footer/header.footer.css">
    <?php
    require_once '../Classes/PageLayout.php';
    $layout = new PageLayout();
    ?>
</head>

<body>
    <?php
    $layout->getNavbarHead("../Homepage/", "../../BackEnd/", "", "../Tarievenpagina/", "../InlogPagina/");
    ?>
    
    <br>
    <div class="fietsverhuur">
        <div class="reserveren">
            <h2>Reserveer een fiets online of in de winkel!</h2>
            <p1>
                Informatie fietsverhuur:<br>
                De fietsen kunnen gereserveerd worden in tijdslots van 4 uur, zo heb jij alle vrijheid om zelf de stad te ontdekken!<br>
                Er zijn maximaal 20 fietsen beschikbaar, zorg dus dat je online een tijdslot reserveerd om verzekerd te zijn van een fiets! (Fietsen voor de tours staan apart en zitten niet in de fietsverhuur.) De kosten voor het huren van een fiets bedraagt 15 euro per persoon per fiets.<br>
                Verkent hot-spots in de stad zoals; Sagrada Familia, Las Ramblas, de Gothic Quarter en La Barceloneta! Alle populaire locaties zijn gemakkelijk met de fiets toegankelijk vanaf ons filiaal in Barcelona. <br>
                Barcelona is dankzij de uitstekende infrasttructuur (o.a. honderden kilometers fietspad) naast leuk, informatief en ontspannen ook erg veilig! <br>
                Word verrast door vriendelijk en behulpzaam personeel die allemaal over de Nederlandse taal beschikken en geniet van de comfort van onze Cortina City Bikes, aanbevolenn door de ANWB! <br>
            </p1>
            <img class="verhuurfoto" src="../IMG/fietsverhuur.png" alt="fietsverhuur">
            <button type="button"><a href="../../BackEND/form.php">Reserveer hier</a></button>
        </div>
    
        <div class="fietstour">
            <h2>Reserveer de Fiets-tour online of in de winkel!</h2>
            <p2>
                Informatie fiets-tour:<br>
                De fiets-tour duurt 2,5 uur lang en word 2 keer per dag gehouden: <br>
                Om 10.00 uur en 15.00 uur. <br>
                Er kunnen maximaal 10 mensen mee per fiets-tour. (Fietsen voor deze tour staan apart en zitten niet in de losse fietsverhuur.) De kosten voor deze tour bedragen 10 euro per persoon per fiets. <br>
                Incl. hoogtepunten als Sagrada Familia, Las Ramblas, de Gothic Quarter en La Barceloneta. Deze ontspannen Barcelona fiets-tour met een Nederlandse, lokale gids combineert in slechts 2,5 uur de belangrijkste must-see highlights; o.a. enkele meesterwerken van Gaudi, met de verborgen schatten van deze prachtige wereldstad. <br>
                De Nederlandstalige local vertelt de complete historie en achtergronden, zodat je in korte tijd alles over deze topstad te weten komt! Deze Barcelona fiets-tour is dankzij de uitstekende infrastructuur (o.a. honderden kilometers fietspad) naast leuk, informatief en ontspannen ook 100% veilig. <br>
                Met deze Barcelona fiets-tour, die inzoomt op de niet te missen hoogtepunten. Deze hoogtepunten ga je zien tijdens de nr. 1 Barcelona fiets-tour.
            </p2>
            <img class="tourfoto" src="../IMG/fietstour.png" alt="fietstour">
            <button type="button"><a href="../../BackEND/form.php">Reserveer hier</a></button>
        </div>
    </div>

    <?php
    $layout->getNavbarFoot("../IMG/route.png");
    ?>
</body>
</html>