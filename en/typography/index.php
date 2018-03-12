<!DOCTYPE html>
<html lang="en">
<head>
    <!---------------------------------------- Metadata ---------------------------------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <title>CreativePuzzle Framework</title>

    <!---------------------------------------- CSS Imports ---------------------------------------->
    <link rel="alternate" hreflang="en" href="../">
    <link rel="shortcut icon" href="../../lib/img/puzzle.png">
    <link href="../../lib/css/imports.css" rel="stylesheet">

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
                                                                                  src="../../lib/img/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse navpadding">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link" href="../get_started/">Get Started</a></li>
                    <li><a class="nav-link active">Typography</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Templates</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../../typography/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---------------------------------------- Side-Navigation ---------------------------------------->
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#title">Title</a></li>
        <li class="aside-scroll"><a href="#heading">Headline</a></li>
        <li class="aside-scroll"><a href="#paragraph">Paragraph</a></li>
        <li class="aside-scroll"><a href="#shadow">Text Shadow</a></li>
        <li class="aside-scroll"><a href="#position">Text Alignment</a></li>
        <li class="aside-scroll"><a href="#schrift">Font Family</a></li>
        <li class="aside-scroll"><a href="#schriftart">Font Look</a></li>
        <li class="aside-scroll"><a href="#lists">List</a></li>
        <li class="aside-scroll"><a href="#andere">Additional Formats</a></li>
        <li class="aside-scroll"><a href="#link">Links</a></li>
    </ul>
</aside>

<!---------------------------------------- Main ---------------------------------------->
<main class="content">
    <!---------------------------------------- Title Des ---------------------------------------->
    <article>
        <h1>Typography</h1>
        <p>
            Die Typografie unseres Creative Frameworks ist in verschiedene Bereiche gegliedert.
            Wie du sie einsetzt und welche Option sie umfasst ist in den unten angeführten Bereichen
            beschrieben. In diesm Abschnitt findest du alles zur Typografie des Frameworks.
        </p>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Table of Content ---------------------------------------->
    <div class="row">
        <div class="subnav-mobile">
            <h3 class="title">Table of Content</h3>
            <nav>
                <ul class="dir_pad">
                    <li>
                        <a class="directory" href="#title">Title</a>
                    </li>
                    <li>
                        <a class="directory" href="#heading">Headline</a>
                    </li>
                    <li>
                        <a class="directory" href="#paragraph">Paragraph</a>
                    </li>
                    <li>
                        <a class="directory" href="#shadow">Text Shadow</a>
                    </li>
                    <li>
                        <a class="directory" href="#position">Text Alignment</a>
                    </li>
                    <li>
                        <a class="directory" href="#schrift">Font Family</a>
                    </li>
                    <li>
                        <a class="directory" href="#schriftart">Font Look</a>
                    </li>
                    <li>
                        <a class="directory" href="#lists">List</a>
                    </li>
                    <li>
                        <a class="directory" href="#andere">Additional Formats</a>
                    </li>
                    <li>
                        <a class="directory" href="#link">Links</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-------------------- Content Title -------------------->
    <article id="title" class="section scrollspy">
        <h2 class="title">Titel</h2>
        <p>
            Titel umfasst 5 verschiedene Titel Klassen die die Größe einer Überschrift bestimmen.
            Die Klassen beginnen mit dem Klassennamen <i class="classname">title-size,</i> wobei anstatt
            <i class="classname">size</i> die gewünschte Größe verwendet werden muss. Es gibt folgende Größen
            <i class="classname">.xs,</i><i class="classname">.sl,</i><i class="classname">.md,</i><i
                class="classname">.lg</i>
            und <i class="classname">.xl</i>. Titel sollten für Überschriften im Zusammenhang mit Paragraphen
            verwendet werden.
        </p>
        <div class="row content_img">
            <img class="img-responsive" src="../../lib/img/typografie/title.PNG">
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><span class="title-xl">Titel</span>

<span class="title-lg">Titel</span>

<span class="title-md">Titel</span>

<span class="title-sl">Titel</span>

<span class="title-xs">Titel</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Heading -------------------->
    <article id="heading" class="section scrollspy">
        <h2>Heading</h2>
        <p>
            Die Überschriften Tags <i class="tagname">h1</i> bis <i class="tagname">h6</i> wurden ebenfalls von uns
            gestyled mit
            unterschiedlichen Größen. Für die Überschriften wird kein Klassenname benötigt.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/heading.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><h1>Heading 1</h1>

<h2>Heading 2</h2>

<h3>Heading 3</h3>

<h4>Heading 4</h4>

<h5>Heading 5</h5>

<h6>Heading 6</h6></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Paragraph -------------------->
    <article id="paragraph" class="section scrollspy">
        <h2>Paragraph</h2>
        <p>
            Eben so wie die Überschriften Tags wurde auch der <i class="tagname">p</i> Tag gestyled um es dem
            Benutzer einfach zu machen
            Content Elemente zu erstellen die sich aus einem Titel oder Heading sowie einem Paragraphen bestehen.
            Der <i class="tagname">p</i>
            Tag hat einen <i class="tagname">margin</i> von 1rem und eine <i class="tagname">line-height</i> von
            1.5rem.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/paragraph.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p>Das ist ein Paragraph</p>

<p>Das ist ein weiterer Paragraph</p>

<p>Das ist der letzte Paragraph</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Text-Shadow -------------------->
    <article id="shadow" class="section scrollspy">
        <h2>Textschatten</h2>
        <p>
            Das Creative Framework bietet eine Auswahl an Text Schatten die in die zwei Arten <i
                class="classname">hard</i>
            und
            <i class="classname">blur</i> geliedert sind. Mit dem Klassenname <i
                class="classname">text-art-stärke</i> können
            die gewünschten Schatten aufgerufen werden. Bei der Text Schattenstärke gibt es 3 verschiedene
            Abstufungen <i class="classname">1,</i>
            <i class="classname">2,</i> und <i class="classname">3</i>. Die Klasse für einen <i
                class="classname">blur</i>
            Schatten könnte dann
            so ausschauen: <i class="classname">text-blur-3</i>.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/text_shadow.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p class="text-blur-1">Text Blur-Schatten leicht | <span class="text-hard-1">Text Hard-Shadow leicht</span></p>

<p class="text-blur-2">Text Blur-Schatten mittel | <span class="text-hard-2">Text Hard Shadow mittle</span></p>

<p class="text-blur-3">Text Blur-Schatten stark  | <span class="text-hard-3">Text Hard-Shadow stark</span></P></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Text Position -------------------->
    <article id="position" class="section scrollspy">
        <h2>Textausrichtung</h2>
        <p>
            Für die Textausrichtung gibt es ebenfalls Klassen die dem Benutzer das Ausrichten von Text erleichtern.
            Die Klassen sind
            ebenfalls mit dem Klassennamen <i class="classname">text-position</i> aufrufbar wobei es drei Arten der
            Position gibt.
            Position Rechts <i class="classname">text-right,</i> Position Links <i class="classname">text-left</i>
            und Position Zentriert
            <i class="classname">text-center.</i>
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/text_position.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p class="text-right">Dieser Paragraph ist rechts ausgerichtetet.</p>

<p class="text-left">Dieser Paragraph ist links ausgerichtetet.</p>

<p class="text-center">Dieser Paragraph ist zentriertet.</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Font-Weight -------------------->
    <article id="schrift" class="section scrollspy">
        <h2>Schriftstärke</h2>
        <p>
            Mit dem Klassennamen <i class="classname">text-stärke</i> kann die Schriftstärke eines Absatzes oder
            eines einzelnen Text
            Elements bestimmt werden. Als Optionen für die Stärke gibt es 3 unterschiedliche Klassen <i
                class="classname">text-bold,</i>
            <i class="classname">text- medium</i> und <i class="classname">text-light.</i> Die Klasse <i
                class="classname">text-bold</i>
            stezt die <i class="tagname">font-weight</i> auf <i class="tagname">bold</i>. Ebenso setzen die Klassen
            <i class="classname">text-medium</i> und <i class="classname">text-light</i> die <i class="tagname">font-weight</i>
            des Elements
            auf <i class="tagname">medium</i> und <i class="tagname">lighter</i>.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/text_staerke.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p class="text-bold">Dieser Text ist bold</p>

<p class="text-medium">Dieser Text ist medium</p>

<p class="text-light">Dieser Text ist light</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Font-Family -------------------->
    <article id="schriftart" class="section scrollspy">
        <h2>Schriftart</h2>
        <p>
            Es gibt eine Vielzahl an Schriftarten die unser Framework bereitstellt. Es wurden 10 unterschiedliche
            Schriftarten
            von uns ausgewählt die über Klassenname aufgerufen werden können. Die Klassenname setzen sich aus
            <i class="classname">font-schriftart</i> zusammen. Anstatt <i class="classname">schriftart</i> ist der
            gewünschte
            Schriftname einzusetzen. Die Klasse der Schriftart sollte am besten in den <i class="tagname">body</i>
            eingefügt
            werden um dem Dokument einen einheitlichen Stil zu verpassen. Wir bieten folgende Schriftarten an:
            <i class="classname">roboto</i>,<i class="classname">open-sans</i>,<i class="classname">merriweather</i>,
            <i class="classname">nunito</i>,<i class="classname">raleway</i>,<i class="classname">roboto-serif</i>,
            <i class="classname">merriweather-serif</i>,<i class="classname">pt-serif</i>,<i class="classname">eb-garamond</i>,
            <i class="classname">source</i>,<i class="classname">amatic</i> und <i class="classname">kavicanar,</i>.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/schrift_art.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><span class="font-roboto">Roboto</span>

<span class="font-merriweather">Merriweather</span>

<span class="font-nunito">Nunito</span>

<span class="font-raleway">Raleway</span>

<span class="font-roboto-serif">Roboto Serif</span>

<span class="font-merriweather-serif">Merriweather Serif</span>

<span class="font-pt-serif">PT Serif</span>

<span class="font-eb-garamond">EB Garamond</span>

<span class="font-source">Source</span>

<span class="font-amatic">Amatic</span>

<span class="font-kavicanar">Kavincanar</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Listen -------------------->
    <article id="lists" class="section scrollspy">
        <h2>Listen</h2>
        <p>
            Es wurden ebenfalls mehrere Klassen zum stylen von Listen bereitgestellt. Alle Listen <i
                class="tagname">ul,</i>
            <i class="tagname">ol</i> und <i class="tagname">dl.</i> Es gibt die Klasse <i class="classname">list-inline,</i>
            <i class="classname">list-styled</i> und <i class="classname">List-unstyled</i>. Bei Alle Listen wurde
            <i class="tagname">margin-top</i> entfernt und ein <i class="tagname">margin-bottom</i> 1rem
            hinzugefügt. Die Klasse
            <i class="classname">list-unstyled</i> hat keine Aufzählungspunkte und die Klasse <i class="classname">list-inline</i>
            stellt eine Liste als Inline Block Element dar. Die gestylte Liste <i class="classname">list-styled</i>
            hat nicht gefüllte
            Punkte als Auflistungszeichen sowie die allgemeinen <i class="tagname">margin</i> und <i
                class="tagname">padding</i>
            Eigenschaften aller Listen.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/list.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><ul class="list-unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>consetetur sadipscing elitr</li>
    <li>sed diam nonumy eirmod tempor invidunt ut</li>
    <li>dolore magna aliquyam erat</li>
    <li>sed diam voluptua</li>
</ul>

<ul class="list-styled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>consetetur sadipscing elitr</li>
    <li>sed diam nonumy eirmod tempor invidunt ut</li>
    <li>dolore magna aliquyam erat</li>
    <li>sed diam voluptua</li>
</ul>

<ul class="list-inline">
    <li>Lorem ipsum dolor sit amet</li>
    <li>consetetur sadipscing elitr</li>
    <li>sed diam nonumy eirmod tempor invidunt ut</li>
    <li>dolore magna aliquyam erat</li>
    <li>sed diam voluptua</li>
</ul></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Other-Formats -------------------->
    <article id="andere" class="section scrollspy">
        <h2>Inline Text Elemente</h2>
        <p>
            Inline Text Elemente können verwendet werden um Text hervor zu heben oder ermöglichen spezielle
            Formatierung von Text. Creative Framework hat folgende Tags <i class="tagname">em,</i>
            <i class="tagname">i,</i><i class="tagname">b,</i><i class="tagname">del,</i> <i
                class="tagname">small,</i>
            <i class="tagname">strong,</i> und <i class="tagname">mark</i> standartgemäß gestylt. Besonders wichtige
            Inline Text Elemente sind <i class="tagname">i</i> für kurisven Text, <i class="tagname">b</i> für fett
            geschrieben Text
            und <i class="tagname">del</i> für durchgestrichenen Text.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/others.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p>Ein Teil des Textes ist leicht <em>hervorgehoben</em></p>

<p>Ein Teil des Textes ist <i>kursive</i></p>

<p>Ein Teil des Textes is <b>bold</b></p>

<p>Ein Teil des Textes ist <del>durchgestrichen</del>

<p>Ein Teil des Textes ist <strong>strong</strong></p>

<p><mark>Dieser Text ist makiert.</mark></p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!-------------------- Content Links -------------------->
    <article id="link" class="section scrollspy">
        <h2>Links</h2>
        <p>Da Links ein wichtiger Bestandteil einer Webseite sind, besitzt unser Framework eine Auswahl an verschiedenen Link Designs.
            Sie können einfach über den Klassennamen <i class="classname">link-art</i> aufgerufen werden. Bei der Art der Links stehen folgende
            Auswahlmöglichkeiten zu Verfügung: <i class="classname">link-slide</i>, <i class="classname">link-underline</i>,
            <i class="classname">link-color</i> und <i class="classname">link-bg</i>.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../lib/img/typografie/links.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><a href="https://www.google.at" class="link-slide">www.google.at</a>

<a href="https://www.google.at" class="link-underline">www.google.at</a>

<a href="https://www.google.at" class="link-color">www.google.at</a>

<a href="https://www.google.at" class="link-bg">www.google.at</a></xmp></pre>
            </code>
        </div>
    </article>
</main>


<!---------------------------------------- Footer ---------------------------------------->
<footer class="footer">
    <ul class="sociallist">
        <!---------------------------------------- Social Media Icons ---------------------------------------->
        <li><a target="_blank" href="https://www.facebook.com/CreativePuzzleDevelop/"><img src="../../lib/img/facebook.png"
                                                                                           alt="facebook logo"
                                                                                           class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://www.instagram.com/creative.puzzle/"><img src="../../lib/img/instagram.png"
                                                                                      alt="instagram logo"
                                                                                      class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://twitter.com/creative_puzzle?lang=de"><img src="../../lib/img/twitter.png"
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../../lib/js/validator.js"></script>
<script src="../../lib/js/bootstrap.js"></script>
<script src="../../lib/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });
</script>
</body>
</html>
