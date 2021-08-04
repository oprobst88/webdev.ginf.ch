<!DOCTYPE html>
<html lang="de">
<head>
    <?php include("../head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML</title>
</head>
<body>
<header>
    <?php
    include("../header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php
                    $is_active = "";
                    include("html_menu.php");
                    ?>
                </div>
                <div id="html" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">HTML</h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">Was ist HTML?</h5>
                                <figure class="image is-pulled-right" style="width: 200px; height: 200px;">
                                    <img src="bilder/img/html5_logo.png" alt="HTML 5 Logo">
                                </figure>
                                HTML (Hypertext Markup Language) ist eine Sprache, die verwendet wird, um Webseiten für
                                das WWW (World Wide Web) zu strukturieren. Es handelt sich bei HTML um eine
                                Beschreibungssprache. Es ist <b>keine</b> Programmiersprache. <abbr
                                        title="Hypertext Markup Language">HTML</abbr> wird dazu verwendet, um
                                Webseiteninhalte (zum Beispiel Text und Bilder) zu strukturieren.
                            </div>
                            <div class="block">
                                <h6 class="title is-6">HTML Dokumente</h6>
                                Ein <abbr title="Hypertext Markup Language">HTML</abbr> Dokument ist eine Datei, welche
                                <abbr title="Hypertext Markup Language">HTML</abbr> Code beinhaltet. Die Datei besitzt
                                die Dateiendung <code>.html</code>.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Wie strukturiert man eine Webseite?</h5>
                                Eine Webseite besteht zunächst aus einem Inhalt. Dies kann ein Text sein (etwa ein
                                Blogeintrag) oder ein Bild. Eine Webseite kann auch die aktuelle Fussballtabelle
                                darstellen oder die Anzahl der Tickets für ein Rockkonzert. Damit ein Browser den Inhalt
                                ansprechend darstellen kann, wird der Inhalt mit <i>vorgegebenen</i> "Befehlen"
                                erweitert.
                                Dieser Vorgang nennt sich <b>Textauszeichnung</b> (eng. Markup).
                            </div>
                            <div class="block">
                                <h6 class="title is-6">Was ist ein Browser?</h6>
                                Ein Browser ist ein Computerprogramm zum Navigieren im <abbr
                                        title="World Wide Web">WWW</abbr> und Anzeigen von Webseiten.
                                Ein Browser lädt die angeforderte Webseite auf den Computer, interpretiert deren Inhalt
                                und stellt den Inhalt grafisch dar. Über die Internetadresse weiss der Browser welche
                                Webseite angezeigt werden muss. Beispiel für Browser sind Mozilla Firefox, Google
                                Chrome, Opera und Safari.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Wie funktioniert die Textauszeichnung?</h5>
                                Die <i>vorgegebenen</i> "Befehlen" werden in <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Elemente genannt. Jedes Element
                                hat eine Bedeutung, die der Browser kennt und verarbeiten kann. Durch die Elemente wird
                                die Darstellung im Browser definiert.
                            </div>
                            <div class="block">
                                <h6 class="title is-6">Syntax für HTML-Elemente</h6>
                                Jedes Element besitzt einen Namen. Der Name des Elements wird in spitzen Klammern
                                notiert und <b>Tag</b> genannt. Ein Element besteht meist aus einem <b>Paar</b> von
                                Tags. Es gibt ein <b>Opening-Tag</b> und einen <b>Closing-Tag</b>. Dazwischen kann der
                                eigentliche Inhalt notiert werden. Folgendes Bild zeigt ein erstes Beispiel.
                                <figure class="image">
                                    <img style="width: 75%" src="img/html_element.jpeg" alt="HTML-Element Beispiel">
                                </figure>
                                Das <code>b</code>-Element besitzt den Opening-Tag <code>&lt;b></code> und den
                                Closing-Tag <code>&lt;/b></code>. Beide Tags haben stets den gleichen Namen. Zwischen
                                den Tags wird der eigentliche Inhalt notiert. In diesem Beispiel ist es ein Text. Durch
                                das <code>b</code>-Element weiss der Browser, dass er den Inhalt zwischen den Tags
                                hervorheben sollte. Dies wird meist durch eine fett gedruckte Schrift realisiert.<br>
                                Man kann <abbr title="Hypertext Markup Language">HTML</abbr>-Elemente auch
                                verschachteln. Der Inhalt eines Elements kann wieder ein Element beinhalten. Man kann
                                auch Text und Elemente mischen. Es ist dabei auf die korrekte Reihenfolge der Tags zu
                                achten. Folgendes Bild zeigt ein weiteres Beispiel.
                                <figure class="image">
                                    <img style="width: 50%" src="img/nested_html_elements.jpeg"
                                         alt="Verschachteltes HTML-Element Beispiel">
                                </figure>
                                Manche Elemente besitzen kein Closing-Tag und somit auch keinen Inhalt. Prinzipiell
                                spielt bei <abbr title="Hypertext Markup Language">HTML</abbr> die Gross- und
                                Kleinschreibung der Tags keine Rolle (case-insensitive). Die Tags <code>&lt;b></code>
                                und <code>&lt;B></B></code> sind somit semantisch identisch. Es hat sich jedoch über die
                                Jahre durchgesetzt, dass man nur <b>Kleinbuchstaben</b> benutzt.<br>
                                Zeilenumbrüche, Leerzeichen vor oder nach Tags und Leerzeilen haben auf die Darstellung
                                keinen Einfluss. Die Beispiele in folgendem Bild erzeugen deshalb das gleiche Resultat.
                                <figure class="image">
                                    <img style="width: 50%" src="img/html_multiline.jpeg"
                                         alt="HTML-Elemente und Leerzeilen">
                                </figure>
                            </div>
                            <div class="block">
                                <h6 class="title is-6">Syntax für HTML-Attribute</h6>
                                Man kann für ein <abbr title="Hypertext Markup Language">HTML</abbr>-Element zusätzliche
                                Informationen notieren. Dies sind <b>nicht</b> Teil des Inhalts und werden nicht
                                (direkt) dargestellt. Jede zusätzliche Information wird mit einem <b>Attribut</b>
                                definiert. Jedes Element erlaubt eine vorgegebene Menge von Attributen. Jedes Attribut
                                hat eine Bedeutung, die auch der Browser kennt. Mit dieser Information passt der Browser
                                das Verhalten des Elements an. Folgendes Bild zeigt ein Beispiel für ein Element mit
                                einem Attribut. Das <abbr title="Hypertext Markup Language">HTML</abbr>-Element <code>img</code>
                                besitzt im Beispiel zwei Attribute. Das Attribut <code>src</code> gibt den Dateinamen
                                des Bildes an. Das Attribut <code>alt</code> definiert einen Text, der angezeigt wird,
                                falls die Bilddatei nicht vorhanden ist.
                                <figure class="image">
                                    <img style="width: 75%" src="img/html_attribute.jpeg"
                                         alt="HTML-Attribut Beispiel">
                                </figure>
                                Jedes Attribut besitzt einen Attributnamen und einen Attributwert. Auf den Attributnamen
                                folgt <b>immer</b> ein <i>Gleichheitszeichen</i> (<code>=</code>). Der Attributwert wird
                                <b>immer</b> in zwei doppelten <i>Anführungszeichen</i> (<code>"</code>) notiert. Pro
                                Element darf ein Attribut nur einmal notiert werden. Zwischen zwei Attributen oder dem
                                Elementnamen wird ein Leerzeichen notiert. Nicht alle Element verlangen zwingend ein
                                Attribut. Bei vielen Elementen sind die Attribute optional. Die Reihenfolge der
                                Attribute spielt keine Rolle.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Wie funktioniert das Rendering?</h5>
                                Ein Browser ist in der Lage <abbr title="Hypertext Markup Language">HTML</abbr>
                                anzuzeigen. Er interpretiert dabei die Elemente und Attribute: Er kennt die Bedeutung
                                der Tags und wandelt diese in die entsprechenden grafischen Darstellungen um. Dieser
                                Vorgang wird <abbr title="Hypertext Markup Language">HTML</abbr>-Rendering genannt. Wenn
                                Sie im Internet surfen, dann lädt der Browser den Inhalt der entsprechenden
                                HTML-Dokumente auf Ihren Computer und rendert das <abbr
                                        title="Hypertext Markup Language">HTML</abbr>. Dies geschieht ganz automatisch.
                                Sie können für eine Webseite den Quelltext, sprich den Inhalt des <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Dokuments, betrachten. Jeder
                                Browser unterstützt die Anzeige des Seitenquelltexts. Browser sind heutzutage ziemlich
                                robust. Sie stellen auch "nicht" gültiges <abbr
                                        title="Hypertext Markup Language">HTML</abbr> oft meist noch recht gut dar. Das
                                World Wide Web Consortium (W3C) versucht <abbr
                                        title="Hypertext Markup Language">HTML</abbr> zu standardisieren. Ein Browser
                                sollte sich dann an diesen Standard halten und standardkonforme <abbr
                                        title="Hypertext Markup Language">HTML</abbr>-Dokumente gemäss den Vorgaben
                                darstellen. <abbr title="Hypertext Markup Language">HTML</abbr> 5.2 ist momentan
                                die aktuellste Version des W3C <abbr title="Hypertext Markup Language">HTML</abbr>
                                Standards. Unter <a href="https://html5test.com">https://html5test.com</a> können Sie
                                prüfen, wie gut Ihr Browser den <abbr title="Hypertext Markup Language">HTML</abbr>-Standard
                                unterstützt.
                            </div>
                            <div class="notification is-info">
                                Bei der Darstellung der Elemente gibt es zwei grundlegende Kategorien. Die sogenannten
                                <b>"Block"-Elemente</b> erhalten <b>immer</b> (und unabhängig vom Inhalt) die
                                vollständige Bildschirmbreite. Das Element nimmt somit immer eine vollständige Zeile bei
                                der Darstellung ein. <b>"Inline"-Elemente</b> erhalten nur so viel Platz wie nötig. Der
                                Inhalt (etwa der Text) bestimmt somit die Breite der Darstellung. In den Erklärungen
                                werden alle "Block"-Elemente mit <i class="fas fa-expand-alt"></i> markiert. Alle
                                anderen Elemente sind "Inline"-Elemente.
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Links</h5>
                                <ul>
                                    <li>
                                        <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics">
                                            MDN Web Docs: HTML Basics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://htmlreference.io/">htmlreference.io</a>
                                    </li>
                                    <li>
                                        <a href="https://wiki.selfhtml.org/wiki/HTML">SELFHTML: HTML</a>
                                    </li>
                                    <li>
                                        <a href="https://validator.w3.org/">W3C Markup Validation Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">
    <?php
    include("../footer.php");
    ?>
</footer>
</body>
</html>