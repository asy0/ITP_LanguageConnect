# ITP_LanguageConnect
ITP Project 


Problem:
- Moderne Bildung birgt Herausforderungen wie verschiedene Lernbedürfnisse, begrenzte Unterstützung außerhalb des Klassenzimmers und Zeitmangel, die das Lernen oberflächlich machen und die Motivation beeinträchtigen.

Lösung:
- Unsere Website ermöglicht es Schülern, Tutorien anzubieten und zu buchen, um individuelle Bedürfnisse zu adressieren und gemeinschaftliches Lernen zu fördern.


Funktionen:
  - Benutzerregistrierung und -verwaltung
  - Kursbuchung und -verwaltung
    

Technologie:
  - Frontend: HTML, PHP, CSS, Bootstrap
  - Backend: Datenbank mit SQL, PHP für die Verbindung zur Datenbank und die Verarbeitung von Anfragen
  - Entwicklungstools: GitHub für Versionskontrolle, Visual Studio Code/Webstorm für die Entwicklung, XAMPP für die lokale Entwicklungsumgebung


Voraussetzungen:
  - Webserver: Apache (enthalten in XAMPP)
  - PHP: Version 7.4 oder höher
  - Datenbank: MySQL (enthalten in XAMPP)
  - PHPMyAdmin:  Zur Verwaltung der MySQL-Datenbank (enthalten in XAMPP)

Installation:
  1. XAMPP installieren
       - Laden Sie XAMPP von der offiziellen Website herunter und installieren Sie es.
       - Starten Sie Apache und MySQL über das XAMPP-Kontrollpanel.
    
  2. Projektdateien kopieren:
       - Klonen oder laden Sie dieses Repository herunter.
       - Kopieren Sie den gesamten Inhalt des Projektordners `root` in das `htdocs`-Verzeichnis von XAMPP. Der Standardpfad ist `C:\xampp\htdocs`.

Datenbankeinrichtung:
 - Datenbank erstellen:
   - Öffnen Sie PHPMyAdmin über `http://localhost/phpmyadmin`.
   - Erstellen Sie eine neue Datenbank, z.B. `languageconnect`.
   - Importieren Sie die SQL-Datei, die die Datenbankstruktur enthält.

Konfiguration:

  1. Datenbankverbindung konfigurieren
       - Öffnen Sie die Datei `db_connect.php` im Ordner `actions` und passen Sie die Datenbankzugangsdaten an.
         ```
         <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "languageconnect";
          

Starten des Projekts:
   1. Projekt starten:
      - Öffnen Sie Ihren Webbrowser und gehen Sie zu `http://localhost/` gefolgt vom Namen Ihres Projektordners, z.B. `http://localhost/languageconnect`.
      - Die Startseite Ihrer Anwendung sollte jetzt geladen werden.


Fehlerbehebung:
   - Überprüfen Sie die Apache- und MySQL-Logs im XAMPP-Kontrollpanel, falls es Probleme gibt.
   - Stellen Sie sicher, dass alle PHP-Erweiterungen, die von Ihrem Projekt benötigt werden, in der `php.ini` von XAMPP aktiviert sind.


Team:
- Mahmood S.
- Wendelin W.
- Zeliha V.
