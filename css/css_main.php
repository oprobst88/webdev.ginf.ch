<!DOCTYPE html>
<html lang="de">
<head>
    <title>Webentwicklung im Grundlagenfach Informatik: CSS</title>
    <?php include("../head.php"); ?>
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
                    include("css_menu.php");
                    ?>
                </div>
                <div id="css" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">CSS</h4>
                        <div class="box">
                            <div class="block">
                                <h5 class="title is-5">TODO</h5>
                                TODO
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