<!DOCTYPE html>
<html lang="de">
<head>
    <!---------------------------------------- Metadata ---------------------------------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Florian Schwingenschlögl">

    <!---------------------------------------- Google Analytics ---------------------------------------->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-101506688-1');
    </script>

    <!---------------------------------------- Title ---------------------------------------->
    <title>Creative Framework Templates</title>

    <!---------------------------------------- CSS Imports ---------------------------------------->
    <link rel="alternate" hreflang="en" href="../en/">
    <link rel="shortcut icon" href="../lib/img/puzzle.png">
    <link href="../lib/css/imports.css" rel="stylesheet">

    <!---------------------------------------- Code Prettity Imports ---------------------------------------->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</head>

<body>
<!---------------------------------------- Header ---------------------------------------->
<header id="top" class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header navpadding">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logopadding logo" href="../index.php"><img class="navicon" alt="Brand"
                                                                                src="../lib/img/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse navpadding">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link" href="../get_started/">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typografie</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Komponenten</a></li>
                    <li><a class="nav-link active">Vorlagen</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../en/templates/">en</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---------------------------------------- Side-Navigation ---------------------------------------->
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#typography">Typografie</a></li>
        <li class="aside-subnav"><a href="#headings">Überschriften</a></li>
        <li class="aside-subnav"><a href="#blogs">Blogs verfassen</a></li>
        <li class="aside-subnav"><a href="#info">Auskunftswebseite</a></li>
        <li class="aside-subnav"><a href="#userinput">Benutzereingaben</a></li>
        <li class="aside-scroll"><a href="#semantik">Semantik</a></li>
        <li class="aside-subnav"><a href="#base">Grundgerüste</a></li>
        <li class="aside-subnav"><a href="#gridsystem">Grid System</a></li>
        <li class="aside-scroll"><a href="#logic">Logik</a></li>
        <li class="aside-subnav"><a href="#login">Benutzer Anmeldung</a></li>
        <li class="aside-subnav"><a href="#registration">Benutzer Registration</a></li>
        <li class="aside-subnav"><a href="#gallery">Galerien</a></li>
        <li class="aside-subnav"><a href="#parallax">Parallax</a></li>
    </ul>
</aside>

<!---------------------------------------- Main ---------------------------------------->
<main class="content">
    <!---------------------------------------- Side Des ---------------------------------------->
    <div class="row">
        <h1>Vorlagen</h1>
        <p>Sind einzelne Elemente nicht ausführlich genug erklärt oder gestaltet sich die Einbindung komplex, sollten
            Sie hier einige der Vorlagen herunterladen. Einzelne Bereiche des Frameworks sind hier als Demo verfügbar
            und können durch die MIT Lizenz für eigene komerzielle Projekte angewendet werden.
        </p>
    </div>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Table of Content ---------------------------------------->
    <div class="row">
        <div class="subnav-mobile">
            <h3>Inhaltsverzeichnis</h3>
            <ul class="dir_pad">
                <li>
                    <a class="directory" href="#typography">Typografie</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#headings">Überschriften</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#blogs">Blogs verfassen</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#info">Auskunftswebseiten</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#userinput">Benutzereingaben</a>
                </li>
                <li>
                    <a class="directory" href="#semantik">Semantik</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#base">Grundgerüste</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#gridsystem">Grid System</a>
                </li>
                <li>
                    <a class="directory" href="#logic">Logik</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#login">Benutzer Anmeldung</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#registration">Benutzer Registration</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#gallery">Galerien</a>
                </li>
                <li>
                    <a class="margin-left directory" href="#parallax">Parallax</a>
                </li>
            </ul>
        </div>
    </div>

    <!---------------------------------------- Content Typography ---------------------------------------->
    <article id="typography" class="section scrollspy">
        <h2>Typografie</h2>
        <p>
            Der Begriff kommt aus dem Altgriechischen und wird am besten übersetzt durch „Arbeiten mit Schrift“.
            Heutzutage ist Typografie ein wichtiger Bestandteil in jedem Design Prozess. Die richtige Schriftwahl sowie Schriftstärke
            sind ausschlag geben für die Informationen die übermittelt werden sollen. Zeilenabstände, Buchstabenabstände sowie Zeilenlänge
            sind weitere wichtige Punkte die die Lesbarkeit von Informationen verbessern. Die Templates unter diesem Punkt befassen sich der
            Darstellung von Informationen.
        </p>
    </article>

    <article id="headings" class="section scrollspy">
        <h3>Überschriften</h3>
        <p>Um speziell auf die Gliederung von Texten einzugehen haben wir das Überschriften Template erstellt.
            Es soll zeigen wie Informationen aufbereitet werden sollten um Leser anzusprechen. Sowie welche Struktur
            Texte haben sollten um dem Leser alle wichtigen Informationen zu vermitteln.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/headings.PNG" class="img-responsive" alt="Template Headings">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Überschriften
                </button>
            </div>
        </div>
    </article>

    <article id="blogs" class="section scrollspy">
        <h3>Blogs verfassen</h3>
        <p>
            Das Template Blogs verfassen bietet dem Benutzer eine einfache Möglichkeit das Grundgerüst einer Blogseite herunterzuladen.
            Die Blogseite besteht aus einer Seitennavigation und einem Inhaltsbereich in dem die Blogeinträge dargestellt werden.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/blogs.PNG" class="img-responsive" alt="Template Blog">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Blogs verfassen
                </button>
            </div>
        </div>
    </article>

    <article id="info" class="section scrollspy">
        <h3>Auskunftswebseite</h3>
        <p>
            Die Auskunftswebseite ist das perfekte Template für jede Webseite mit viel Information. Sie ist rein dazu gedacht dem Besucher
            so viel Information wie möglich übersichtlich darzustellen. Das Template besteht aus einem Header, Content und Footer. Um den Besucher
            der Seite nicht mit Text zu überfordern wurden einige Bilder verwendet die Abwechslung in das Template bringen sollen.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/info.PNG" class="img-responsive" alt="Template Informationwebsite">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Auskunftswebseite
                </button>
            </div>
        </div>
    </article>

    <article id="userinput" class="section scrollspy">
        <h3>Benutzereingaben</h3>
        <p>
            Die Benutzereingabe veranschaulicht wie die Eingabe Elemente des Frameworks eingesetzt und kombiniert werden können.
            Das Template bietet ein Standard Formular welches zum Beispiel für eine Registrierung oder einen Kaufabschluss verwendet werde kann.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/userinput.PNG" class="img-responsive" alt="Template User Input">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Benutzereingaben
                </button>
            </div>
        </div>
    </article>

    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Semantik ---------------------------------------->
    <article id="semantik" class="section scrollspy">
        <h2>Semantik</h2>
        <p>
            In diesem Abschnitt wird speziell auf die verschiedenen Layout Möglichkeiten bei der Entwicklung von Webseiten eingegangen.
            Außerdem wird ein weiterer wichtiger Bestandteil in der Webentwicklung gezeigt und zwar die Semantik. Sie sorgt dafür, dass
            die einzelnen Informationen einer Webseite besser strukturiert sind und mehr Aussagekraft bekommen.
        </p>
    </article>

    <article id="base" class="section scrollspy">
        <h3>Grundgerüste</h3>
        <p>
            Unter diesem Punkt befinden sich einige Vorlagen die verschiedene Layout Möglichkeiten aufzeigen um beispielsweise Graphen
            oder Photos darzustellen. Weiteres zeigen die Vorlagen wie die Semantischen Elemente verwendet werden sollten.
        </p>
        <h4>Grafik vorstellen</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/featured_graphic.PNG" class="img-responsive" alt="Template Graphic">
            </div>
        </div>
        <div class="row center layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Grafik vorstellen
                </button>
            </div>
        </div>
        <h4>Foto vorstellen</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/featured_photo.PNG" class="img-responsive" alt="Template Photo">
            </div>
        </div>
        <div class="row center layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Foto vorstellen
                </button>
            </div>
        </div>
        <h4>Seitennavigation</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/fixed_sidebar.PNG" class="img-responsive" alt="Template Sidenav">
            </div>
        </div>
        <div class="row center layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Seitennavigation
                </button>
            </div>
        </div>
    </article>

    <article id="gridsystem" class="section scrollspy">
        <h3>Grid System</h3>
        <p>
            Da unser Framework ein komplexes Grid System beinhaltet gibt es auch Vorlagen die zeigen welche Möglichkeiten es bietet
            und welche Layout Optionen sich damit realisieren lassen. Unter diesem Punkt wird speziell auf die Verwendung des Grid Systems
            für Layoutzwecke eingegangen.
        </p>
        <h4>Drei Boxen</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/three_boxes.PNG" class="img-responsive" alt="Template three Boxes">
            </div>
        </div>
        <div class="row center margin-bottom layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Drei Boxen
                </button>
            </div>
        </div>
        <h4>Fünf Boxen</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/five_boxes.PNG" class="img-responsive" alt="Template five Boxes">
            </div>
        </div>
        <div class="row center margin-bottom layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Fünf Boxen
                </button>
            </div>
        </div>
        <h4>Fortgeschrittenes Grid</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/advanced_grid.PNG" class="img-responsive" alt="Template advanced Grid">
            </div>
        </div>
        <div class="row center margin-bottom layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Fortgeschrittenes Grid
                </button>
            </div>
        </div>
        <h4>Starkes Grid</h4>
        <div class="row center template_margin">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/power_grid.PNG" class="img-responsive" alt="Template strong Grid">
            </div>
        </div>
        <div class="row center margin-bottom layouts_demo">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Starkes Grid
                </button>
            </div>
        </div>
    </article>

    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Logic ---------------------------------------->
    <article id="logic" class="section scrollspy">
        <h2>Logik</h2>
        <p>
            Unter diesem Punkt befinden sich fertig gestaltete Vorlagen für verschiedene Bereiche. Die beiden Standardseiten
            Registration und Anmeldung können hier heruntergeladen werden. Weiteres gibt es ein Template um Bilder oder Fotos
            auf einer Webseite darzustellen sowie ein Template für den Parallax Effekt.
        </p>
    </article>

    <article id="login" class="section scrollspy">
        <h3>Benutzer Anmeldung</h3>
        <p>
            Die Benutzeranmeldung veranschaulicht wie das Login einer Seite aussehen könnte. Sie besteht aus einem Login Formular sowie
            einem Hintergrundbild. Die Eingabefelder als auch der Hintergrund können nach belieben angepasst werden.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/login.PNG" class="img-responsive" alt="Template Login">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Benutzer Anmeldung
                </button>
            </div>
        </div>
    </article>

    <article id="registration" class="section scrollspy">
        <h3>Benutzer Registration</h3>
        <p>
            Die Benuterregistation zeigt wie eine mögliche Registrationsseite aussehen könnte. SIe besteht ebenfalls aus einem Formular
            und einem Hintergrundbild. Das Eingabeformular als auch der Hintergrund können nach belieben angepasst werden.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/registration.PNG" class="img-responsive" alt="Template Registration">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Benutzer Registration
                </button>
            </div>
        </div>
    </article>

    <article id="gallery" class="section scrollspy">
        <h3>Galerien</h3>
        <p>
            Das Template für Galerien bietet eine hervorragende Option Bilder sowie Fotos darzustellen. Perfekt für jeden Benutzer der eine
            Sammlung von Bilder auf seiner Seite zeigen möchte. Durch eine Navigation sowie einigen Informationsreichen kann außerdem noch
            zusätzlich Text auf der Seite hinzugefügt werden.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/gallery.PNG" class="img-responsive" alt="Template Gallery">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Galerien
                </button>
            </div>
        </div>
    </article>

    <article id="parallax" class="section scrollspy">
        <h3>Parallax</h3>
        <p>
            Der Parallax Effekt ist ein interaktiver Effekt im Webdesign. Bei diesem Effekt werden verschiedene Objekte auf
            unterschiedlichen Ebenen voneinander positioniert wodurch eine art Räumlichkeit und Bewegung simuliert wird.
            Dieses Template eignet sich perfekt wenn Sie Bewegung in ihre Webseite bringen wollen.
        </p>
        <div class="row center template_margin margin-top">
            <div class="col xs12 s12 m8 l6 xl6 template">
                <img src="../lib/img/templates/parallax.PNG" class="img-responsive" alt="Template Parallax">
            </div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <button type="button" class="download">
                    Parallax
                </button>
            </div>
        </div>
    </article>

    <div class="container-line">
        <hr>
    </div>
</main>

<!---------------------------------------- Footer ---------------------------------------->
<footer class="footer">
    <ul class="sociallist">
        <!---------------------------------------- Social Media Icons ---------------------------------------->
        <li><a target="_blank" href="https://www.facebook.com/CreativePuzzleDevelop/"><img src="../lib/img/facebook.png"
                                                                                           alt="facebook logo"
                                                                                           class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://www.instagram.com/creative.puzzle/"><img src="../lib/img/instagram.png"
                                                                                      alt="instagram logo"
                                                                                      class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://twitter.com/creative_puzzle?lang=de"><img src="../lib/img/twitter.png"
                                                                                       alt="twitter logo"
                                                                                       class="img-responsive socialmedia"></a>
        </li>
    </ul>

    <!---------------------------------------- Imprint Button ---------------------------------------->
    <div class="col-footer text-center">
        <button type="button" class="btnimpr btn btn-md" data-toggle="modal" data-target="#Impressum">
            Impressum
        </button>
    </div>
    <!---------------------------------------- Modal Imprint ---------------------------------------->
    <div class="modal fade " id="Impressum" tabindex="-1" role="dialog" aria-labelledby="ImpressumLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ImpressumLabel">Impressum</h4>
                </div>
                <div class="modal-body">
                    <h3>Inhaber</h3>
                    <p>Name: Maximilian Hagn</p>
                    <h3>Adresse</h3>
                    <p>
                        Straße: Rudolf-Waisenhorn-Gasse 138/4
                    </p>
                    <p>
                        PLZ: 1230
                    </p>
                    <p>
                        Ort: Wien
                    </p>
                    <p>
                        Land: Österreich
                    </p>
                    <h3>Kontakt</h3>
                    <p>
                        Telefon: <a href="tel:+436769579022">+43 676 9579022</a>
                    </p>
                    <p>
                        E-Mail:
                    </p>
                    <ul class="imprmail">
                        <li><a href="mailto:maximilian.hagn@htl.rennweg.at" target="_blank">maximilian.hagn@htl.rennweg.at</a>
                        </li>
                        <li><a href="mailto:web.creativePuzzle@gmail.com"
                               target="_blank">web.creativePuzzle@gmail.com</a></li>
                        <li><a href="mailto:team.creativePuzzle@gmail.com"
                               target="_blank">team.creativePuzzle@gmail.com</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------- Footer Description ---------------------------------------->
    <p class="p-footer centered">Created by CreativePuzzle</p>
</footer>

<!---------------------------------------- Javascript ---------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.0.js" integrity="sha256-TFWSuDJt6kS+huV+vVlyV1jM3dwGdeNWqezhTxXB/X8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../lib/js/validator.js"></script>
<script src="../lib/js/bootstrap.js"></script>
<script src="../lib/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });
</script>
</body>
</html>
