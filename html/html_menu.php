<?php
global $base;
?>
<aside class="menu">
    <p class="menu-label">
        Sprachen
    </p>
    <ul class="menu-list">
        <li class="is-right">
            <a href="<?php echo $base; ?>/html/html_main.php#html" class="is-active">
                <i class="fab fa-html5"></i>
                HTML
            </a>
            <ul>
                <li>
                    <a href="<?php echo $base; ?>/html/grundgeruest/grundgeruest.php#grundgeruest"
                       class="<?php echo isset($isActive) && $isActive == "Grundgerüst" ? "has-background-grey-lighter" : "" ?>">
                        Grundgerüst
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/struktur/struktur.php#struktur"
                       class="<?php echo isset($isActive) && $isActive == "Struktur" ? "has-background-grey-lighter" : "" ?>">
                        Struktur
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/textformatierung/textformatierung.php#textformatierung"
                       class="<?php echo isset($isActive) && $isActive == "Textformatierung" ? "has-background-grey-lighter" : "" ?>">
                        Textformatierung
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/listen/listen.php#listen"
                       class="<?php echo isset($isActive) && $isActive == "Listen" ? "has-background-grey-lighter" : "" ?>">
                        Listen
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/links/links.php#links"
                       class="<?php echo isset($isActive) && $isActive == "Links" ? "has-background-grey-lighter" : "" ?>">
                        Links
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/bilder/bilder.php#bilder"
                       class="<?php echo isset($isActive) && $isActive == "Bilder" ? "has-background-grey-lighter" : "" ?>">
                        Bilder
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/tabellen/tabellen.php#tabellen"
                       class="<?php echo isset($isActive) && $isActive == "Tabellen" ? "has-background-grey-lighter" : "" ?>">
                        Tabellen
                    </a>
                </li>
                <li>
                    <a href="<?php echo $base; ?>/html/formulare/formulare.php#formulare"
                       class="<?php echo isset($isActive) && $isActive == "Formulare" ? "has-background-grey-lighter" : "" ?>">
                        Formulare
                    </a>
                </li>
            </ul>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/css/css_main.php#css" class="is-active">
                <i class="fab fa-css3-alt"></i>
                CSS
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/php/php_main.php#php" class="is-active">
                <i class="fab fa-php"></i>
                PHP
            </a>
        </li>
        <li class="is-right">
            <a href="<?php echo $base; ?>/sql/sql_main.php#sql" class="is-active">
                <i class="fas fa-database"></i>
                SQL
            </a>
        </li>
    </ul>
</aside>