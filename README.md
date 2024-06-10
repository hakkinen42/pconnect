# PconnectSolutions Localization

## Localization mit Docker

Dieses Projekt ist eine Anwendung, die mit Docker Compose betrieben wird.

### Anforderungen

- Docker muss installiert sein.
- Docker Compose muss installiert sein.

### Beschreibung

- Die Anwendung wird standardmäßig mit lokaler Spracheinstellung geöffnet. Bei Bedarf kann ein Sprachumschalter verwendet werden, um zwischen den verfügbaren 5 verschiedenen Sprachen zu wechseln.
- Die HTML-Strukturen, Feedbacks und gesendeten E-Mail-Teile während der Registrierungs- und Anmeldevorgänge wurden lokalisiert.
- Google-Anmeldung ist aktiviert.
- Das Design wurde aufgrund des Laravel 10 Projekts in den Hintergrund gerückt.

### Einstellungen

- Google Einstellungen

<ol start="1">
<li>
<strong>Melden Sie sich bei der Google Cloud Platform an:</strong> Öffnen Sie Ihren Browser und gehen Sie zur <a href="https://console.cloud.google.com/">Google Cloud Platform</a>-Startseite.
</li>
<li>
<strong>Melden Sie sich bei Ihrem Konto an:</strong> Wenn Sie bereits ein Google-Konto haben, melden Sie sich mit Ihrem Benutzernamen und Ihrem Passwort an. Andernfalls erstellen Sie ein neues Konto.
</li>
<li>
<strong>Erstellen Sie ein neues Projekt:</strong> Nachdem Sie sich bei der Google Cloud Platform-Konsole angemeldet haben, klicken Sie oben rechts auf das Menü "Projektauswahl" und wählen Sie die Option "Neues Projekt".
</li>
<li>
<strong>Geben Sie den Projektnamen und die ID an:</strong> Geben Sie einen Projektnamen und optional eine Projekt-ID ein, um ein neues Projekt zu erstellen.
</li>
<li>
<strong>Projekt erstellen:</strong> Nachdem Sie die Informationen eingegeben haben, klicken Sie auf die Schaltfläche "Erstellen", um das neue Projekt zu erstellen.
</li>
<li>
<strong>Wechseln Sie zur Seite "APIs & Services":</strong> Klicken Sie im linken oberen Menü auf das Menüsymbol und wählen Sie "APIs & Services" > "Credentials", um zur Seite "Credentials" zu gelangen.
</li>
<li>
<strong>Wechseln Sie zum Tab "OAuth-Client-ID":</strong> Nachdem Sie auf "Create credentials" geklickt haben, wählen Sie die Option "OAuth-Client-ID".
</li>
<li>
<strong>App-Typ als Webanwendung einstellen:</strong> Bei der Erstellung der OAuth-Client-ID wählen Sie den App-Typ als "Web Aplication".
</li>
<li>
<strong>Fügen Sie autorisierte JavaScript-Ursprünge hinzu:</strong> Fügen Sie dem Abschnitt "Autorisiert
JavaScript-Ursprünge" die URL http://pconnectsolutions.com/ hinzu.
</li>
<li>
<strong>Fügen Sie autorisierte Weiterleitungs-URIs hinzu:</strong> Fügen Sie dem Abschnitt "Autorisiert
Weiterleitungs-URIs" die URI `http://pconnectsolutions.com/auth/google/callback` hinzu und speichern Sie di
Einstellungen.
</li>
<li>
<strong>Holen Sie sich Ihren API-Schlüssel:</strong> Nachdem Sie Ihren API-Schlüssel erstellt haben, wird Ihnen ein Schlüssel zur Verfügung gestellt. Diesen Schlüssel können Sie in Ihrem Projekt verwenden.
</li>
</ol>

- Mailtrap Einstellungen

<ol start="1">
<li>
<strong>Gehe zur Mailtrap-Website:</strong> Öffnen Sie Ihren Browser und gehen Sie zur <a href="https://mailtrap.io/">Mailtrap</a> Mailtrap-Website.
</li>
<li>
<strong>E-Mail-Testing Bereich: Projekt erstellen:</strong> Mailtrap-Oberfläche, es sollte einen Bereich namens "E-Mail-Testing" geben. Erstellen Sie von diesem Bereich aus ein neues Projekt.
</li>
<li>
<strong>Code Samples: Konfigurationsdaten für PHP 9+ in Ihre .env-Datei einfügen:</strong> In Mailtraps "Code-Beispiele" Abschnitt finden Sie Konfigurationsdaten für PHP und Laravel. Kopieren Sie diese Daten und fügen Sie sie in Ihre .env-Datei ein. 
</li>
</ol>
Durch die Umsetzung dieser Schritte können Sie den E-Mail-Versand testen und die Konfiguration für Laravel einrichten.

### Installation

- <u><b>Installationsschritte mit Docker</b></u>
<ol start="1">
<li>Klonen Sie das Projekt: <br>
<code>git clone https://github.com/hakkinen42/pconnect.git</code><br>
</li>

<li>Bearbeiten Sie die Datei <b>/etc/hosts</b> und fügen Sie das Projekt hinzu: <br>
<code>sudo nano /etc/hosts</code><br>
Fügen Sie folgende Zeile hinzu:<br>
<code>127.0.0.1 pconnectsolutions.com</code>
</li>

<li>Bauen Sie die Docker-Images und starten Sie die Container: <br>
<code>cd docker</code>
<code>docker-compose up</code>
</li>

<li>Öffnen Sie Ihren Browser und gehen Sie zu <a href="http://pconnectsolutions.com">http://pconnectsolutions.com</a>, um die Anwendung anzuzeigen.</li>
<li>Erstellen Sie die <b>.env</b> Datei: <br>
<code>cp .env.example .env</code><br>
Konfigurieren Sie die <b>.env</b> Datei entsprechend Ihren Bedürfnissen. Ein Beispiel für eine Konfiguration ist unten angegeben:
<pre><code>

DB_HOST=mysql8.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=root

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=mailtrap_benutzername
MAIL_PASSWORD=mailtrap_passwort
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="pconnetsolutions@example.com"
MAIL_FROM_NAME="${APP_NAME}"

GOOGLE_CLIENT_ID=google_client_id
GOOGLE_SECRET_KEY=google_secret_key
</code></pre>
</li>
<li>Erstellen Sie die Datenbank und führen Sie Migrationsbefehle aus: <br>
<ol>
<li>Öffnen Sie Ihren Browser und gehen Sie zu http://localhost:8080.</li>
<li>Sie werden den Anmeldebildschirm von PHPMyAdmin sehen. Verwenden Sie den Benutzernamen und das Passwort des MySQL-Root-Benutzers, die Sie in env-Datei festgelegt haben.</li>

<li>Nachdem Sie sich erfolgreich bei PHPMyAdmin angemeldet haben, gehen Sie im linken Navigationsbereich zum Tab "Datenbanken".</li>
<li>Wenn Sie auf den Tab "Datenbanken" klicken, sehen Sie oben rechts die Schaltfläche "Neu". Klicken Sie darauf, um eine neue Datenbank zu erstellen.</li>
<li>Geben Sie den gewünschten Namen für die Datenbank ein und klicken Sie auf die Schaltfläche "Erstellen".</li>
<li>
Indem Sie diesen Schritten folgen, können Sie über PHPMyAdmin eine neue Datenbank zu Ihrem bereits laufenden MySQL-Datenbankcontainer hinzufügen.
</li>
</ol>
<code>docker ps</code><br>
<code>docker exec -it php8.2_container_id bash</code><br>
Dann im Container:<br>
<code>cd pconnect_solutions</code>
<code>php artisan migrate</code>
</li>
<li>Generieren Sie den Anwendungsschlüssel: <br>
<code>php artisan key:generate</code>
</li>
</ol>

### Nutzung

<ul>
<li>Um sicherzustellen, dass die Anwendung läuft, öffnen Sie Ihren Browser und gehen Sie zu <a href="http://pconnectsolutions.com">http://pconnectsolutions.com</a>.</li>
</ul>

<hr>
<hr>

## PConnect Solutions Projekt

Dieses Projekt ist eine Webanwendung, die mit Laravel entwickelt wurde. Um das Projekt auf Ihrem lokalen Rechner ohne Docker auszuführen, befolgen Sie bitte die folgenden Schritte:

### Anforderungen

- PHP (Version 8.0 oder höher)
- Composer
- MySQL Datenbank
- Webserver (Apache, Nginx usw.)

### Installation

<ol start="1">
<li>Klonen Sie das Projekt: <br>
<code>git clone https://github.com/hakkinen42/pconnect.git</code><br>
<code>cd pconnect</code>
</li>
<li>Installieren Sie Laravel und die Abhängigkeiten: <br>
<code>cd pconnect_solutions</code><br>
<code>composer install</code>
</li>
<>Erstellen Sie die <b>.env</b> Datei: <br>
<code>cp .env.example .env</code><br>
Konfigurieren Sie die <b>.env</b> Datei entsprechend Ihren Bedürfnissen. Ein Beispiel für eine Konfiguration ist unten angegeben:
<pre><code>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=mailtrap_benutzername
MAIL_PASSWORD=mailtrap_passwort
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="pconnetsolutions@example.com"
MAIL_FROM_NAME="${APP_NAME}"

GOOGLE_CLIENT_ID=google_client_id
GOOGLE_SECRET_KEY=google_secret_key
</code></pre>
</li>
<li>Erstellen Sie die Datenbank und führen Sie Migrationsbefehle aus: <br>
<code>php artisan migrate</code>
<li>Generieren Sie den Anwendungsschlüssel: <br>
<code>php artisan key:generate</code>
</li>
<li>Starten Sie die Anwendung: <br>
<code>php artisan serve</code>
</ol>

### Nutzung

Nachdem die Anwendung gestartet wurde, können Sie sie über Ihren Browser unter [http://localhost:8000](http://localhost:8000) aufrufen und verwenden.

