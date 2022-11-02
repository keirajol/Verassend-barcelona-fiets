<?php
class PageLayout
{
    private string $imagePathA = "../IMG/Verassend_Barcelona_LOGO.png";
    private string $imagePathB = "../IMG/Verassend_Barcelona_LOGO_BG.png";

    public function getNavbarHead(string $path1, string $path2, string $path3, string $path4, string $path5)
    {
        echo"
            <nav class='navbar'>
                <div class='headcapsule'>
                    <img class='logoimg' src=$this->imagePathA alt='[LOGO]'>
                    <h1 class='headertitle'>Wij nemen je mee op een avontuur!</h1>
                    <div class='dropdown'>
                        <button class='dropbtn'>Menu</button>
                        <div class='dropdown-content'>
                            <a href=" . $path1 . 'homepage.php' . ">Home</a>
                            <a href=" . $path2 . 'form.php' . ">Reserveren</a>
                            <a href=" . $path3 . 'informatiepagina.php' . ">Informatie</a>
                            <a href=" . $path4 . 'tarievenpagina.php' . ">Prijzen</a>
                            <a class='headertitle' href=" . $path5 . 'inlog.php' . ">(Log in)</a>
                        </div>
                    </div>
                </div>
            </nav>
            ";
    }

    public function getNavbarFoot(string $mapPath)
    {
        echo "
        <nav class='footercapsule'>
            <div class='footerlogo'>
                <img class='logofooter' src=$this->imagePathB alt='Logo'>
            </div>
            <div class='textfooter'>
                <h1 class='footerhead'>Fietsenhuren</h1>
                <ul class='fietsen-footer'>
                    <li>Fietsen</li>
                    <li>Fietstours</li>
                </ul>
            </div>
            <div class='textfooter'>
                <h1 class='footerhead'>Contact</h1>
                <ul class='Contact-footer'>
                    <li>
                        Openingstijden: <br> (maandag t/m zaterdag van 09:00 tot 18:00 <br>
                        zondag: Gesloten.)
                    </li>
                    <li>Tel: 020 569 696 61</li>
                    <li>E-mail: Info@VerassendBarcelona.com</li>
                    <li>
                        <a href='https://www.google.nl/maps/dir//Carrer+de+Bergara,+69,+08002+Barcelona,+Spanje/
                    @41.3865754,2.1679125,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x12a4a2f38c88911d:0xf4c4ae83f9d207
                    db!2m2!1d2.1685425!2d41.3865368'>
                            Carrer de Bergara 69 <br>
                            08007 DJ Barcelona
                        </a>
                    </li>
                </ul>
            </div>
            <div class='route'>
                <a href='https://www.google.nl/maps/dir//Carrer+de+Bergara,+69,+08002+Barcelona,+Spanje/
                @41.3865754,2.1679125,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x12a4a2f38c88911d:0xf4c4ae83f9d207
                db!2m2!1d2.1685425!2d41.3865368' target=_blank><input type='image' src=" . $mapPath ." id='route' name='route' alt='route'></a>
            </div>
        </nav>
        ";
    }

    public function form(string $formType)
    {
        echo '<div class="formcontainer">
          <form method="POST">
              ' . "<h1 class='titleform'>$formType</h1>" . '
              <label for="name"><b>Voornaam:</b></label>
              <input type="text" name="Voornaam" required="required"/>
              <label for="name"><b>Achternaam:</b></label>
              <input type="text" name="Achternaam" required="required"/>
              <label for="quantity"><b>Aantal fietsen:</b></label>
              <input type="number" id="quantity" name="fietsen" min="1" max="20"required="required"/>
              <label for="date"><b>Datum :</b></label>
              <input type="date" id="date" name="datum" min="2021-11-5"required="required"/>
              <label for="email"><b>Email:</b></label>
              <input type="email" id="email" name="email"required="required"/>
              <input class="submit" type="submit" value="Verzenden"/>
          </form>
      </div>';
    }
}
?>