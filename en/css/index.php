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
                    <li><a class="nav-link" href="../typography/">Typography</a></li>
                    <li><a class="nav-link active">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Template</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../../css/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---------------------------------------- Side-Navigation ---------------------------------------->
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#gridsystem">Grid System</a></li>
        <li class="aside-subnav"><a href="#container">Container</a></li>
        <li class="aside-subnav"><a href="#column">Column</a></li>
        <li class="aside-subnav"><a href="#nesting">Nesting</a></li>
        <li class="aside-subnav"><a href="#position">Positioning</a></li>
        <li class="aside-subnav"><a href="#extendedposition">Extended Positioning</a></li>
        <li class="aside-subnav"><a href="#sassconfig">Sass Configuration</a></li>
        <li class="aside-scroll"><a href="#colorsystem">Color System</a></li>
        <li class="aside-subnav"><a href="#wheel">Color Wheel</a></li>
        <li class="aside-subnav"><a href="#extracolors">Extended Colors</a></li>
        <li class="aside-subnav"><a href="#colorthemes">Color Themes</a></li>
        <li class="aside-scroll"><a href="#media">Media</a></li>
        <li class="aside-subnav"><a href="#images">Images</a></li>
        <li class="aside-subnav"><a href="#video">Videos</a></li>
        <li class="aside-subnav"><a href="#audio">Audio</a></li>
        <li class="aside-scroll"><a href="#table">Table</a></li>
        <li class="aside-scroll"><a href="#helper">Tools</a></li>
        <li class="aside-scroll"><a href="#shadow">Box Shadow</a></li>
        <li class="aside-scroll"><a href="#showhide">Hide Elements</a></li>
        <li class="aside-scroll"><a href="#parallax">Parallax</a></li>
        <li class="aside-scroll"><a href="#animations">Css Animations</a></li>
        <li class="aside-subnav"><a href="#keyframes">Keyframes</a></li>
        <li class="aside-subnav"><a href="#animelem">Opportunities</a></li>
    </ul>
</aside>


<!---------------------------------------- Content ---------------------------------------->
<main class="content">
    <!---------------------------------------- Introduction ---------------------------------------->
    <article>
        <h1>CSS</h1>
        <p>In diesem Abschnitt werden die CSS Elemente des Frameworks erklärt. Die wichtigsten
            Layout Komponenten sind Container sowie das Grid System. Des weiteren werden auch Tabellen
            und einige Klassen zur Farbauswahl erläutert.
        </p>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Table of Content ---------------------------------------->
    <div class="row">
        <div class="subnav-mobile">
            <h3>Table of Content</h3>
            <nav>
                <ul class="dir_pad">
                    <li class="directory"><a href="#gridsystem">Grid System</a></li>
                    <li class="sub-directory"><a href="#container">Container</a></li>
                    <li class="sub-directory"><a href="#column">Column</a></li>
                    <li class="sub-directory"><a href="#nesting">Nesting</a></li>
                    <li class="sub-directory"><a href="#position">Positioning</a></li>
                    <li class="sub-directory"><a href="#extendedposition">Extended Positioning</a></li>
                    <li class="sub-directory"><a href="#sassconfig">Sass Configuration</a></li>
                    <li class="directory"><a href="#colorsystem">Color System</a></li>
                    <li class="sub-directory"><a href="#wheel">Color Wheel</a></li>
                    <li class="sub-directory"><a href="#extracolors">Extended Colors</a></li>
                    <li class="sub-directory"><a href="#colorthemes">Color Themes</a></li>
                    <li class="directory"><a href="#media">Media</a></li>
                    <li class="sub-directory"><a href="#images">Images</a></li>
                    <li class="sub-directory"><a href="#video">Videos</a></li>
                    <li class="sub-directory"><a href="#audio">Audio</a></li>
                    <li class="directory"><a href="#table">Table</a></li>
                    <li class="directory"><a href="#helper">Tools</a></li>
                    <li class="directory"><a href="#shadow">Box Shadow</a></li>
                    <li class="directory"><a href="#showhide">Hide Elements</a></li>
                    <li class="directory"><a href="#parallax">Parallax</a></li>
                    <li class="directory"><a href="#animations">Css Animations</a></li>
                    <li class="sub-directory"><a href="#keyframes">Keyframes</a></li>
                    <li class="sub-directory"><a href="#animelem">Opportunities</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!---------------------------- Content Grid System ---------------------------->
    <article id="gridsystem" class="section scrollspy">
        <h2>Grid System</h2>
        <p>
            Gestalte komplexe Layouts mithilfe eines 12 Spalten Grid Systems. Eine Webseite kann gedanklich in eine
            Art
            Tabelle mit mehreren Spalten und Zeilen unterteilt werden. Ist die Tabelle zum Beispiel 12 Spalten breit
            und 1
            Zeile hoch so sind über 450.000.000 Möglichkeiten der Positionierung möglich. Durch das Implementieren
            weiterer
            Klassen sind noch einmal mehr Optionen offen.
        </p>
    </article>

    <!---------------------------- Content Container | Ein Table mit Infos fehlt (Breakpoint Infos) ---------------------------->
    <article id="container" class="section scrollspy">
        <h3>Container</h3>
        <p>Container umschließen mehrere DOM Elemente und definieren deren maximale Breite. Im Optimalfall sollten
            die
            Containerklassen in semantische Elemente eingebunden werden, also zum Beispiel im <i class="classname">&lt;main&gt;
                &lt;/main&gt;</i>
            oder <i class="classname"> &lt;section&gt; &lt;/section&gt; </i> Tag.
        </p>

        <div class="row center"><div class="col xs10 table-scroll">

            <table class="table-stripped">
            <tr>
                <th></th>
                <th>Sehr Klein</th>
                <th>Klein</th>
                <th>Mittel</th>
                <th>Groß</th>
                <th>Sehr Groß</th>
                <th>Elastisch</th>
            </tr>
            <tr>
                <td>Breite</td>
                <td>60%</td>
                <td>80%</td>
                <td>90%</td>
                <td>95%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>Klassenname</td>
                <td><i class="classname">.container-xs</i></td>
                <td><i class="classname">.container-s</i></td>
                <td><i class="classname">.container-m</i></td>
                <td><i class="classname">.container-l</i></td>
                <td><i class="classname">.container-xl</i></td>
                <td><i class="classname">.container-elastic</i></td>
            </tr>

        </table>
        </div></div>

        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" draggable="false" src="../../lib/img/css/container.png">
            </div>
        </div>

        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div>

<div class="container-m">.container-m</div>

<div class="container-l">.container-l</div>

<div class="container-xl">.container-xl</div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Column ---------------------------->
    <article id="column" class="section scrollspy">
        <article>
            <h3>Gleiche Spaltengröße</h3>
            <p>Nachdem die Größen der Container bestimmt wurden, wird eine <i class="classname">.row</i> Klasse
                eingerichtet. Jeder <i class="tagname">&lt;div&gt;</i>
                Tag mit
                der Klasse <i class="classname">.row</i> repräsentiert eine Zeile in unserer gedanklichen Tabelle.
                Innerhalb der Row können bis zu
                12 <i class="classname">.col</i>
                Klassen eingebunden werden. Diese teilen sich den freien Platz untereinander auf.
            </p>

            <div class="row content_img">
                <div class="col xs12">
                    <img class="img-responsive" src="../../lib/img/css/column.png">
                </div>
            </div>

            <div class="codeBox">
                <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">Erste von zwei Spalten</div>
    <div class="col">Zweite von zwei Spalten</div>
</div>

<div class="row center">
    <div class="col">Erste von drei Spalten</div>
    <div class="col">Zweite von drei Spalten</div>
    <div class="col">Dritte von drei Spalten</div>
</div></xmp></pre>
                </code>
            </div>

        </article>
        <article>
            <h3 class="title">Spaltengröße setzen</h3>
            <p>Alternativ können einzelne oder alle Elemente mit einer bestimmten Größe versehen werden. Je nach
                Vorsilbe werden
                andere Bildschirmgrößen angesprochen. Sollen Elemente auf jeder Bildschirmgrößen gleich groß sein, so
                reicht es
                <i class="classname">.xs</i> zu definieren.
            </p>

            <div class="row center"><div class="col xs10 table-scroll">

                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>Sehr Klein (< 400px)</th>
                        <th>Klein (< 600px)</th>
                        <th>Mittel (< 950px)</th>
                        <th>Groß (< 1240px)</th>
                        <th>Sehr Groß (> 1240px)</th>
                    </tr>
                    <tr>
                        <td>Klassenname</td>
                        <td><i class="classname">.xs</i></td>
                        <td><i class="classname">.s</i></td>
                        <td><i class="classname">.m</i></td>
                        <td><i class="classname">.l</i></td>
                        <td><i class="classname">.xl</i></td>
                    </tr>
                    <tr>
                        <td>Spaltenanzahl</td>
                        <td>12 (<a class="btn-link" href="#sassconfig">Konfigurierbar</a>)</td>
                    </tr>
                    <tr>
                        <td>Verschachtelbar</td>
                        <td>Ja</td>
                    </tr>
                    <tr>
                        <td>Spalten sortieren</td>
                        <td>Ja</td>
                    </tr>
                </table>
            </div></div>

            <div class="row content_img">
                <div class="col xs12">
                    <img class="img-responsive" src="../../lib/img/css/widercolumn.png">
                </div>
            </div>

            <div class="codeBox">
                <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">1 von 3</div>
    <div class="col xs6">.xs6 (wider)</div>
    <div class="col">3 von 3</div>
</div>

<div class="row">
    <div class="col">1 von 3</div>
    <div class="col xs9">.xs9 (wider)</div>
    <div class="col">3 von 3</div>
</div>

<div class="row">
    <div class="col xs7">.col .xs7</div>
    <div class="col">2 von 3</div>
    <div class="col">3 von 3</div>
</div></xmp></pre>
                </code>
            </div>
        </article>
    </article>

    <!---------------------------- Content Nesting ---------------------------->
    <article id="nesting" class="section scrollspy">
        <h3>Verschachtelung</h3>
        <p>Ebenfalls möglich ist es, mehrere Tabellen ineinander zu verschachteln - so entstehen noch mehr
            Möglichkeiten ein
            Layout zu gestalten. Alle zuvor erwähnten Attribute sind weiterhin anwendbar.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/nesting.png">
            </div>
        </div>

        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">Level 1 .col</div>
    <div class="col">Level 1 .col

        <div class="row">
            <div class="col">Level 2 .col

                <div class="row">
                    <div class="col">Level 3 .col</div>
                    <div class="col">Level 3 .col</div>
                </div>

            </div>
            <div class="col">Level 2 .col</div>
        </div>

    </div>
    <div class="col">Level 1 .col</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Horizontal Positioning ---------------------------->
    <article id="position" class="section scrollspy">
        <h3>Horizontale Zentrierung</h3>
        <p>Füllen die angegebenen Spalten in einer Tabelle nicht die maximale Breite des Bildschirms aus, so können
            diese
            nach belieben positioniert werden. Standardmäßig werden Elemente und Texte Rechtsbündig zentriert.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/gridpositioning.png">
            </div>
        </div>

        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row start">
    <div class="col"> .row in .container-m | .start</div>
</div>

<div class="row center">
    <div class="col xs3"> .row in .container-m | .center</div>
</div>

<div class="row end">
    <div class="col"> .row in .container-m | .end</div>
</div></xmp></pre>
            </code>
        </div>

        <!---------------------------- Vertical Positioning ---------------------------->
        <h3>Vertikale Zentrierung</h3>
        <p>Im Falle, dass ein Container höher als die eingeschlossenen Elemente, können die Kindelemente entweder
            Oben,
            Unten oder in der Mitte positioniert werden.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/verticalcenter.png">
            </div>
        </div>

        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row top">
	<div class="col blue-medium"> .row in .container-m | .top</div>
</div>

<div class="row row-cust-height middle">
	<div class="col blue-medium"> .row in .container-m | .middle</div>
</div>

<div class="row row-cust-height bottom">
	<div class="col blue-medium"> .row in .container-m | .bottom</div>
</div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Extended Positioning ---------------------------->
    <article id="extendedposition" class="section scrollspy">
        <h3>Erweiterte Positionierung</h3>
        <p>Auch im Nachhinein ist es noch möglich die Position einiger Elemente zu ändern. Zum Beispiel können die
            Spalten
            geordnet oder eingerückt werden.
        </p>

        <!---------------------------- Grid Einrücken ---------------------------->
        <h3 class="title">Spalten einrücken</h3>
        <p>Um keine leeren Spalten definieren zu müssen, können einzelne Elemente weiter nach rechts gedrückt
            werden. Die
            Logik ist deckend zu der des Grid Systems und somit einfach verknüpfbar.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/push.png">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col push-xs2"> .col .push-xs2</div>
</div>

<div class="row">
    <div class="col push-xs4"> .col .push-xs4</div>
</div>

<div class="row">
    <div class="col push-xs6"> .col .push-xs6</div>
</div>

<div class="row">
    <div class="col push-xs8"> .col .push-xs8</div>
</div>

<div class="row">
    <div class="col push-xs10"> .col .push-xs10</div>
</div>

<div class="row">
    <div class="col push-xs11"> .col .push-xs11</div>
</div></xmp></pre>
            </code>
        </div>

        <!---------------------------- Ordering ---------------------------->
        <h3 class="title">Ordnen der Spalten</h3>
        <p>Sind nun zum Beispiel 6 Column Elemente definiert und das letzte Element im Sourcecode soll ganz nach
            vorne
            gebracht werden, so kann die Klasse first verwendet werden. Um das Gegenteil dazu zu erreichen wird die
            Klasse
            last verwendet. Weiteres kann über die Klassen <i class="classname">.order1</i> - <i class="classname">.order12</i>
            die komplette Ordnung verändert werden.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/ordering.png">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row center">
    <div class="col"> DOM Element 1 </div>
    <div class="col"> DOM Element 2 </div>
    <div class="col first"> DOM Element 3 | .first</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Initialization Sass ---------------------------->
    <article id="sassconfig" class="section scrollspy">
        <h3>Mit Sass personalisieren</h3>
        <p>Falls Vorkenntnisse über Precompiler und im Speziellen über die Sprachen SASS und SCSS vorhanden ist,
            können die
            Werte vordefinierte Variablen geändert und das Stylesheet personalisiert werden. Zum Beispiel kann die
            Anzahl
            der Spalten von 12 auf 24 geändert werden.</p>
    </article>

    <!---------------------------- Content Vars ---------------------------->
    <article id="variablen" class="section scrollspy">
        <h3>Variablen</h3>
        <p>Des Weiteren könnten die Breakpoints oder der Seitenrand verändert werden.</p>
        <div class="row center"><div class="col xs12 s12 m12 l10 xl6 table-scroll">

            <table class="table-stripped">
                <tr>
                    <th></th>
                    <th>Variablenname</th>
                    <th>Werte</th>
                </tr>
                <tr>
                    <td>Spaltenanzahl Grid</td>
                    <td><i class="varname">$anzColumn</i></td>
                    <td>Nummer (0-24 Empfohlen)</td>
                </tr>
                <tr>
                    <td>Grid Breakpoints</td>
                    <td><i class="varname">$small-min</i></td>
                    <td>Nummer (0-&infin;)</td>
                </tr>
                <tr>
                    <td>Grid Breakpoints</td>
                    <td><i class="varname">$medium-min</i></td>
                    <td>Nummer (0-&infin;)</td>
                </tr>
                <tr>
                    <td>Grid Breakpoints</td>
                    <td><i class="varname">$large-min</i></td>
                    <td>Nummer (0-&infin;)</td>
                </tr>
                <tr>
                    <td>Grid Breakpoints</td>
                    <td><i class="varname">$xxlarge-min</i></td>
                    <td>Nummer (0-&infin;)</td>
                </tr>
                <tr>
                    <td>Automatischer Margine</td>
                    <td><i class="varname">$margin-auto</i></td>
                    <td>Prozentanzahl (0-100)</td>
                </tr>

            </table>
        </div></div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Color System ---------------------------->
    <article id="colorsystem" class="section scrollspy">
        <h2>Farb System</h2>
        <p>Das Framework bietet eine kleine Selektion an vordefinierten Farbräumen. Neben den Grundfarben bieten wir
            einen Erweiterten Farbraum und vordefinierte Themen, wie zum Beispiel eines für Farben des Herbstes.</p>

        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class=„.orange-medium“></div>

<p class=„.text-orange-medium“></p></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Colorwheel ---------------------------->
    <article id="wheel" class="section scrollspy">
        <h3>Farbrad</h3>
        <p>Hier werden alle Farbrad Farben mit 12 verschiedenen Tans als Klassennamen aufbereitet. </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/farbrad.png">
            </div>
        </div>
    </article>

    <!---------------------------- Content Extra Spectrum ---------------------------->
    <article id="extracolors" class="section scrollspy">
        <h3>Erweitertes Spektrum</h3>
        <p>Der erweiterte Farbraum fügt weitere wichtige Farben zur Farbauswahl hinzu. </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/extraspectrum.png">
            </div>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Colorcreations ---------------------------->
    <article id="colorthemes" class="section scrollspy">
        <h3>Farbkreationen</h3>
        <p>Wollen Sie einen Webshop für Herbstmode eröffnen, jedoch kein Vorwissen im Bereich Farblehre? Auch das
            sollte
            mit den vordefinierten Schemata keine Problem für sie werden.</p>


        <!---------------------------- Autumntheme ---------------------------->
        <article>
            <h3 class="title">Herbst Kollektion</h3>
            <div class="row content_img">
                <div class="col l12">
                    <img class="img-responsive" src="../../lib/img/css/autumn.png">
                </div>
            </div>
        </article>

        <!---------------------------- Camotheme ---------------------------->
        <article>
            <h3>Camouflage Kollektion</h3>
            <div class="row content_img">
                <div class="col l12">
                    <img class="img-responsive" src="../../lib/img/css/camo.png">
                </div>
            </div>
        </article>

        <!---------------------------- Supremetheme ---------------------------->
        <article>
            <h3 class="title">Supreme Kollektion</h3>
            <div class="row content_img">
                <div class="col l12">
                    <img class="img-responsive" src="../../lib/img/css/supreme.png">
                </div>
            </div>
        </article>
    </article>

    <!---------------------------- Content Media ---------------------------->
    <article id="media" class="section scrollspy">
        <h2>Media</h2>
        <p>
            Da Medien Elemente häufig in Webseiten eingebaut werden haben wir einige Klassen bereit gestellt die das
            Einbinden erleichtern. Wir haben die Medien in die Bereiche Bilder, Videos und Audio geteilt.
        </p>
    </article>

    <!---------------------------- Content Images ---------------------------->
    <article id="images" class="section scrollspy">
        <h3>Bilder</h3>
        <p>Um Bilder durch das Framework responsive zu machen gibt es die Klasse <i class="classname">img-wrapper</i>
            welche es ermöglicht
            Bilder das sie sich automatisch prozentuell an die Größe des Browserfensters anpassen. Um Bildern ein
            spezielles
            Ausehen zu geben können die Klassen <i class="classname">round-img</i> und <i
                    class="classname">circle-img</i> zusätzlich
            verwendet werden um Bilder abzurunden oder ganz rund zu gestalten.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/images.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="image-wrapper">
    <img src="../images/workplace.jpg">
</div>

<div class="image-wrapper">
    <img class="round-img" src="../images/workplace.jpg">
</div>

<div class="image-wrapper">
    <img class="circle-img" src="../images/workplace.jpg">
</div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Video ---------------------------->
    <article id="video" class="section scrollspy">
        <h3>Video</h3>
        <p>Die Klasse <i class="classname">video-wrapper-16</i> und <i class="classname">video-wrapper-4</i>
            ermöglichen das Videos
            sich prozentuell zum Browserfenster ändern wobei die eine Klasse für 16:9 Videos geeigent ist und die andere
            für Videos im 4:3 Format.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/videos.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="video-wrapper-4">
    <video>
        <source src="../videos/Graphic%20-%2011722%20(1).mp4" type="video/mp4">
    </video>
</div>

<div class="video-wrapper-16">
   <video>
        <source src="../videos/Graphic%20-%20rain.mp4" type="video/mp4">
   </video>
</div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Audio ---------------------------->
    <article id="audio" class="section scrollspy">
        <h3>Audio</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><h3 class="test">Gleiche Spaltengröße</h3></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Tabels ---------------------------->
    <article id="table" class="section scrollspy">
        <h2>Tabellen</h2>
        <p>
            Tabellen sind ein weiteres wichtiges Layout Element und können vielseitig eingesetzt werden.
            Das Framework bietet ein Standartdesign für den <i class="tagname">table</i> Tag. Zusätzlich gibt es 3
            unterschiedliche
            Klassen die dem <i class="tagname">table</i> Tag zugewiesen werden können um der Tabelle ein spezielles
            Aussehen zu geben.
            Mit der Klasse <i class="classname">table-light</i> wird beim Überfahren einer Zeile die Hintergrundfarbe
            dieser Tabelle grau.
            Durch die Klasse <i class="classname">table-responsive</i> bekommt die Tabelle die Eigenschaft sich
            prozentuell dem Browserfenster
            anzupassen. Um eine gestreifte Tabelle zu verwenden muss dem <i class="tagname">table</i> Tag die Klasse
            <i class="classname">table-stripped</i> hinzugefügt werden.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/tables.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
                    <pre class="prettyprint"><xmp><table class="table-stripped">
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table>

<table>
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table>

<table class="table-light">
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Tools ---------------------------->
    <article id="helper" class="section scrollspy">
        <h2>Werkzeuge</h2>
        <p>Dieser Abschnitt beschäftigt sich mit kleinen Werkzeugen die verwendet werden können um das Layout einer
            Webseite zu verfeinern.
            Um den Fluss eines Elements zu verändern gibt es die Klassen <i class="classname">float-right</i> und
            <i class="classname">float-left</i>. Eine weitere wichtige Klasse ist <i class="classname">.block</i> mit
            ihr können Elemente
            als Block Elemente definiert werden das heißt das nach diesem Element ein Zeilenumbruch stattfindet. Um
            Inhalte ersichtlich
            zu trennen gibt es die Klasse <i class="classname">.line</i> mit der eine Trennline hinzugefügt werden kann
            sie sollte nur
            innerhalb eines <i class="tagname">hr</i> Tags verwendet werden.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><h3 class="test">Gleiche Spaltengröße</h3></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Box Shadow ---------------------------->
    <article id="shadow" class="section scrollspy">
        <h2>Schatten</h2>
        <p>
            Da unser Framework Elemente wie Header, Footer und Karten enthält bietet es auch verschiedene Box Schatten
            für die jeweiligen Elemente an. Der Box Schatten hat den Effekt das er Elemente für den Betrachter so
            aussehen
            lässt als würde die entsprechende Komponente nicht Bestandteil der Website sein, sondern oben drauf liegen.
            Es gibt 5 verschiedene Klassen die einen unterschiedlich starken Schatten werfen. Die Klassen können über
            den Namen
            <i class="classname">shadow-ex-light</i>,<i class="classname">shadow-light</i>,<i class="classname">shadow-medium</i>,
            <i class="classname">shadow-hard</i> und <i class="classname">shadow-ex-hard</i> wobei der Schatten
            aufsteigend stärker wird.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/box-shadow.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="shadow-ex-light"></div>

<div class="shadow-light"></div>

<div class="shadow-medium"></div>

<div class="shadow-hard"></div>

<div class="shadow-ex-hard"></div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Show/Hide ---------------------------->
    <article id="showhide" class="section scrollspy">
        <h2>Elemente ausblenden</h2>
        <p>
            In diesem Abschnitt werden die Klassen <i class="classname">show</i> und <i class="classname">hide</i>
            erklärt. Das Framework
            enthält einige Klassen die bestimmen ab welcher Bildschirmgröße welches Element angezeigt werden soll und
            welches versteckt werden soll.
            Dafür gibt es die Klassen <i class="classname">show-größe</i> und <i class="classname">hideh-größe</i>. An
            der Stelle der Größe
            ist die gewünschte Bildschirmgröße einzusetzen. Es gibt <i class="classname">sl</i>, <i
                class="classname">md</i>,
            <i class="classname">md-up</i><i class="classname">md-down</i>,<i class="classname">lg</i> und nur <i
                class="classname">show</i> ohne
            Größe. Dieselben Regeln gelten auch für die <i class="classname">hide</i> Klasse.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><h3 class="test">Gleiche Spaltengröße</h3></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------- Content Parallax ---------------------------->
    <article id="parallax" class="section scrollspy">
        <h2>Parallax</h2>
        <p>
            Das Parallax-Scrolling ist einer der großen neuen Webdesign-Trends. Bei diesem Effekt handelt es sich um
            einzelne
            Ebenen die sich unterschiedlich schnell bewegen so entsteht bei Betrachter der Eindruck von Tiefe. Das
            Parallax-Scrolling
            kann dem Framework und der Klasse <i class="classname">parallax</i> einfach implementiert werden. Die Klasse
            <i class="classname">parallax</i>
            sollte dabei auf dem <i class="tagname">body</i> oder einem <i class="classname">container</i> angewendet
            werden.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive" src="../../lib/img/css/parallax.PNG">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xl parallax" style="background-image: url(../../images/landscape-example.jpg)">
    Website Content
</div></xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Animations ---------------------------->
    <article id="animations" class="section scrollspy">
        <h3>Css Animationen</h3>
        <p>Animationen verdeutlichen dem User, dass eine Aktion stattgefunden hat. Nicht immer ist es sinnvoll sie zu
            verwenden und auch hier gilt "keep it simple". Eine Animation kann dem User auch eine Art Feedback geben, so
            können zum Beispiel Erklärungstexte bei falscher Eingabe erscheinen. Ein Weiteres Beispiel wären
            Informationsboxen oder Ankündigungen bei erstmaligem Anmelden. Für einige dieser Fälle werden Klassen
            bereitgestellt, die entweder mit dem "transition" oder dem "animation" Attribut ausgestattet sind. Weiteres
            wurden verschiedenste Schlüsselbildanimationen, oder in Fachspache auch Keyframes gennant, ausprogrammiert.
            Diese bestimmen die Art der Animation, so kann zum Beispiel ein Element in alle Richtungen hinausbewegt werden. </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>/* Dauer | Timingfunktion | Verzögerung | #Iterationen | Richtung | Füllmodus | Abspielstatus | Name */
animation: 3s ease-in 1s 2 reverse both paused slidein;

/* Variables Attribut | Dauer | Timingfunktion | Verzögerung */
transition: margin-right 4s ease-in-out 1s;</xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Keyframes ---------------------------->
    <article id="keyframes" class="section scrollspy">
        <h3>Schlüsselbildanimationen</h3>
        <p>Wie oben bereits angesprochen verwenden Animationen Schlüsselbilder. In diesen kann die Position eines Elements, in einer bestimmten Zeitspanne der Animation, bestimmt werden. Im Beispiel unterhalb wird ein Keyframe mittels CSS definiert - Laden Sie jedoch unser Framework herunter müssen sie diese nicht beachten. Verwenden Sie einfach die bereitgestellten Klassennamen im nachfolgenden Bereich.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>@keyframes moveOut {
    from {top: 500px;}
    to {top: .200px;}
}</xmp></pre>
            </code>
        </div>
    </article>

    <!---------------------------- Content Animations Opportunities ---------------------------->
    <article id="animelem" class="section scrollspy">
        <h3>Möglichkeiten</h3>
        <p>Die unten aufgeführten Klassen rufen beim Erstellen des DOM's Animationen auf. Mit fortgeschrittenem Wissen können die Klassen auch zu anderen Zeitpunkten über JavaScript aufgerufen werden.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="moveIn"></div>
<div class="moveOut"></div>
<div class="slideIn"></div>
<div class="slideOut"></div>
<div class="slideLeft"></div>
<div class="slideRight"></div>
<div class="Wiggle"></div></xmp></pre>
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
