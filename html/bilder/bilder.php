<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Bilder</title>
    <?php include("../../head.php"); ?>
</head>
<body>
<header>
    <?php
    include("../../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $isActive = "Bilder";
                    include("../html_menu.php");
                    ?>
                </div>
                <div id="bilder" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">HTML Bilder</h4>
                        <div class="box">
                            <div class="block">
                                <p>
                                    Man kann mit dem <code>img</code>-Element Bilddateien in ein <abbr
                                            title="Hypertext Markup Language">HTML</abbr> Dokument einbetten. Der
                                    Browser zeigt das Bild dann an. Man sollte bei den Bilddateien auf die Dateigrösse
                                    achten. Eine grosse Bilddatei benötigt eine längere Ladezeit und belastet das
                                    Datenvolumen bei einem Abruf der Webseite über das Mobilnetz.
                                <h6 class="title is-6">Beispiel</h6>
                                <p>Code</p>
                                <pre><code>&lt;img src="html5_logo.png" alt="HTML 5 Logo"></code></pre>
                                <p>Rendering</p>
                                <div style="all: initial;">
                                    <img src="img/html5_logo.png" alt="HTML 5 Logo">
                                </div>
                                <h6 class="title is-6 mt-5">Jump to ...</h6>
                                <div class="tags">
                                    <a class="tag" href="#img">img</a>
                                </div>
                            </div>
                        </div>
                        <?php include("img_element.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("../../footer.php");
    ?>
</footer>
</body>
</html>