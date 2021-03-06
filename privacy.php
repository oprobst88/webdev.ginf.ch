<!DOCTYPE html>
<?php
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
global $base;
$base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'] . '/';
?>
<html lang="de">
<head>
    <?php include("head.php"); ?>
    <title>Webentwicklung im Grundlagenfach Informatik: Datenschutzerklärung</title>
</head>
<body>
<header>
    <?php
    include("header.php");
    ?>
</header>
<main>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <?php include("menu.php"); ?>
                </div>
                <div id="privacy" class="column is-9">
                    <div class="content">
                        <h4 class="title is-4">Datenschutzerklärung</h4>
                        <div class="box">
                            <div class="block">
                                <h5 id="m14" class="title is-5">Einleitung</h5>
                                <p>
                                    Mit der folgenden Datenschutzerklärung möchten wir Sie darüber aufklären, welche
                                    Arten Ihrer personenbezogenen Daten (nachfolgend auch kurz als "Daten"
                                    bezeichnet) wir zu welchen Zwecken und in welchem Umfang verarbeiten. Die
                                    Datenschutzerklärung gilt für alle von uns durchgeführten Verarbeitungen
                                    personenbezogener Daten, sowohl im Rahmen der Erbringung unserer Leistungen als auch
                                    insbesondere auf unseren Webseiten, in mobilen Applikationen sowie innerhalb
                                    externer Onlinepräsenzen, wie z.B. unserer Social-Media-Profile (nachfolgend
                                    zusammenfassend bezeichnet als "Onlineangebot").
                                </p>
                                <p>Die verwendeten Begriffe sind nicht geschlechtsspezifisch.</p>
                                <p>Stand: 4. August 2021</p>
                            </div>
                            <div class="block">
                                <h5 class="title is-5">Inhaltsübersicht</h5>
                                <ul class="index">
                                    <li><a href="#m14">Einleitung</a></li>
                                    <li><a href="#m3">Verantwortlicher</a></li>
                                    <li>
                                        <a href="#mOverview">Übersicht der Verarbeitungen</a>
                                    </li>
                                    <li><a href="#m13">Massgebliche Rechtsgrundlagen</a></li>
                                    <li><a href="#m27">Sicherheitsmassnahmen</a></li>
                                    <li><a href="#m24">Datenverarbeitung in Drittländern</a></li>
                                    <li><a href="#m12">Löschung von Daten</a></li>
                                    <li>
                                        <a href="#m225">Bereitstellung des Onlineangebotes und Webhosting</a>
                                    </li>
                                    <li>
                                        <a href="#m182">Kontaktaufnahme und Anfragenverwaltung</a>
                                    </li>
                                    <li>
                                        <a href="#m15">Änderung und Aktualisierung der Datenschutzerklärung</a>
                                    </li>
                                    <li><a href="#m10">Rechte der betroffenen Personen</a></li>
                                    <li><a href="#m42">Begriffsdefinitionen</a></li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 id="m3" class="title is-5">Verantwortlicher</h5>
                                <address>
                                    <p>Oliver Probst<br>Am Kaltenbach 10<br>79761 Waldshut-Tiengen<br>Deutschland</p>
                                    <p>E-Mail-Adresse: <a href="mailto:info@webdev.ginf.ch">info@webdev.ginf.ch</a>.</p>
                                    <p>
                                        Impressum: <a href="https://webdev.ginf.ch/about.php" target="_blank">https://webdev.ginf.ch/about.php</a>.
                                    </p>
                                </address>
                            </div>
                            <div class="block">
                                <h5 id="mOverview" class="title is-5">Übersicht der Verarbeitungen</h5>
                                <p>Die nachfolgende Übersicht fasst die Arten der verarbeiteten Daten und die Zwecke
                                    ihrer Verarbeitung zusammen und verweist auf die betroffenen Personen.</p>
                                <h6 class="title is-6">Arten der verarbeiteten Daten</h6>
                                <ul>
                                    <li>Bestandsdaten (z.B. Namen, Adressen).</li>
                                    <li>Inhaltsdaten (z.B. Eingaben in Onlineformularen).</li>
                                    <li>Kontaktdaten (z.B. E-Mail, Telefonnummern).</li>
                                    <li>Meta-/Kommunikationsdaten (z.B. Geräte-Informationen, IP-Adressen).</li>
                                    <li>Nutzungsdaten (z.B. besuchte Webseiten, Interesse an Inhalten,
                                        Zugriffszeiten).
                                    </li>
                                </ul>
                                <h6 class="title is-6">Kategorien betroffener Personen</h6>
                                <ul>
                                    <li>Kommunikationspartner.</li>
                                    <li>Nutzer (z.B. Webseitenbesucher, Nutzer von Onlinediensten).</li>
                                </ul>
                                <h6 class="title is-6">Zwecke der Verarbeitung</h6>
                                <ul>
                                    <li>Bereitstellung unseres Onlineangebotes und Nutzerfreundlichkeit.</li>
                                    <li>Content Delivery Network (CDN).</li>
                                    <li>Direktmarketing (z.B. per E-Mail oder postalisch).</li>
                                    <li>Kontaktanfragen und Kommunikation.</li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 id="m13" class="title is-5">Massgebliche Rechtsgrundlagen</h5>
                                <p>
                                    Im Folgenden erhalten Sie eine Übersicht der Rechtsgrundlagen der DSGVO, auf
                                    deren Basis wir personenbezogene Daten verarbeiten. Bitte nehmen Sie zur Kenntnis,
                                    dass neben den Regelungen der DSGVO nationale Datenschutzvorgaben in Ihrem bzw.
                                    unserem Wohn- oder Sitzland gelten können. Sollten ferner im Einzelfall speziellere
                                    Rechtsgrundlagen massgeblich sein, teilen wir Ihnen diese in der Datenschutzerklärung
                                    mit.
                                </p>
                                <ul>
                                    <li>
                                        <strong>Einwilligung (Art. 6 Abs. 1 S. 1 lit. a. DSGVO)</strong> - Die
                                        betroffene Person hat ihre Einwilligung in die Verarbeitung der sie betreffenden
                                        personenbezogenen Daten für einen spezifischen Zweck oder mehrere bestimmte
                                        Zwecke gegeben.
                                    </li>
                                    <li>
                                        <strong>Vertragserfüllung und vorvertragliche Anfragen (Art. 6 Abs. 1 S. 1 lit.
                                            b. DSGVO)</strong> - Die Verarbeitung ist für die Erfüllung eines Vertrags,
                                        dessen Vertragspartei die betroffene Person ist, oder zur Durchführung
                                        vorvertraglicher Massnahmen erforderlich, die auf Anfrage der betroffenen Person
                                        erfolgen.
                                    </li>
                                    <li>
                                        <strong>Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO)</strong> -
                                        Die Verarbeitung ist zur Wahrung der berechtigten Interessen des
                                        Verantwortlichen oder eines Dritten erforderlich, sofern nicht die Interessen
                                        oder Grundrechte und Grundfreiheiten der betroffenen Person, die den Schutz
                                        personenbezogener Daten erfordern, überwiegen.
                                    </li>
                                </ul>
                                <p>
                                    <strong>Nationale Datenschutzregelungen in Deutschland</strong>: Zusätzlich zu
                                    den Datenschutzregelungen der Datenschutz-Grundverordnung gelten nationale
                                    Regelungen zum Datenschutz in Deutschland. Hierzu gehört insbesondere das Gesetz zum
                                    Schutz vor Missbrauch personenbezogener Daten bei der Datenverarbeitung
                                    (Bundesdatenschutzgesetz – BDSG). Das BDSG enthält insbesondere
                                    Spezialregelungen zum Recht auf Auskunft, zum Recht auf Löschung, zum
                                    Widerspruchsrecht, zur Verarbeitung besonderer Kategorien personenbezogener Daten,
                                    zur Verarbeitung für andere Zwecke und zur Übermittlung sowie automatisierten
                                    Entscheidungsfindung im Einzelfall einschliesslich Profiling. Des Weiteren regelt es
                                    die Datenverarbeitung für Zwecke des Beschäftigungsverhältnisses (§ 26 BDSG),
                                    insbesondere im Hinblick auf die Begründung, Durchführung oder Beendigung von
                                    Beschäftigungsverhältnissen sowie die Einwilligung von Beschäftigten. Ferner können
                                    Landesdatenschutzgesetze der einzelnen Bundesländer zur Anwendung gelangen.
                                </p>
                            </div>
                            <div class="block">
                                <h5 id="m27" class="title is-5">Sicherheitsmassnahmen</h5>
                                <p>
                                    Wir treffen nach Massgabe der gesetzlichen Vorgaben unter Berücksichtigung des
                                    Stands der Technik, der Implementierungskosten und der Art, des Umfangs, der
                                    Umstände und der Zwecke der Verarbeitung sowie der unterschiedlichen
                                    Eintrittswahrscheinlichkeiten und des Ausmasses der Bedrohung der Rechte und
                                    Freiheiten natürlicher Personen geeignete technische und organisatorische Massnahmen,
                                    um ein dem Risiko angemessenes Schutzniveau zu gewährleisten.</p>
                                <p>
                                    Zu den Massnahmen gehören insbesondere die Sicherung der Vertraulichkeit, Integrität
                                    und Verfügbarkeit von Daten durch Kontrolle des physischen und elektronischen
                                    Zugangs zu den Daten als auch des sie betreffenden Zugriffs, der Eingabe, der
                                    Weitergabe, der Sicherung der Verfügbarkeit und ihrer Trennung. Des Weiteren
                                    haben wir Verfahren eingerichtet, die eine Wahrnehmung von Betroffenenrechten, die
                                    Löschung von Daten und Reaktionen auf die Gefährdung der Daten gewährleisten.
                                    Ferner berücksichtigen wir den Schutz personenbezogener Daten bereits bei der
                                    Entwicklung bzw. Auswahl von Hardware, Software sowie Verfahren entsprechend dem
                                    Prinzip des Datenschutzes, durch Technikgestaltung und durch datenschutzfreundliche
                                    Voreinstellungen.
                                </p>
                                <p>
                                    <strong>SSL-Verschlüsselung (https)</strong>: Um Ihre via unserem Online-Angebot
                                    übermittelten Daten zu schützen, nutzen wir eine SSL-Verschlüsselung. Sie
                                    erkennen derart verschlüsselte Verbindungen an dem Präfix https:// in der
                                    Adresszeile Ihres Browsers.
                                </p>
                            </div>
                            <div class="block">
                                <h5 id="m24" class="title is-5">Datenverarbeitung in Drittländern</h5>
                                <p>
                                    Sofern wir Daten in einem Drittland (d.h., ausserhalb der Europäischen Union (EU),
                                    des Europäischen Wirtschaftsraums (EWR)) verarbeiten oder die Verarbeitung im Rahmen
                                    der Inanspruchnahme von Diensten Dritter oder der Offenlegung bzw. Übermittlung von
                                    Daten an andere Personen, Stellen oder Unternehmen stattfindet, erfolgt dies nur
                                    im Einklang mit den gesetzlichen Vorgaben.
                                </p>
                                <p>
                                    Vorbehaltlich ausdrücklicher Einwilligung oder vertraglich oder gesetzlich
                                    erforderlicher Übermittlung verarbeiten oder lassen wir die Daten nur in
                                    Drittländern mit einem anerkannten Datenschutzniveau, vertraglichen
                                    Verpflichtung durch sogenannte Standardschutzklauseln der EU-Kommission, beim
                                    Vorliegen von Zertifizierungen oder verbindlicher internen Datenschutzvorschriften
                                    verarbeiten (Art. 44 bis 49 DSGVO, Informationsseite der EU-Kommission:
                                    <a href="https://ec.europa.eu/info/law/law-topic/data-protection/international-dimension-data-protection_de">
                                        https://ec.europa.eu/info/law/law-topic/data-protection/international-dimension-data-protection_de
                                    </a>).
                                </p>
                            </div>
                            <div class="block">
                                <h5 id="m12" class="title is-5">Löschung von Daten</h5>
                                <p>
                                    Die von uns verarbeiteten Daten werden nach Massgabe der gesetzlichen Vorgaben
                                    gelöscht, sobald deren zur Verarbeitung erlaubten Einwilligungen widerrufen
                                    werden oder sonstige Erlaubnisse entfallen (z.B. wenn der Zweck der Verarbeitung
                                    dieser Daten entfallen ist oder sie für den Zweck nicht erforderlich sind).
                                </p>
                                <p>
                                    Sofern die Daten nicht gelöscht werden, weil sie für andere und gesetzlich
                                    zulässige Zwecke erforderlich sind, wird deren Verarbeitung auf diese Zwecke
                                    beschränkt. D.h., die Daten werden gesperrt und nicht für andere Zwecke verarbeitet.
                                    Das gilt z.B. für Daten, die aus handels- oder steuerrechtlichen Gründen aufbewahrt
                                    werden müssen oder deren Speicherung zur Geltendmachung, Ausübung oder Verteidigung
                                    von Rechtsansprüchen oder zum Schutz der Rechte einer anderen natürlichen oder
                                    juristischen Person erforderlich ist.
                                </p>
                                <p>
                                    Unsere Datenschutzhinweise können ferner weitere Angaben zu der Aufbewahrung und
                                    Löschung von Daten beinhalten, die für die jeweiligen Verarbeitungen vorrangig
                                    gelten.
                                </p>
                            </div>
                            <div class="block">
                                <h5 id="m225" class="title is-5">Bereitstellung des Onlineangebotes und Webhosting</h5>
                                <p>
                                    Um unser Onlineangebot sicher und effizient bereitstellen zu können, nehmen wir
                                    die Leistungen von einem oder mehreren Webhosting-Anbietern in Anspruch, von deren
                                    Servern (bzw. von ihnen verwalteten Servern) das Onlineangebot abgerufen werden
                                    kann. Zu diesen Zwecken können wir Infrastruktur- und Plattformdienstleistungen,
                                    Rechenkapazität, Speicherplatz und Datenbankdienste sowie Sicherheitsleistungen
                                    und technische Wartungsleistungen in Anspruch nehmen.
                                </p>
                                <p>
                                    Zu den im Rahmen der Bereitstellung des Hostingangebotes verarbeiteten Daten
                                    können alle die Nutzer unseres Onlineangebotes betreffenden Angaben gehören, die im
                                    Rahmen der Nutzung und der Kommunikation anfallen. Hierzu gehören regelmässig die
                                    IP-Adresse, die notwendig ist, um die Inhalte von Onlineangeboten an Browser
                                    ausliefern zu können, und alle innerhalb unseres Onlineangebotes oder von
                                    Webseiten getätigten Eingaben.
                                </p>
                                <p>
                                    <strong>Erhebung von Zugriffsdaten und Logfiles</strong>: Wir selbst (bzw. unser
                                    Webhostinganbieter) erheben Daten zu jedem Zugriff auf den Server (sogenannte
                                    Serverlogfiles). Zu den Serverlogfiles können die Adresse und Name der
                                    abgerufenen Webseiten und Dateien, Datum und Uhrzeit des Abrufs, übertragene
                                    Datenmengen, Meldung über erfolgreichen Abruf, Browsertyp nebst Version, das
                                    Betriebssystem des Nutzers, Referrer URL (die zuvor besuchte Seite) und im Regelfall
                                    IP-Adressen und der anfragende Provider gehören.
                                </p>
                                <p>
                                    Die Serverlogfiles können zum einen zu Zwecken der Sicherheit eingesetzt werden,
                                    z.B., um eine Überlastung der Server zu vermeiden (insbesondere im Fall von
                                    missbräuchlichen Angriffen, sogenannten DDoS-Attacken) und zum anderen, um die
                                    Auslastung der Server und ihre Stabilität sicherzustellen.
                                </p>
                                <p>
                                    <strong>Content-Delivery-Network</strong>: Wir setzen ein "Content-Delivery-Network"
                                    (CDN) ein. Ein CDN ist ein Dienst, mit dessen Hilfe Inhalte eines Onlineangebotes,
                                    insbesondere grosse Mediendateien, wie Grafiken oder Programm-Skripte, mit Hilfe
                                    regional verteilter und über das Internet verbundener Server schneller und
                                    sicherer ausgeliefert werden können.
                                </p>
                                <ul>
                                    <li>
                                        <strong>Verarbeitete Datenarten:</strong> Inhaltsdaten (z.B. Eingaben in
                                        Onlineformularen), Nutzungsdaten (z.B. besuchte Webseiten, Interesse an
                                        Inhalten, Zugriffszeiten), Meta-/Kommunikationsdaten (z.B. Geräte-Informationen,
                                        IP-Adressen).
                                    </li>
                                    <li>
                                        <strong>Betroffene Personen:</strong> Nutzer (z.B. Webseitenbesucher, Nutzer
                                        von Onlinediensten).
                                    </li>
                                    <li>
                                        <strong>Zwecke der Verarbeitung:</strong> Bereitstellung unseres
                                        Onlineangebotes und Nutzerfreundlichkeit, Content Delivery Network (CDN).
                                    </li>
                                    <li>
                                        <strong>Rechtsgrundlagen:</strong> Berechtigte Interessen (Art. 6 Abs. 1 S.
                                        1 lit. f. DSGVO).
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 id="m182" class="title is-5">Kontaktaufnahme und Anfragenverwaltung</h5>
                                <p>
                                    Bei der Kontaktaufnahme mit uns (z.B. per Kontaktformular, E-Mail, Telefon oder
                                    via soziale Medien) werden die Angaben der anfragenden Personen verarbeitet, soweit
                                    dies zur Beantwortung der Kontaktanfragen und etwaiger angefragter Massnahmen
                                    erforderlich ist.
                                </p>
                                <p>
                                    Die Beantwortung der Kontaktanfragen im Rahmen von vertraglichen oder
                                    vorvertraglichen Beziehungen erfolgt zur Erfüllung unserer vertraglichen
                                    Pflichten oder zur Beantwortung von (vor)vertraglichen Anfragen und im Übrigen auf
                                    Grundlage der berechtigten Interessen an der Beantwortung der Anfragen.
                                </p>
                                <ul>
                                    <li>
                                        <strong>Verarbeitete Datenarten:</strong> Bestandsdaten (z.B. Namen,
                                        Adressen), Kontaktdaten (z.B. E-Mail, Telefonnummern), Inhaltsdaten (z.B.
                                        Eingaben in Onlineformularen).
                                    </li>
                                    <li>
                                        <strong>Betroffene Personen:</strong> Kommunikationspartner.
                                    </li>
                                    <li>
                                        <strong>Zwecke der Verarbeitung:</strong> Kontaktanfragen und Kommunikation.
                                    </li>
                                    <li>
                                        <strong>Rechtsgrundlagen:</strong> Vertragserfüllung und vorvertragliche
                                        Anfragen (Art. 6 Abs. 1 S. 1 lit. b. DSGVO), Berechtigte Interessen (Art. 6
                                        Abs. 1 S. 1 lit. f. DSGVO).
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 id="m15" class="title is-5">Änderung und Aktualisierung der
                                    Datenschutzerklärung
                                </h5>
                                <p>
                                    Wir bitten Sie, sich regelmässig über den Inhalt unserer Datenschutzerklärung zu
                                    informieren. Wir passen die Datenschutzerklärung an, sobald die Änderungen der
                                    von uns durchgeführten Datenverarbeitungen dies erforderlich machen. Wir informieren
                                    Sie, sobald durch die Änderungen eine Mitwirkungshandlung Ihrerseits (z.B.
                                    Einwilligung) oder eine sonstige individuelle Benachrichtigung erforderlich
                                    wird.
                                </p>
                                <p>
                                    Sofern wir in dieser Datenschutzerklärung Adressen und Kontaktinformationen von
                                    Unternehmen und Organisationen angeben, bitten wir zu beachten, dass die
                                    Adressen sich über die Zeit ändern können und bitten die Angaben vor Kontaktaufnahme
                                    zu
                                    prüfen.
                                </p>
                            </div>
                            <div class="block">
                                <h5 id="m10" class="title is-5">Rechte der betroffenen Personen</h5>
                                <p>
                                    Ihnen stehen als Betroffene nach der DSGVO verschiedene Rechte zu, die sich
                                    insbesondere aus Art. 15 bis 21 DSGVO ergeben:
                                </p>
                                <ul>
                                    <li>
                                        <strong>
                                            Widerspruchsrecht: Sie haben das Recht, aus Gründen, die sich aus
                                            Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung der
                                            Sie betreffenden personenbezogenen Daten, die aufgrund von Art. 6 Abs. 1
                                            lit. e oder f DSGVO erfolgt, Widerspruch einzulegen; dies gilt auch für
                                            ein auf diese Bestimmungen gestütztes Profiling. Werden die Sie
                                            betreffenden personenbezogenen Daten verarbeitet, um Direktwerbung zu
                                            betreiben, haben Sie das Recht, jederzeit Widerspruch gegen die
                                            Verarbeitung der Sie betreffenden personenbezogenen Daten zum Zwecke
                                            derartiger Werbung einzulegen; dies gilt auch für das Profiling, soweit
                                            es mit solcher Direktwerbung in Verbindung steht.
                                        </strong>
                                    </li>
                                    <li>
                                        <strong>Widerrufsrecht bei Einwilligungen:</strong> Sie haben das Recht,
                                        erteilte Einwilligungen jederzeit zu widerrufen.
                                    </li>
                                    <li>
                                        <strong>Auskunftsrecht:</strong> Sie haben das Recht, eine Bestätigung
                                        darüber zu verlangen, ob betreffende Daten verarbeitet werden und auf
                                        Auskunft über diese Daten sowie auf weitere Informationen und Kopie der
                                        Daten entsprechend den gesetzlichen Vorgaben.
                                    </li>
                                    <li>
                                        <strong>Recht auf Berichtigung:</strong> Sie haben entsprechend den
                                        gesetzlichen Vorgaben das Recht, die Vervollständigung der Sie betreffenden
                                        Daten oder die Berichtigung der Sie betreffenden unrichtigen Daten zu
                                        verlangen.
                                    </li>
                                    <li>
                                        <strong>Recht auf Löschung und Einschränkung der Verarbeitung:</strong> Sie
                                        haben nach Massgabe der gesetzlichen Vorgaben das Recht, zu verlangen, dass
                                        Sie betreffende Daten unverzüglich gelöscht werden, bzw. alternativ nach
                                        Massgabe der gesetzlichen Vorgaben eine Einschränkung der Verarbeitung der
                                        Daten zu verlangen.
                                    </li>
                                    <li>
                                        <strong>Recht auf Datenübertragbarkeit:</strong> Sie haben das Recht, Sie
                                        betreffende Daten, die Sie uns bereitgestellt haben, nach Massgabe der
                                        gesetzlichen Vorgaben in einem strukturierten, gängigen und
                                        maschinenlesbaren Format zu erhalten oder deren Übermittlung an einen
                                        anderen Verantwortlichen zu fordern.
                                    </li>
                                    <li>
                                        <strong>Beschwerde bei Aufsichtsbehörde:</strong> Sie haben unbeschadet
                                        eines anderweitigen verwaltungsrechtlichen oder gerichtlichen Rechtsbehelfs
                                        das Recht auf Beschwerde bei einer Aufsichtsbehörde, insbesondere in dem
                                        Mitgliedstaat ihres gewöhnlichen Aufenthaltsorts, ihres Arbeitsplatzes oder
                                        des Orts des mutmasslichen Verstosses, wenn Sie der Ansicht sind, dass die
                                        Verarbeitung der Sie betreffenden personenbezogenen Daten gegen die Vorgaben
                                        der DSGVO verstösst.
                                    </li>
                                </ul>
                            </div>
                            <div class="block">
                                <h5 id="m42" class="title is-5">Begriffsdefinitionen</h5>
                                <p>
                                    In diesem Abschnitt erhalten Sie eine Übersicht über die in dieser
                                    Datenschutzerklärung verwendeten Begrifflichkeiten. Viele der Begriffe sind dem
                                    Gesetz entnommen und vor allem im Art. 4 DSGVO definiert. Die gesetzlichen
                                    Definitionen sind verbindlich. Die nachfolgenden Erläuterungen sollen dagegen
                                    vor allem dem Verständnis dienen. Die Begriffe sind alphabetisch sortiert.
                                </p>
                                <ul class="glossary">
                                    <li>
                                        <strong>Content Delivery Network (CDN):</strong> Ein "Content Delivery
                                        Network" (CDN) ist ein Dienst, mit dessen Hilfe Inhalte eines Onlineangebotes,
                                        insbesondere grosse Mediendateien, wie Grafiken oder Programm-Skripte mit
                                        Hilfe regional verteilter und über das Internet verbundener Server, schneller
                                        und sicherer ausgeliefert werden können.
                                    </li>
                                    <li>
                                        <strong>Personenbezogene Daten:</strong> "Personenbezogene Daten" sind alle
                                        Informationen, die sich auf eine identifizierte oder identifizierbare
                                        natürliche Person (im Folgenden "betroffene Person") beziehen; als
                                        identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt,
                                        insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer
                                        Kennnummer, zu Standortdaten, zu einer Online-Kennung (z.B. Cookie) oder zu
                                        einem oder mehreren besonderen Merkmalen identifiziert werden kann, die Ausdruck
                                        der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen,
                                        kulturellen oder sozialen Identität dieser natürlichen Person sind.
                                    </li>
                                    <li>
                                        <strong>Verantwortlicher:</strong> Als "Verantwortlicher" wird die
                                        natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die
                                        allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung
                                        von personenbezogenen Daten entscheidet, bezeichnet.
                                    </li>
                                    <li>
                                        <strong>Verarbeitung:</strong> "Verarbeitung" ist jeder mit oder ohne Hilfe
                                        automatisierter Verfahren ausgeführte Vorgang oder jede solche Vorgangsreihe
                                        im Zusammenhang mit personenbezogenen Daten. Der Begriff reicht weit und
                                        umfasst praktisch jeden Umgang mit Daten, sei es das Erheben, das Auswerten, das
                                        Speichern, das Übermitteln oder das Löschen.
                                    </li>
                                </ul>
                                <p class="seal">
                                    <a href="https://datenschutz-generator.de/?l=de"
                                       title="Rechtstext von Dr. Schwenke - für weitere Informationen bitte anklicken."
                                       rel="noopener noreferrer nofollow">
                                        Erstellt mit kostenlosem Datenschutz-Generator.de von Dr. Thomas Schwenke
                                    </a>
                                </p>
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
    include("footer.php");
    ?>
</footer>
</body>
</html>