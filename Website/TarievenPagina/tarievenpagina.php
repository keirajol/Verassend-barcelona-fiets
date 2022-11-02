<!DOCTYPE html>
<html>

<head>
    <title>tarievenpagina</title>
    <link rel="stylesheet" href="tarievenpagina.css">
    <link rel="stylesheet" href="../header-footer/header.footer.css" />
    <?php
    require_once '../Classes/PageLayout.php';
    $layout = new PageLayout();
    ?>
</head>

<body>
    <?php
    $layout->getNavbarHead("../Homepage/", "../../BackEnd/", "../Informatiepagina/", "", "../InlogPagina/");
    ?>
    <div class="centerform">
        <div class="mytabs">
            <input type="radio" id="tabfree" name="mytabs" checked="checked" />
            <label for="tabfree">Tour</label>
            <div class="tab">
                <h2>No.1 Barcelona Fietsstour</h2>
                <p>
                    * Ontdek op een �actieve� manier het Idyllische Barcalona. <br />
                    * Inclusief fietshuur, helm, water en koffie. (Inbegrepen bij de prijs)<br />
                    * Beoordeeld met 5 sterren op Tripadvisor & ANWB.<br />
                    * Duur:  2.5 uur(Andere tijdstippen en duur mogelijk in overleg).<br />
                    * Fietstour start elke dag om 10:00 en 15:00.<br />
                    * Startlocatie nabij het historische centrum<br />
                    * Incl. hoogtepunten als Sagrada Familia, Ramblas, Gothische Wijk & Barceloneta<br />
                    * (Benodigde details sturen wij altijd binnen 24 uur na de reservering toe)<br />
                    * Gesproken talen: Nederlands<br />
                    * Altijd gratis annuleren 24 uur voor de tour (100% restitutie)<br />
                    * (Prijs is per persoon, Inclusief fiets)<br />
                    <p>�10,-</p>
                </p>
            </div>

            <input type="radio" id="tabsilver" name="mytabs" />
            <label for="tabsilver">fietsen</label>
            <div class="tab">
                <h2>Prijs losse fietsen</h2>
                <p>
                    <ul>*Naast de fietsen voor de tour bieden wij ook losse fietsen aan.<br> Momenteel hebben wij maar 1 type fiets.</ul>
                    <ul></ul>
                    <ul>* Type 1 fiets   20 euro.</ul>
                    <br />
                    <p>Alle prijzen zijn inclusief btw</p>
                </p>
            </div>

            
        </div>
    </div>

    <?php
    $layout->getNavbarFoot("../IMG/route.png");
    ?>
</body>

</html>