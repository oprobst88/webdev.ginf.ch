<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: HTML Formulare</title>
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
                    $isActive = "Formulare";
                    include("../html_menu.php");
                    ?>
                </div>
                <div id="formulare" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">HTML Formulare</h4>
                        <div class="box">
                            <div class="block">
                                <p>
                                    Webformulare (kurz Formulare genannt) ermöglichen es Benutzern zwischen Optionen zu
                                    wählen oder Daten wie Adressen, Termine und Texte einzugeben und diese zur
                                    Weiterverarbeitung abzusenden. Formulare (eng. forms) werden mit dem
                                    <code>form</code>-Element erzeugt.
                                <h6 class="title is-6">Beispiel</h6>
                                <p>Code</p>
                                <pre><code>&lt;form action="anmelden.html">
    &lt;label for="benutzername">Benutzername:&lt;/label>
    &lt;input type="text" id="benutzername" name="benutzername" required>
    &lt;br>
    &lt;label for="passwort">Passwort:&lt;/label>
    &lt;input type="password" id="passwort" name="passwort" required>
    &lt;br>
    &lt;br>
    &lt;button>Anmelden&lt;/button>
&lt;/form>
</code></pre>
                                <p>Rendering</p>
                                <div style="all: initial;">
                                    <form action="anmelden.html">
                                        <label for="benutzername">Benutzername:</label>
                                        <input type="text" id="benutzername" name="benutzername" required>
                                        <br>
                                        <label for="passwort">Passwort:</label>
                                        <input type="password" id="passwort" name="passwort" required>
                                        <br>
                                        <br>
                                        <button>Anmelden</button>
                                    </form>
                                </div>
                                <h6 class="title is-6 mt-5">Jump to ...</h6>
                                <div class="tags">
                                    <a class="tag" href="#form">form</a>
                                    <a class="tag" href="#input">input</a>
                                    <a class="tag" href="#label">label</a>
                                    <a class="tag" href="#select">select</a>
                                    <a class="tag" href="#button">button</a>
                                </div>
                            </div>
                        </div>
                        <?php include("form_element.php"); ?>
                        <?php include("input_element.php"); ?>
                        <?php include("label_element.php"); ?>
                        <?php include("select_element.php"); ?>
                        <?php include("button_element.php"); ?>
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