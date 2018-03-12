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
    <title>Creative Framework Get Started</title>

    <!---------------------------------------- CSS Imports ---------------------------------------->
    <link rel="alternate" hreflang="en" href="../en">
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
                <a class="navbar-brand logopadding logo" href="../"><img class="navicon" alt="Brand"
                                                                                  src="../lib/img/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse navpadding">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link active">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typografie</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Komponenten</a></li>
                    <li><a class="nav-link" href="../templates/">Vorlagen</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../en/get_started/">en</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---------------------------------------- Side-Navigation ---------------------------------------->
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#download">Download</a></li>
        <li class="aside-scroll"><a href="#cdn">CDN</a></li>
        <li class="aside-scroll"><a href="#sourcecode">Source Code</a></li>
        <li class="aside-scroll"><a href="#includecss">Include CSS</a></li>
        <li class="aside-scroll"><a href="#includesass">Sass kompilieren</a></li>
        <li class="aside-scroll"><a href="#dom">DOM</a></li>
    </ul>
</aside>

<!---------------------------------------- Main ---------------------------------------->
<main class="content">
    <!---------------------------------------- Side Des ---------------------------------------->
    <div class="row">
        <h1>Get Started</h1>
        <p class="intro">Beginn mit Creative Framework deine ersten eigenen Websites zu entwickeln.
            Starte damit dir zu überlegen auf welche der bereitgestellten Methoden du unser Framework
            in deine Website integrieren willst. In diesm Abschnitt findest du alles zur
            Einbindung des Frameworks.</p>
    </div>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Side-Navigation Mobile ---------------------------------------->
    <div class="row">
        <div class="subnav-mobile">
            <h3>Inhaltsverzeichnis</h3>
            <nav>
            <ul class="dir_pad">
                <li class="directory"><a href="#download">Download</a></li>
                <li class="directory"><a href="#cdn">CDN</a></li>
                <li class="directory"><a href="#sourcecode">Source Code</a></li>
                <li  class="directory"><a href="#includecss">Include CSS</a></li>
                <li class="directory"><a href="#includesass">Sass kompilieren</a></li>
                <li class="directory"><a href="#dom">DOM</a></li>
            </ul>
            </nav>
        </div>
    </div>
    <div class="container-line">
        <hr>
    </div>

    <!----------------------------------------  Content Download ---------------------------------------->
    <article id="download" class="section scrollspy">
            <h2>Download</h2>
            <p>
                Creative Framework gibt es als zwei unterschiedliche Dateiformate. Welche der Benutzer bevorzugt
                bleibt Ihm überlassen. Unten finden Sie einen kurzen Text der die Formate bechreibt. Um mit
                Creative Framework zu starten, muss nur eine der beiden Versionen heruntergeladen werden
            </p>
            <div class="row">
                <div class="col xs12 l6 xl4">
                    <h3>Creative Framework</h3>
                    <p class="p-footer">
                        Das ist die Standart CSS Version unseres Frameworks es wird in einer
                        minified Version und einer unminified Version heruntergeladen. Diese Option sollte
                        verwendet werden wenn kein Sass Vorwissen vorhanden ist.
                    </p>
                    <p>
                        <button type="button" onclick="location.href='index.php'" class="download">
                            Creative Framework
                        </button>
                    </p>
                </div>
                <div class="col xs12 l6 xl4">
                    <h3>Creative Sass</h3>
                    <p class="p-footer">
                        Das ist die Sass Version unseres Frameworks sie beinhaltet alle Sass-Quelldatein
                        und kann nach belieben verändert werden. Für diese Option wird ein Sass-Compiler benötigt.
                        Sollte nur mit Vorwissen verwendet werden.
                    </p>
                    <p>
                        <button type="button" onclick="location.href='index.php'" class="download">
                            Creative Sass
                        </button>
                    </p>
                </div>
            </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content CDN ---------------------------------------->
    <article id="cdn" class="section scrollspy">
        <h2>CDN</h2>
        <p>
            Du kannst Creative Framework auch unter einer CDN finden. Durch den unten
            angeführten Tag bindest du unser das Framework über das Web ein. Das Sylesheet ist bereits compiled und
            minified.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><head>
    <!---------------------------------------- Metadata ---------------------------------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!---------------------------------------- Tabbezeichnung ---------------------------------------->
    <title>Meine eigene Webseite</title>

    <!---------------------------------------- Einbindung CSS ---------------------------------------->
    <link href="http://www.creative-puzzle.com/css" rel="stylesheet" type="text/css">
</head></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content SourceCode ---------------------------------------->
    <article id="sourcecode" class="section scrollspy">
        <h2>Source Code</h2>
        <p>
            Der Creative Frame Source Code enthält ein Zip File welches die unten angeführte
            Ordnerstruktur enthält. Er umfasst die compilierten Files als auch die Sass Files sowie
            Javascript Files.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>creative_framework/
├── dist/
│ ├── css/
│ └── js/
├── html/
│ └── templates/
├── js/
└── scss/</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content CSS Include ---------------------------------------->
    <article id="includecss" class="section scrollspy">
        <h2>Include CSS</h2>
        <p>
            Mit dem unten angeführten Tag können sie die heruntergeladene CSS Version ganz einfach
            in ihre Website einbinden. Vorsicht, je nachdem in welchem Verzeichnis sich die
            Creative Framework CSS Datei befindet muss der Pfad geändert werden. In Beispiel unterhalb
            liegt die CSS Datei im selben Verzeichnis wie die HTML Datei in der verlinkt wird.
            Mit <i class="tagname">/</i> können sie tiefer in Verzeichnisse wechseln und mit <i class="tagname">../</i> aus einem Verzeichnis
            hinaus wechseln.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><link href="creative_framework.min.css" rel="stylesheet" type="text/css"></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content SASS Include ---------------------------------------->
    <article id="includesass" class="section scrollspy">
        <h2 class="title">Sass kompilieren</h2>
        <p>
            Dieser Bereich ist nur dann relevant wenn du dich für die Sass Version des Frsmworks entschieden hast.
            Anstatt eines großen CSS Datei wird ein Ordner mit vielen .sass Dateien heruntergeladen
            der die unten angeführte Ordnerstruktur besitzt. Jede Sass Datei beinhaltet Styles für
            verschiedene Komponenten.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>sass/
├── colors
├── gridSystem
├── helper
├── header
├── footer
├── buttons
├── forms
├── typografie
├── master</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content DOM ---------------------------------------->
    <article id="dom" class="section scrollspy">
        <h2>DOM</h2>
        <p>
            Eine Webseite liegt dem Browser zunächst als einfacher Text, der mit der Auszeichnungssprache HTML formatiert ist, vor.
            Während der Browser den Code über das Netz empfängt, verarbeitet er ihn von oben nach unten. Diese Aufgabe übernimmt der
            sogenannte Parser. Der Parser überführt den HTML-Code in eine Objektstruktur, die dann im Arbeitsspeicher vorgehalten wird.
            Diese Objektstruktur besteht aus verschachtelten Knoten, wie Elementknoten, Attributknoten und Textknoten, die in einer
            Baumstruktur angeordnet sind. Der Browser nutzt für alle weiteren Operationen diese Objektstruktur, nicht den HTML-Quellcode,
            an dem üblicherweise gearbeitet wird.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive dom_demo" src="../lib/img/get_started/dom.png" alt="Document Object Model Abbildung">
            </div>
        </div>
    </article>
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
