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
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link active">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Templates</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../../components/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!---------------------------------------- Side-Navigation ---------------------------------------->
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#buttons">Buttons</a></li>
        <li class="aside-subnav"><a href="#size">Size</a></li>
        <li class="aside-subnav"><a href="#buttonstil">Look</a></li>
        <li class="aside-scroll"><a href="#cards">Cards</a></li>
        <li class="aside-subnav"><a href="#simplecard">Simple Card</a></li>
        <li class="aside-subnav"><a href="#cardfooter">Footer</a></li>
        <li class="aside-subnav"><a href="#cardscontact">Contact Card</a></li>
        <li class="aside-subnav"><a href="#cardmedia">Media Card</a></li>
        <li class="aside-scroll"><a href="#header">Header</a></li>
        <li class="aside-subnav"><a href="#brand">Brand Name</a></li>
        <li class="aside-subnav"><a href="#logo">Logo</a></li>
        <li class="aside-subnav"><a href="#headerstil">Look</a></li>
        <li class="aside-subnav"><a href="#headerposition">Alignment</a></li>
        <li class="aside-scroll"><a href="#navigation">Navigation</a></li>
        <li class="aside-subnav"><a href="#kopfzeile">Header</a></li>
        <li class="aside-subnav"><a href="#sidenav">Side Navigation</a></li>
        <li class="aside-subnav"><a href="#lists">List</a></li>
        <li class="aside-subnav"><a href="#tabs">Tabs</a></li>
        <li class="aside-subnav"><a href="#searchbar">Search Bar</a></li>
        <li class="aside-scroll"><a href="#forms">Forms</a></li>
        <li class="aside-subnav"><a href="#textfields">Text Area</a></li>
        <li class="aside-subnav"><a href="#range">Range</a></li>
        <li class="aside-subnav"><a href="#checkbox">Checkbox</a></li>
        <li class="aside-subnav"><a href="#radiobutton">Radio Buttons</a></li>
        <li class="aside-scroll"><a href="#icons">Icons</a></li>
        <li class="aside-subnav"><a href="#include">Include</a></li>
        <li class="aside-subnav"><a href="#collection">Collection</a></li>
        <li class="aside-scroll"><a href="#footer">Footer</a></li>
        <li class="aside-subnav"><a href="#simplefooter">Simple Footer</a></li>
        <li class="aside-subnav"><a href="#links">Links</a></li>
        <li class="aside-subnav"><a href="#footerimpressum">Imprint</a></li>
        <li class="aside-subnav"><a href="#contact">Contact Informationen</a></li>
        <li class="aside-subnav"><a href="#footerposition">Alignment</a></li>
    </ul>
</aside>

<!---------------------------------------- Main ---------------------------------------->
<main class="content">
    <!---------------------------------------- Side Des ---------------------------------------->
    <article>
        <h1>Components</h1>
        <p>Sie wollen weitere Elemente auf Ihrer Webseite verwenden? Dann sind sie hier genau richtig! Falls Ihre
            Intention darin besteht Informationen über die Lage ihres Unternehmens oder Gedanken zu ihrer jetzigen
            Lebensituation veröffentlichen möchten, sollten Sie mit den Klassen im Bereicht Css auskommen. Doch nach sehr kurzer Zeit werden sich ihre Inhalte vervielfachen und eine einzige Seite kann so oft unübersichtlich wirken. Hier finden Sie Navigationsleisten um mehrere Seiten zu verbinden und vieles mehr!
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

                    <!---------------------------------------- Nav Buttons ---------------------------------------->
                    <li>
                        <a class="directory" href="#buttons">Buttons</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#size">Size</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#buttonstil">Look</a>
                    </li>

                    <!---------------------------------------- Nav Cards ---------------------------------------->
                    <li>
                        <a class="directory" href="#cards">Cards</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#simplecard">Simple Card</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#cardfooter">Footer</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#cardscontact">Contact Card</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#cardmedia">Media Card</a>
                    </li>

                    <!---------------------------------------- Nav Header ---------------------------------------->
                    <li>
                        <a class="directory" href="#header">Header</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#brand">Brand Name</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#logo">Logo</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#headerstil">Look</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#headerposition">Alignment</a>
                    </li>

                    <!---------------------------------------- Nav Navigation ---------------------------------------->
                    <li>
                        <a class="directory" href="#navigation">Navigation</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#kopfzeile">Header</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#sidenav">Side Navigation</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#lists">List</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#tabs">Tabs</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#kopfzeile">Search Bar</a>
                    </li>

                    <!---------------------------------------- Nav Navigation ---------------------------------------->
                    <li>
                        <a class="directory" href="#forms">Forms</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#textfields">Text Area</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#range">Range</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#checkbox">Checkboxen</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#radiobutton">Radio Button</a>
                    </li>

                    <!---------------------------------------- Nav Icons ---------------------------------------->
                    <li>
                        <a class="directory" href="#icons">Icons</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#include">Include</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#collection">Collection</a>
                    </li>

                    <!---------------------------------------- Nav Footer ---------------------------------------->
                    <li>
                        <a class="directory" href="#footer">Footer</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#simplefooter">Simple Footer</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#links">Links</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#footerimpressum">Imprint</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#contact">Contact Information</a>
                    </li>
                    <li>
                        <a class="margin-left directory" href="#footerposition">Alignment</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!---------------------------------------- Content Buttons ---------------------------------------->
    <article id="buttons" class="section scrollspy">
        <h2>Buttons</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>

    </article>
    <article id="size" class="section scrollspy">
        <h3>Size</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>

    </article>
    <article id="buttonstil" class="section scrollspy">
        <h3>Look</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Cards ---------------------------------------->
    <article id="cards" class="section scrollspy">
        <h2>Cards</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="simplecard" class="section scrollspy">
        <h3>Simple Card</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="cardfooter" class="section scrollspy">
        <h3>Footer</h3>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="cardscontact" class="section scrollspy">
        <h3>Contact Card</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="cardmedia" class="section scrollspy" >
        <h3>Media Card</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Header ---------------------------------------->
    <article id="header" class="section scrollspy">
        <h2>Header</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="brand" class="section scrollspy">
        <h3>Brand Name</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="logo" class="section scrollspy">
        <h3>Logo</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="headerstil" class="section scrollspy">
        <h3>Look</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="headerposition" class="section scrollspy">
        <h3>Alignment</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Navigation ---------------------------------------->
    <article id="navigation" class="section scrollspy">
        <h2>Navigation</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="kopfzeile" class="section scrollspy">
        <h3>Header</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="sidenav" class="section scrollspy">
        <h3>Side Navigation</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="lists" class="section scrollspy">
        <h3>List</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="tabs" class="section scrollspy">
        <h3>Tabs</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="searchbar" class="section scrollspy">
        <h3>Search Bar</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Forms ---------------------------------------->
    <article id="forms" class="section scrollspy">
        <h2>Formulare</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="textfields" class="section scrollspy">
        <h3>Text Fields</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="range" class="section scrollspy">
        <h3>Range</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="checkbox" class="section scrollspy">
        <h3>Checkbox</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="radiobutton" class="section scrollspy">
        <h3>Radio Buttons</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Icons ---------------------------------------->
    <article id="icons" class="section scrollspy">
        <h2>Icons</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasddolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At ve gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </article>
    <article id="include" class="section scrollspy">
        <h3>Include</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="collection" class="section scrollspy">
        <h3>Collection</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vedolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vedolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <!---------------------------------------- Content Footer ---------------------------------------->
    <article id="footer" class="section scrollspy">
        <h2>Fußzeile</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="simplefooter" class="section scrollspy">
        <h3>Simple Footer</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="links" class="section scrollspy">
        <h3>Links</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="footerimpressum" class="section scrollspy">
        <h3>Impressum</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="contact" class="section scrollspy">
        <h3>Contact</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="footerposition" class="section scrollspy">
        <h3>Alignment</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
            labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>

<div class="container-s">.container-s</div></xmp></pre>
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
