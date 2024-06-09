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

### Installation

- <u><b>Installationsschritte mit Docker</b></u>
<ol start="1">
<li>Klonen Sie das Projekt: <br>
<code>git clone https://github.com/benutzername/projektname.git</code><br>
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
</li>
<li>Erstellen Sie die Datenbank und führen Sie Migrationsbefehle aus: <br>
<code>docker ps</code><br>
<code>docker exec -it php8.2_container_id bash</code><br>
Dann im Container:<br>
<code>cd pconnect_solutions</code>
<code>php artisan migrate</code>
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
<code>git clone https://github.com/benutzername/projektname.git</code><br>
<code>cd projektname</code>
</li>
<li>Installieren Sie Laravel und die Abhängigkeiten: <br>
<code>cd pconnect_solutions</code><br>
<code>composer install</code>
</li>
<>Erstellen Sie die <b>.env</b> Datei: <br>
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
<code>php artisan migrate</code>
<li>Generieren Sie den Anwendungsschlüssel: <br>
<code>php artisan key:generate</code>
</li>
<li>Starten Sie die Anwendung: <br>
<code>php artisan serve</code>
</ol>

### Nutzung

Nachdem die Anwendung gestartet wurde, können Sie sie über Ihren Browser unter [http://localhost:8000](http://localhost:8000) aufrufen und verwenden.

