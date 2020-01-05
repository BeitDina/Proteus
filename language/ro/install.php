<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'							=> 'Panoul de instalare',
	'SELECT_LANG'								=> 'Selectare limbă',

	'STAGE_INSTALL'							=> 'Installing phpBB',
	'INTRODUCTION_TITLE'						=> 'Introduction',

	// Introduction page
	'INTRODUCTION_BODY'						=> 'the installation guide</a>.<br />
<br />
To read the phpBB3 license or learn about obtaining support and our stance on it, please select the respective options from the side menu. To continue, please select the appropriate tab above.">Welcome to phpBB3!<br />
<br />
phpBB is the most widely used open source bulletin board solution in the world. phpBB3 is the latest installment in a package line started in 2000. Like its predecessors, phpBB3 is feature-rich, user-friendly, and fully supported by the phpBB Team. phpBB3 greatly improves on what made phpBB2 popular, and adds commonly requested features that were not present in previous versions. We hope it exceeds your expectations.<br />
<br />
This installation system will guide you through installing phpBB3, updating to the latest version of phpBB3 from past releases, as well as converting to phpBB3 from a different discussion board system (including phpBB2). For more information, we encourage you to read <a href="../docs/INSTALL.html">the installation guide</a>.<br />
<br />
To read the phpBB3 license or learn about obtaining support and our stance on it, please select the respective options from the side menu. To continue, please select the appropriate tab above.',

	// Support page
	'SUPPORT_TITLE'	=> 'Support',
	'SUPPORT_BODY'	=> 'Forumul de convertoare</a>)</li></ul><p>Noi încurajăm utilizatorii care încă rulează versiunile beta ale phpBB3 să-ăi înlocuiască instalările o copie proaspătă a ultimei versiuni.</p><h2>MODificări / Stiluri</h2><p>Pentru problemele legate de MODificări, vă rugăm să scrieăi în <a href="https://www.phpbb.com/community/viewforum.php?f=81">Forumul de MODificări</a>.<br />
Pentru problemele legate de stiluri, şabloane ăi seturi de imagini, vă rugăm să scrieăi în <a href="http://www.phpbb.com/community/viewforum.php?f=80">Forumul de stiluri</a>.<br />
<br />
Dacă întrebarea este legată de un pachet anume, vă rugăm să scrieăi în direct în subiectul dedicat pachetului.</p><h2>Cum se obăine suportul</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Pachetul de bun venit al phpBB</a><br />
<a href="http://www.phpbb.com/support/">Secăiune suport</a><br />
<a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Ghid scurt de început</a><br />
<br />
Pentru a vă asigura că sunteăi la zi cu ultimele ătiri ăi versiuni, <a href="http://www.phpbb.com/support/">înscrieţi-vă la lista noastră de email</a>!<br />
<br />
">Suportul total va fi oferit gratuit pentru versiunea curenta stabilă a phpBB3. Acesta include:</p><ul><li>instalare</li><li>configurare</li><li>întrebări tehnice</li><li>probleme legate de erori posibile în software</li><li>actualizări de la versiunile de tip candidat (RC) la ultima versiune stabilă</li><li>conversia de la phpBB 2.0.x la phpBB3</li><li>conversia de la alt software pentru forum la phpBB3 (vă rugăm să consultaăi <a href="https://www.phpbb.com/community/viewforum.php?f=65">Forumul de convertoare</a>)</li></ul><p>Noi încurajăm utilizatorii care încă rulează versiunile beta ale phpBB3 să-ăi înlocuiască instalările o copie proaspătă a ultimei versiuni.</p><h2>MODificări / Stiluri</h2><p>Pentru problemele legate de MODificări, vă rugăm să scrieăi în <a href=&quot;https://www.phpbb.com/community/viewforum.php?f=81&quot;>Forumul de MODificări</a>.<br />
Pentru problemele legate de stiluri, ăabloane ăi seturi de imagini, vă rugăm să scrieăi în <a href="http://www.phpbb.com/community/viewforum.php?f=80">Forumul de stiluri</a>.<br />
<br />
Dacă întrebarea este legată de un pachet anume, vă rugăm să scrieăi în direct în subiectul dedicat pachetului.</p><h2>Cum se obăine suportul</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Pachetul de bun venit al phpBB</a><br />
<a href="http://www.phpbb.com/support/">Secăiune suport</a><br />
<a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Ghid scurt de început</a><br />
<br />
Pentru a vă asigura că sunteăi la zi cu ultimele ătiri ăi versiuni, <a href="http://www.phpbb.com/support/">înscrieăi-vă la lista noastră de email</a>!<br />
<br />',

	// License	
	'LICENSE_TITLE'							=> 'General Public License',
	
	// Install page	
	'INSTALL_INTRO'							=> 'Bine aăi venit la instalare',
	'INSTALL_INTRO_BODY'						=> 'Cu această opăiune puteăi să instalaăi phpBB pe serverul propriu.</p><p>Pentru a începe aveăi nevoie de setările bazei de date. Dacă nu ătiăi setările bazei de date, contactaăi provider-ul hostului ăi cereăi informaăii despre aceastea. Nu veăi putea continua fără aceste setări. Aveăi nevoie de:</p>

	<ul>
		<li>Tipul bazei de date - baza de date pe care o veăi folosi.</li>
		<li>Numele serverului de găzduire a bazei de date sau DSN-ul acesteia - adresa către serverul bazei de date.</li>
		<li>Portul serverului bazei de date - portul serverului bazei de date (în majoritatea cazurilor acesta nu este necesar).</li>
		<li>Numele bazei de date - numele bazei de date de pe server.</li>
		<li>Numele de utilizator ăi parola bazei de date - Datele de autentificare pentru a accesa baza de date.</li>
	</ul>

	<p><strong>Notă:</strong> dacă instalaăi forumul folosind SQLite, va trebui să specificaăi în cămpul DSN calea completă către fiăierul bazei de date ăi să lăsaăi necompletate cămpurile nume utilizator ăi parolă. Din motive de securitate va trebui să vă asiguraăi că fiăierul bazei de date nu este stocat într-o locaăie accesibilă de pe web.</p>

	<p>phpBB3 suportă următoarele baze de date:</p>
	<ul>
		<li>MySQL 3.23 sau mai nou (MySQLi suportat deasemenea)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 sau mai nou (direct sau via ODBC)</li>
		<li>MS SQL Server 2005 sau mai nou (nativ)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Vor fi afiăate numai acele baze de date suportate pe serverul propriu.',
	'ACP_LINK'								=> 'the ACP</a>">Take me to <a href="%1$s&quot;>the ACP</a>',

	'INSTALL_PHPBB_INSTALLED'					=> 'phpBB is already installed.',
	'INSTALL_PHPBB_NOT_INSTALLED'				=> 'phpBB is not installed yet.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'							=> 'File does not exist',
	'FILE_NOT_EXISTS_EXPLAIN'					=> 'To be able to install phpBB the %1$s file needs to exist.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s file exist for a better forum user experience.',
	'FILE_NOT_WRITABLE'						=> 'File is not writable',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'To be able to install phpBB the %1$s file needs to be writable.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s file be writable for a better forum user experience.',

	'DIRECTORY_NOT_EXISTS'					=> 'Directory does not exist',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'			=> 'To be able to install phpBB the %1$s directory needs to exist.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s directory exist for a better forum user experience.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Directory is not writable',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'To be able to install phpBB the %1$s directory needs to be writable.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s directory be writable for a better forum user experience.',

	// Server requirements
	'PHP_VERSION_REQD'						=> 'Versiune PHP >= 5.3.3, < 7.0.0-dev',
	'PHP_VERSION_REQD_EXPLAIN'				=> 'phpBB requires PHP version 7.1.3 or higher.',
	'PHP_GETIMAGESIZE_SUPPORT'				=> 'Funcăia PHP getimagesize() este disponibilă',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'		=> '<strong>Necesar</strong> - Pentru ca phpBB să funcăioneze corect, funcăia getimagesize trebuie să fie disponibilă.',
	'PCRE_UTF_SUPPORT'						=> 'Suport PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'				=> 'phpBB <strong>nu</strong> va rula dacă instalarea PHP nu este compilată cu suport UTF-8 în extensia PCRE',
	'PHP_JSON_SUPPORT'						=> 'Ajutor PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'				=> '<strong>Necesar</strong> - Pentru ca phpBB să funcăioneze corect, este necesară extensia PHP JSON.',
	'PHP_XML_SUPPORT'							=> 'PHP XML/DOM support',
	'PHP_XML_SUPPORT_EXPLAIN'					=> 'In order for phpBB to function correctly, the PHP XML/DOM extension needs to be available.',
	'PHP_SUPPORTED_DB'						=> 'Baze de date suportate',
	'PHP_SUPPORTED_DB_EXPLAIN'				=> '<strong>Cerinăe</strong> - Trebuie să aveăi suport pentru cel puăin o bază de date compatibilă cu PHP. Dacă niciun modul al bazei de date nu este afiăat ca fiind disponibil, ar trebui să contactaăi provider-ul hostului sau să revizuiăi pentru ajutor documentaăia relevantă de instalare a PHP.',

	'RETEST_REQUIREMENTS'						=> 'Retest requirements',

	'STAGE_REQUIREMENTS'						=> 'Cerinăe',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'					=> 'Trebuie să completaăi toate cămpurile din acest bloc',

	'TIMEOUT_DETECTED_TITLE'					=> 'The installer detected a timeout',
	'TIMEOUT_DETECTED_MESSAGE'				=> 'The installer has detected a timeout, you may try to refresh the page, which may lead to data corruption. We suggest that you either increase your timeout settings or try to use the CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'						=> 'Set installation data',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'						=> 'Detalii administrator',

	// Form labels
	'ADMIN_CONFIG'							=> 'Configurare administrator',
	'ADMIN_PASSWORD'							=> 'Parolă administrator',
	'ADMIN_PASSWORD_CONFIRM'					=> 'Confirmaăi parola administratorului',
	'ADMIN_PASSWORD_EXPLAIN'					=> '(Specificaăi o parolă cu lungimea între 6 ăi 30 caractere)',
	'ADMIN_USERNAME'							=> 'Numele de utilizator al administratorului',
	'ADMIN_USERNAME_EXPLAIN'					=> '(Specificaăi un nume de utilizator cu lungimea între 3 ăi 20 caractere)',

	// Errors
	'INST_ERR_EMAIL_INVALID'					=> 'Adresa de email pe care aăi specificat-o este invalidă',
	'INST_ERR_PASSWORD_MISMATCH'				=> 'Parolele specificate nu se potrivesc.',
	'INST_ERR_PASSWORD_TOO_LONG'				=> 'Parola specificată este prea lungă. Lungimea maximă este de 30 de caractere.',
	'INST_ERR_PASSWORD_TOO_SHORT'				=> 'Parola specificată este prea scurtă. Lungimea minimă este de 6 caractere.',
	'INST_ERR_USER_TOO_LONG'					=> 'Numele de utilizator specificat este prea lung. Lungimea maximă este de 20 de caractere.',
	'INST_ERR_USER_TOO_SHORT'					=> 'Numele de utilizator specificat este prea scurt. Lungimea minimă este de 3 caractere.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'							=> 'Bulletin board configuration',
	'DEFAULT_LANGUAGE'						=> 'Default language',
	'BOARD_NAME'								=> 'Title of the board',
	'BOARD_DESCRIPTION'						=> 'Short description of the board',

	//
	// Database data
	//
	'STAGE_DATABASE'							=> 'Setări bază de date',

	// Form labels
	'DB_CONFIG'								=> 'Configurare bază de date',
	'DBMS'									=> 'Tipul bazei de date',
	'DB_HOST'									=> 'Nume gazdă pentru serverul bazei de date sau DSN',
	'DB_HOST_EXPLAIN'							=> 'DSN (Numele sursei de date) este relevant doar pentru instalările ODBC. Pentru PostgreSQL, folosiăi localhost pentru a vă conecta la serverul local prin socket-ul domeniului UNIX ăi 127.0.0.1 pentru a vă conecta prin TCP. PEntru SQLite, specificaăi calea completă către fiăierul bazei de date proprii.',
	'DB_PORT'									=> 'Portul serverului bazei de date',
	'DB_PORT_EXPLAIN'							=> 'Lăsaăi acest cămp necompletat doar dacă ătiăi că serverul operează pe un port ce nu e standard.',
	'DB_PASSWORD'								=> 'Parola bazei de date',
	'DB_NAME'									=> 'Numele bazei de date',
	'DB_USERNAME'								=> 'Numele de utilizator al bazei de date',
	'DATABASE_VERSION'						=> 'Versiune Bază de Date',
	'TABLE_PREFIX'							=> 'Prefixul pentru tabele în baza de date',
	'TABLE_PREFIX_EXPLAIN'					=> 'Prefixul trebuie să înceapă cu o literă ăi să conăină doar litere, cifre ăi liniuăe de subliniere.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'				=> 'Oracle',
	'DB_OPTION_POSTGRES'			=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'				=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Eroare instalare Database',
	'INST_ERR_NO_DB'				=> 'Nu s-a putut încărca modulul PHP pentru tipul bazei de date selectat',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefixul introdus este invalid. Trebuie să înceapă cu o literă ăi să conăină doar litere, cifre ăi liniuăe de subliniere.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Prefixul tabelei specificat este prea lung. Lungimea maximă este de %d caractere.',
	'INST_ERR_DB_NO_NAME'			=> 'Niciun nume specificat pentru baza de date',
	'INST_ERR_DB_FORUM_PATH'		=> 'Fişierul bazei de date specificat este în interiorul arborelui de directoare al forumului. Ar trebui să puneăi acest fiăier intr-o locaăie web neaccesibilă',
	'INST_ERR_DB_CONNECT'			=> 'Nu s-a putut efectua conexiunea către baza de date, consultaăi mai jos mesajul de eroare',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Both the database and the directory containing it must be writable.',
	'INST_ERR_DB_NO_ERROR'			=> 'Niciun mesaj de eroare',
	'INST_ERR_PREFIX'				=> 'Tabelele cu prefixul specificat există deja, vă rugăm sa alegeăi un alt prefix.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Versiunea MySQL instalată pe acest server este incompatibilă cu opăiunea ă?MySQL cu extensie MySQLiă? pe care aăi selectat-o. în loc de aceasta, vă rugăm să încercaăi opăiunea ă?MySQLă?.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Versiunea extensiei SQLite pe care aăi instalat-o este prea veche, trebuie să fie actulizată la cel puăin 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Versiunea Oracle instalată pe acest server necesită setarea valorii <var>UTF8</var> în parametrul <var>NLS_CHARACTERSET</var>. Fie actualizaăi instalarea la 9.2+ sau schimbaăi parametrii.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Baza de date selectată nu a fost creată în codarea <var>UNICODE</var> sau <var>UTF8</var>. încercaăi să instalaăi forumul cu baza de date în codarea <var>UNICODE</var> sau <var>UTF8</var>',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'The schema file is not writable',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail configuration',

	// Package info
	'PACKAGE_VERSION'					=> 'Versiunea Pachetului instalat',

	'UPDATE_INCOMPLETE'				=> 'Instalarea dvs. phpBB nu a fost corect actualizată.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Vă rugăm să citiăi informaăiile de mai jos pentru rezolvarea acestei erori.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> 'scriptul database_update</a> ăi rulaăi-l. Dacă vă lipseşte, vă rugăm să <a href="https://www.phpbb.com/downloads/" title="phpBB downloads">descărcaăi pachetul dvs.</a>, urcaăi-l în directorul "Install" din rădăcina forumului (unde este situat fiăierul config.php) ăi <a href=&quot;%1$s&quot; title=&quot;%1$s&quot;>rulaăi scriptul pentru actualizarea bazei de date</a>.</p>&quot;><h1>Actualizare incompletă</h1>
	<p>Am observat că ultima dvs. actualizare este incompletă. Vizitaăi <a href="%1$s" title="%1$s">scriptul database_update</a> ăi rulaăi-l. Dacă vă lipseăte, vă rugăm să <a href="https://www.phpbb.com/downloads/" title="phpBB downloads">descărcaăi pachetul dvs.</a>, urcaăi-l în directorul "Install&quot; din rădăcina forumului (unde este situat fiăierul config.php) ăi <a href=&quot;%1$s&quot; title=&quot;%1$s&quot;>rulaăi scriptul pentru actualizarea bazei de date</a>.</p>',

	//
	// Server data
	//
	// Form labels (Etichete forum)
	'UPGRADE_INSTRUCTIONS' => 'O nouă versiune de funcții <strong>%1$s </strong> este disponibilă. Vă rugăm să citiți <a href="%2$s" title=&quot;%2$s&quot;><strong> anunțul de lansare </strong> </a> pentru a afla despre ce trebuie să ofere și cum să actualizați."',
	'SERVER_CONFIG'				=> 'Configuraţie server',
	'SCRIPT_PATH'				=> 'Cale script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Calea unde phpBB este localizat relativ la numele domeniului, de exemplu <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'			=> 'Mulţumim, Conducerea',
	'CONFIG_SITE_DESC'				=> 'Un text scurt pentru a descrie forumul propriu',
	'CONFIG_SITENAME'				=> 'domeniultau.ro',
	'DEFAULT_INSTALL_POST'			=> 'Acesta este un mesaj exemplu din instalarea phpBB3. Totul pare să funcăioneze normal. Puteăi ăterge acest mesaj dacă doriăi ăi continua configurarea forumului. în timpul procesului de instalare, pe prima categorie ăi primul forum este atribuit un set de permisiuni potrivit grupurilor predefinite de administratori, roboăi, moderatori globali, vizitatori, utilizatori înregistraăi ăi utilizatori înregistraăi COPPA. De asemenea, dacă alegeăi să ătergeăi prima categorie ăi primul forum, nu uitaăi să stabiliăi permisiuni pentru toate aceste grupuri de utilizatori pe toate categoriile ăi forumurile pe care le creaăi. Este recomandat să redenumiăi prima categorie ăi primul forum ăi să copiaăi permisiunile de la acestea cănd creaăi categorii ăi forumuri noi. Nu uitaăi că suportul în limba romănă se acordă pe forumul phpBB Romănia, disponibil la adresa http://www.phpbb.ro. Distracăie maximă!',

	'FORUMS_FIRST_CATEGORY'			=> 'Prima mea categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrierea primului forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Primul forum propriu',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administratorul site-ului',
	'REPORT_WAREZ'					=> 'Acest mesaj conăine legături către aplicaăii ilegale sau piratate.',
	'REPORT_SPAM'					=> 'Mesajul raportat are drept scop doar reclama pentru un alt site web sau alt produs.',
	'REPORT_OFF_TOPIC'				=> 'Mesajul raportat este în afara subiectului.',
	'REPORT_OTHER'							=> 'Mesajul raportat nu se potriveăte în nicio altă categorie, vă rugăm să folosiăi cămpul de descriere.',

	'SMILIES_ARROW'							=> 'Săgeată',
	'SMILIES_CONFUSED'						=> 'Confuz',
	'SMILIES_COOL'							=> 'Mişto',
	'SMILIES_CRYING'							=> 'Plângând sau Foarte supărat',
	'SMILIES_EMARRASSED'						=> 'Ruşinat',
	'SMILIES_EVIL'							=> 'Rău sau Foarte supărat',
	'SMILIES_EXCLAMATION'						=> 'Exclamare',
	'SMILIES_GEEK'							=> 'Tocilar',
	'SMILIES_IDEA'							=> 'Idee',
	'SMILIES_LAUGHING'						=> 'Râzănd',
	'SMILIES_MAD'								=> 'Supărat',
	'SMILIES_MR_GREEN'						=> 'Dl. Green',
	'SMILIES_NEUTRAL'							=> 'Neutru',
	'SMILIES_QUESTION'						=> 'Întrebare',
	'SMILIES_RAZZ'							=> 'Tachinează',
	'SMILIES_ROLLING_EYES'					=> 'Ochi rostogolindu-se',
	'SMILIES_SAD'								=> 'Trist',
	'SMILIES_SHOCKED'							=> 'Şocat',
	'SMILIES_SMILE'							=> 'Zâmbet',
	'SMILIES_SURPRISED'						=> 'Surprins',
	'SMILIES_TWISTED_EVIL'					=> 'Diavol mic',
	'SMILIES_UBER_GEEK'						=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'						=> 'Foarte fericit',
	'SMILIES_WINK'							=> 'Clipire',

	'TOPICS_TOPIC_TITLE'						=> 'Bine aţi venit la phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'							=> 'Overview',
	'MENU_INTRO'							=> 'Introducere',
	'MENU_LICENSE'							=> 'Licenţă',
	'MENU_SUPPORT'							=> 'Susţinere',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'					=> 'Creating configuration file',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'				=> 'Adding configuration settings',
	'TASK_ADD_DEFAULT_DATA'					=> 'Adding default settings to the database',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'		=> 'Creating database schema file',
	'TASK_SETUP_DATABASE'						=> 'Setting up database',
	'TASK_CREATE_TABLES'						=> 'Creating tables',

	// Install data
	'TASK_ADD_BOTS'							=> 'Registering bots',
	'TASK_ADD_LANGUAGES'						=> 'Installing available languages',
	'TASK_ADD_MODULES'						=> 'Installing modules',
	'TASK_CREATE_SEARCH_INDEX'				=> 'Creating search index',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'					=> 'Installing packaged extensions',
	'TASK_NOTIFY_USER'						=> 'Sending notification e-mail',
	'TASK_POPULATE_MIGRATIONS'				=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'						=> 'The installer has finished successfully',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'						=> 'Module not found',
	'MODULE_NOT_FOUND_DESCRIPTION'			=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'							=> 'Task not found',
	'TASK_NOT_FOUND_DESCRIPTION'				=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'								=> 'Skip ă?%să? module',
	'SKIP_TASK'								=> 'Skip ă?%să? task',

	'TASK_SERVICE_INSTALLER_MISSING'			=> 'All installer task services should start with ă?installeră?',
	'TASK_CLASS_NOT_FOUND'					=> 'Installer task service definition is invalid. Service name ă?%1$să? given, the expected class namespace is ă?%2$să? for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'			=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'						=> 'Install phpBB',
	'CLI_UPDATE_BOARD'						=> 'Update phpBB',
	'CLI_INSTALL_SHOW_CONFIG'					=> 'Show the configuration which will be used',
	'CLI_INSTALL_VALIDATE_CONFIG'				=> 'Validate a configuration file',
	'CLI_CONFIG_FILE'							=> 'Config file to use',
	'MISSING_FILE'							=> 'Unable to access file %1$s',
	'MISSING_DATA'							=> 'Config file is missing data or might contain invalid settings.',
	'INVALID_YAML_FILE'						=> 'Could not parse YAML file %1$s',
	'CONFIGURATION_VALID'						=> 'The configuration file is valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'						=> 'Actualizează instalarea phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'				=> 'Cu această opăiune, este posibil să actualizaăi instalarea phpBB la ultima versiune.<br />
în timpul procesului toate fişierele proprii vor fi verificate pentru integritatea lor. Puteăi revizui tote diferenăele ăi fişierele înainte de actualizare.<br />
<br />
Actualizarea propriu zisă a fiăierului se poate efectua în două moduri diferite.</p><h2>Actualizare manuală</h2><p>Cu această actualizare doar descărcaăi setul personal al fişierelor modificate pentru a vă asigura că nu pierdeăi modificările fişierelor pe care le-ai efectuat. După ce aăi descărcat acest pachet trebuie să încărcaăi manual fişierele în locaăia corectă din directorul rădăcina al phpBB. Odată ce este gata, puteăi porni din nou procesul de verificare al fişierelor ca să vedeăi dacă aăi mutat fişierele în locaăia corectă.</p><h2>Actualizare automată cu FTP</h2><p>Această metodă este similară cu prima dar fără a fi necesară descărcarea ăi încărcarea proprie a fişierelor modificate. Aceste operaăii vor fi efectuate pentru dumneavoastră. Pentru a folosi această metodă trebuie să ătiăi detalile de autentificare pe FTP dn moment ce veăi fi întrebat de ele. Odată ce aăi terminat, vei fi redirecăionat către etapa de verificare a fişierelor pentru a vă asigura că totul s-a actualizat corect.',
	'UPDATE_INSTRUCTIONS'						=> 'anunăurile relatărilor pentru ultima versiune</a> înainte de a continua procesul de actualizare, s-ar putea să conăină informaăii folositoare. De asemenea conăine link-urile pentru descărcarea completă precum ăi jurnalul schimbărilor.</p>

		<br />


		<h1>Cum să actualizaăi instalarea cu Pachetul de actualizate automată (Automatic Update Package)</h1>

		<p>Modul recomandat pentru a actualiza instalarea afiăată aici este disponibil numai pentru pachetul de actualizare automată. De asemenea puteăi să actualizaăi instalarea folosind metodele afiăate în documentul INSTALL.html. Paăii pentru actualizarea automată a phpBB3 sunt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Accesaăi <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">pagina de descărcări a phpBB.com</a> ăi descărcaăi arhiva ă?Automatic Update Packageă?.<br />
<br />
</li>
			<li>Dezarhivaăi arhiva.<br />
<br />
</li>
			<li>încărcaăi complet folderele dezarhivate "install" ăi "vendor" în rădăcina directorului phpBB (unde este localizat fiăierul config.php).<br />
<br />
</li>
		</ul>

		<p>Odată încărcat, forumul va fi offline pentru utilizatori căt timp directorul install încărcat va fi prezent.<br />
<br />

		<strong><a href="%1$s" title="%1$s">Acum porniăi procesul de actualizare accesănd din browser directorul install</a>.</strong><br />

		<br />

		Veţi fi ghidat în timpul procesului de actualizare. Veăi fi notificat odată ce actualizarea va fi completă.
		</p>
	">

		<h1>Anună de lansare</h1>

		<p>Vă rugăm să citiăi <a href="%1$s" title="%1$s">anunăurile relatărilor pentru ultima versiune</a> înainte de a continua procesul de actualizare, s-ar putea să conăină informaăii folositoare. De asemenea conăine link-urile pentru descărcarea completă precum ăi jurnalul schimbărilor.</p>

		<br />


		<h1>Cum să actualizaţi instalarea cu Pachetul de actualizate automată (Automatic Update Package)</h1>

		<p>Modul recomandat pentru a actualiza instalarea afiăată aici este disponibil numai pentru pachetul de actualizare automată. De asemenea puteăi să actualizaăi instalarea folosind metodele afiăate în documentul INSTALL.html. Paăii pentru actualizarea automată a phpBB3 sunt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Accesaăi <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">pagina de descărcări a phpBB.com</a> ăi descărcaăi arhiva ă?Automatic Update Packageă?.<br />
<br />
</li>
			<li>Dezarhivaţi arhiva.<br />
<br />
</li>
			<li>încărcaţi complet folderele dezarhivate "install" ăi "vendor" în rădăcina directorului phpBB (unde este localizat fiăierul config.php).<br />
<br />
</li>
		</ul>

		<p>Odată încărcat, forumul va fi offline pentru utilizatori căt timp directorul install încărcat va fi prezent.<br />
<br />

		<strong><a href="%1$s" title="%1$s">Acum porniăi procesul de actualizare accesănd din browser directorul install</a>.</strong><br />

		<br />

		Veţi fi ghidat în timpul procesului de actualizare. Veăi fi notificat odată ce actualizarea va fi completă.
		</p>',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'								=> 'Type of update to run',
	'UPDATE_TYPE_ALL'							=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'						=> 'Update database only',
	'UPDATE_FILE_METHOD_TITLE'				=> 'File updater methods',
	'UPDATE_FILE_METHOD'						=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'				=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'					=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'			=> 'Update files via direct file access (Automatic)',
	'SELECT_DOWNLOAD_FORMAT'					=> 'Selectaăi formatul de descărcare al arhivei',
	'FTP_SETTINGS'							=> 'Setări FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'					=> 'No valid update directory was found, please make sure you uploaded the relevant files.',
	'NO_UPDATE_FILES_UP_TO_DATE'				=> 'Versiunea proprie este actualizată la zi. Nu este nevoie să rulaăi actualizarea. Dacă doriăi să faceăi o verificare de integritate a fişierelor proprii, asiguraăi-vă că aăi încărcat corect fişierele de actualizare.',
	'OLD_UPDATE_FILES'						=> 'Fiăierele de actualizare nu sunt actualizate la zi. Fiăierele de actualizare găsite sunt pentru actualizarea phpBB %1$s la phpBB %2$s dar ultima versiune a phpBB este %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'				=> 'Fiăierele actualizate găsite sunt incompatibile cu versiunea instalată. Versiunea instalată este %1$s ăi fiăierul actualizat este pentru actualizarea phpBB %2$s la %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'						=> 'Actualizează fişiere',

	// Check files
	'UPDATE_CHECK_FILES'						=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'						=> 'Diffing changed files',
	'ALL_FILES_DIFFED'						=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'			=> 'Update files',

	'DOWNLOAD'								=> 'Descarcă',
	'DOWNLOAD_CONFLICTS'					=> 'Descărcaăi acest fiăier în care este evidenăiat codul în conflict',
	'DOWNLOAD_CONFLICTS_EXPLAIN'			=> 'Caută <<< pentru a identifica eventuale conflicte',
	'DOWNLOAD_UPDATE_METHOD'				=> 'Descarcă arhiva cu fişierele modificate',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'		=> 'Odată descărcată ar trebui să deschideăi arhiva. Veăi găsi fişierele modificate pe care trebuie să le încărcaăi în rădăcina directorului phpBB. Vă rugăm să încărcaăi fişierele în locaăia lor respectivă. După ce aăi încărcat toate fişierele, vă rugăm să verificaăi din nou fişierele cu celălălt buton de mai jos.',

	'FILE_ALREADY_UP_TO_DATE'				=> 'Fiăierul este deja actualizat la zi',
	'FILE_DIFF_NOT_ALLOWED'					=> 'Fiăierul nu poate fi verificat pentru stabilirea diferenăelor',
	'FILE_USED'								=> 'Informaăii folosite din',
	'FILES_CONFLICT'						=> 'Fiăiere de conflict',
	'FILES_CONFLICT_EXPLAIN'				=> 'Următoarele fişiere sunt modificate ăi nu reprezintă fişierele originale din versiunea veche. phpBB a stabilit că aceste fişiere crează conflicte chiar ăi dacă s-a încercat unirea codului nou cu cel vechi. Vă rugăm să investigaăi confictele ăi să încercaăi să le rezolvaăi manual sau continuaăi să le actualizaăi folosind metoda preferată de unire. Dacă rezolvaăi conflictele manual, verificaăi din nou fişierele după ce le-aăi modificat. De asemenea, puteăi să alegeăi metoda preferată de unire pentru fiecare fiăier. Primul va rezulta într-un fiăier unde liniile de conflict din versiunea veche a fiăierului vor fi pierdute, cealaltă va rezulta în pierderea schimbărilor din fiăierul nou.',
	'FILES_DELETED'							=> 'Fiăiere ăterse',
	'FILES_DELETED_EXPLAIN'					=> 'Următoarele fişiere nu există în noua versiune. Aceste fişiere vor fi ăterse.',
	'FILES_MODIFIED'						=> 'Fiăiere modificate',
	'FILES_MODIFIED_EXPLAIN'				=> 'Următoarele fişiere sunt modificate ăi nu reprezintă fişierele originale din versiunea veche. Fiăierul actualizat va fi rezultatul unirii între modificările proprii ăi noul fiăier.',
	'FILES_NEW'								=> 'Fiăiere noi',
	'FILES_NEW_EXPLAIN'						=> 'Următoarele fişiere nu există în instalare în momentul de faăă. Aceste fişiere vor fi adăugate la instalare',
	'FILES_NEW_CONFLICT'					=> 'Fiăiere de conflict noi',
	'FILES_NEW_CONFLICT_EXPLAIN'			=> 'Următoarele fişiere sunt noi în ultima versiune dar s-a determinat că există deja un fiăier cu acelaăi nume în aceeaăi poziăie. Acest fiăier va fi suprascris cu fiăierul	nou.',
	'FILES_NOT_MODIFIED'					=> 'Fiăiere nemodificate',
	'FILES_NOT_MODIFIED_EXPLAIN'			=> 'Următoarele fişiere nu sunt modificate ăi reprezintă fişierele originale ale phpBB din versiunea pe care vreăi să o actualizaăi.',
	'FILES_UP_TO_DATE'						=> 'Fiăiere deja actualizate',
	'FILES_UP_TO_DATE_EXPLAIN'				=> 'Următoarele fişiere sunt deja actualizate la zi ăi nu mai necesită actualizarea.',
	'FILES_VERSION'							=> 'Versiune Fiăiere',
	'TOGGLE_DISPLAY'						=> 'Arată/ascunde lista fişierelor',

	// File updater
	'UPDATE_UPDATING_FILES'					=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'		=> 'File updater ă?%1$să? has failed. The installer will try to fallback to ă?%2$să?.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'		=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'		=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'			=> 'Check files again',

));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'					=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'				=> 'Actualizarea bazei de date a fost efectuată cu succes. Acum trebuie să continuaăi procesul de actualizare.',

	'TASK_UPDATE_EXTENSIONS'					=> 'Updating extensions',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'						=> 'Convertorul specificat nu există',
	'DEV_NO_TEST_FILE'						=> 'Nicio valoare nu a fost specificată în convertor pentru variabila test_file. Dacă sunteăi un utilizator al acestui convertor, nu ar trebui să vedeăi această eroare, vă rugăm să raportaăi acest mesaj autorului convertorului. Dacă sunteăi un autor de convertor, trebuie să specificaăi numele fiăierului ce există în forumul sursă pentru a permite ca să fie verificată calea către acesta.',
	'COULD_NOT_FIND_PATH'					=> 'Nu s-a putut găsi calea către fostul forum. Vă rugăm să verificaăi setările ăi să încercaăi din nou.<br /> Calea specificată a fost %s',
	'CONFIG_PHPBB_EMPTY'					=> 'Variabila phpBB3 de configurare pentru "%s" este goală.',

	'MAKE_FOLDER_WRITABLE'					=> 'Vă rugăm să vă asiguraăi că acest director există ăi poate fi scris de către serverul web; apoi încercaăi din nou:<br /><strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'					=> 'Vă rugăm să vă asiguraăi că aceste directoare există ăi pot fi scrise de către serverul web; apoi încercaăi din nou:<br /><strong>%s</strong>',

	'INSTALL_TEST'							=> 'Testează din nou',

	'NO_TABLES_FOUND'						=> 'Tabelele nu au fost găsite.',
	'TABLES_MISSING'						=> 'Nu s-au putut găsi aceste tabele<br /> <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'					=> 'Vă rugăm să verificaăi prefixul tabelei ăi să încercaăi din nou.',

	// Conversion in progress
	'CONTINUE_CONVERT'						=> 'Continuaăi conversia',
	'CONTINUE_CONVERT_BODY'					=> 'A fost găsită o încercare anterioară de conversie. Acum puteăi alege între a începe o conversie nouă sau a continua conversia găsită.',
	'CONVERT_NEW_CONVERSION'					=> 'Conversie nouă',
	'CONTINUE_OLD_CONVERSION'					=> 'Continuă conversia începută anterior',

	// Start conversion
	'SUB_INTRO'								=> 'Introducere',
	'CONVERT_INTRO'							=> 'Bine aăi venit în Unified Convertor Framework al phpBB',
	'CONVERT_INTRO_BODY'						=> 'De aici, puteăi importa date de la alte sisteme de forumuri (instalate). Lista de mai jos arată toate modulele de conversie ce sunt disponibile. Dacă niciun convertor pentru softul forumului din care doriăi să convertiăi nu este afiăat în această listă, vă rugăm să vizitaăi site-ul nostru unde pot fi găsite pentru descărcare module suplimentare de conversie.',
	'AVAILABLE_CONVERTORS'					=> 'Convertoare disponibile',
	'NO_CONVERTORS'							=> 'Niciun convertor nu este disponibil pentru a fi folosit',
	'CONVERT_OPTIONS'							=> 'Opăiuni',
	'SOFTWARE'								=> 'Softul forumului',
	'VERSION'									=> 'Versiune',
	'CONVERT'									=> 'Converteşte',

	// Settings
	'STAGE_SETTINGS'							=> 'Setări',
	'TABLE_PREFIX_SAME'						=> 'Prefixul tabelelor trebuie să fie cel folosit de către softul din care faceăi conversia.<br /> Prefixul tabelelor specificat a fost %s.',
	'DEFAULT_PREFIX_IS'						=> 'Convertorul nu a putut găsi tabelele cu prefixul specificat. Vă rugăm să vă asiguraăi că aăi specificat detaliile corecte pentru forumul pe care ăl convertiăi. Prefixul standard al tabelelor pentru %1$s este <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'							=> 'Specificaăi opăiunile de conversie',
	'FORUM_PATH'								=> 'Cale forum',
	'FORUM_PATH_EXPLAIN'						=> 'Aceasta este calea <strong>relativă</strong> pe disc a forumulului vechi de la <strong>rădăcina instalării acestui forum phpBB3</strong>',
	'REFRESH_PAGE'							=> 'Reămprospătează pagina pentru a continua conversia',
	'REFRESH_PAGE_EXPLAIN'					=> 'Dacă selectaăi Da, convertorul va reămprospăta pagina pentru a continua conversia după fiecare pas finalizat. Dacă aceasta este prima conversie, pentru testarea efectelor ăi pentru a determina orice eroare în viitor, vă sugerăm să alegeăi Nu.',

	// Conversion
	'STAGE_IN_PROGRESS'						=> 'Conversie în progres',

	'AUTHOR_NOTES'							=> 'Notiăe autor<br /> %s',
	'STARTING_CONVERT'						=> 'începe procesul de conversie',
	'CONFIG_CONVERT'							=> 'Se converteăte configuraăia',
	'DONE'									=> 'Gata',
	'PREPROCESS_STEP'							=> 'Execută preprocesarea funcăiilor/interogărilor',
	'FILLING_TABLE'							=> 'Completează tabelul <strong>%s</strong>',
	'FILLING_TABLES'							=> 'Completează tabelele',
	'DB_ERR_INSERT'							=> 'Eroare în timpul procesării interogării <code>INSERT</code>',
	'DB_ERR_LAST'								=> 'Eroare în timpul procesării <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'						=> 'Eroare în timpul executării <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'				=> 'Eroare în timpul executării <var>query_first</var>, %s (ă?%să?)',
	'DB_ERR_SELECT'							=> 'Eroare în timpul procesării interogării <code>SELECT</code>',
	'STEP_PERCENT_COMPLETED'					=> 'Pasul <strong>%d</strong> din <strong>%d</strong>',
	'FINAL_STEP'								=> 'Continuă cu pasul final',
	'SYNC_FORUMS'								=> 'începe sincronizarea forumurilor',
	'SYNC_POST_COUNT'							=> 'Sincronizează numărarea mesajelor',
	'SYNC_POST_COUNT_ID'						=> 'Sincronizează numărarea mesajelor de la <var>entry</var> %1$s la %2$s.',
	'SYNC_TOPICS'								=> 'începe sincronizarea subiectelor',
	'SYNC_TOPIC_ID'							=> 'Sincronizează subiectele de la <var>topic_id</var> $1%s la $2%s',
	'PROCESS_LAST'							=> 'Procesează ultimile instrucăiuni',
	'UPDATE_TOPICS_POSTED'					=> 'Generează informaăiile subiectelor publicate',
	'UPDATE_TOPICS_POSTED_ERR'				=> 'O eroare a apărut in timp ce se generau informaăiile subiectelor publicate. Poăi reăncerca efectuarea acestui pas din Panoul administratorului după ce procesul de conversie este finalizat.',
	'CONTINUE_LAST'							=> 'Continuă ultimele declaraăii',
	'CLEAN_VERIFY'							=> 'Se ăterge ăi se verifică structura finală',
	'NOT_UNDERSTAND'							=> 'Nu poate înăelege %s #%d, tabelul %s ("%s")',
	'NAMING_CONFLICT'							=> 'Conflict: %s ăi %s sunt amăndouă aliasuri<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'						=> 'Conversie finalizată',
	'CONVERT_COMPLETE_EXPLAIN'				=> 'accesa forumul propriu</a>. Asiguraăi-vă că setările au fost transferate corect înainte de activarea forumului ătergănd directorul de instalarea. Reăineăi că ajutorul folosirii phpBB este disponibil online via <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">Documentaăie</a> ăi <a href="https://www.phpbb.com/community/viewforum.php?f=466">Forumurile de suport</a>">Acum aăi convertit cu succes forumul propriu la phpBB 3.1. Acum vă puteăi autentifica ăi <a href="../&quot;>accesa forumul propriu</a>. Asiguraăi-vă că setările au fost transferate corect înainte de activarea forumului ătergănd directorul de instalarea. Reăineăi că ajutorul folosirii phpBB este disponibil online via <a href=&quot;https://www.phpbb.com/support/docs/en/3.1/ug/&quot;>Documentaăie</a> ăi <a href=&quot;https://www.phpbb.com/community/viewforum.php?f=466&quot;>Forumurile de suport</a>',

	'CONV_ERROR_ATTACH_FTP_DIR'				=> 'încărcarea fişierelor ataăate pe FTP este activată pe vechiul forum. Vă rugăm să dezactivaăi opăiunea de încărcare prin FTP ăi asiguraăi-vă că este specificat un directorul valid de încărcare, apoi copiaăi toate fişierele ataăate în acest nou director accesibil. Odată ce aăi terminat această operaăie, restartaăi convertorul.',
	'CONV_ERROR_CONFIG_EMPTY'					=> 'Nu există nicio informaăie de configurare disponibilă pentru această conversie.',
	'CONV_ERROR_FORUM_ACCESS'					=> 'Nu s-au putut prelua informaăiile de acces pe forum.',
	'CONV_ERROR_GET_CATEGORIES'				=> 'Nu s-au putut prelua categoriile.',
	'CONV_ERROR_GET_CONFIG'					=> 'Nu s-a putut recupera configurarea forumului.',
	'CONV_ERROR_COULD_NOT_READ'				=> 'Nu s-a putut accesa/citi ă?%să?.',
	'CONV_ERROR_GROUP_ACCESS'					=> 'Nu s-au putut lua informaăiile de autentificare pentru grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'			=> 'Inconsistenăă în tabelul grupurilor detectată în add_bots() - trebuie să adăugaăi toate grupurile speciale dacă o efectuaăi manual.',
	'CONV_ERROR_INSERT_BOT'					=> 'Nu s-a putut insera robot în tabelul utilizatorilor.',
	'CONV_ERROR_INSERT_BOTGROUP'				=> 'Nu s-a putut insera robot în tabelul roboăilor.',
	'CONV_ERROR_INSERT_USER_GROUP'			=> 'Nu s-a putut insera utilizator în tabelul user_group.',
	'CONV_ERROR_MESSAGE_PARSER'				=> 'Eroare de mesaj analizată',
	'CONV_ERROR_NO_AVATAR_PATH'				=> 'Notă către dezvoltator: trebuie să specificaăi $convertor[\'avatar_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_FORUM_PATH'				=> 'Calea relativă către sursa forumului nu a fost specificată.',
	'CONV_ERROR_NO_GALLERY_PATH'				=> 'Notă către dezvoltator: trebuie să specificaăi $convertor[\'avatar_gallery_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_GROUP'						=> 'Grupul ă?%1$să? nu a putut fi găsit în %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'				=> 'Notă către dezvoltator: trebuie să specificaăi $convertor[\'ranks_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_SMILIES_PATH'				=> 'Notă către dezvoltator: trebuie să specificaăi $convertor[\'smilies_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'				=> 'Notă către dezvoltator: trebuie să specificaăi $convertor[\'upload_dir\'] pentru a folosi %s.',
	'CONV_ERROR_PERM_SETTING'					=> 'Nu s-au putut insera/actualiza setările permisiunilor.',
	'CONV_ERROR_PM_COUNT'						=> 'Nu s-a putut selecta directorul pentru numărarea mesajelor private.',
	'CONV_ERROR_REPLACE_CATEGORY'				=> 'Nu s-a putut insera un forum nou înlocuind o categorie veche.',
	'CONV_ERROR_REPLACE_FORUM'				=> 'Nu s-a putut insera un forum nou înlocuind un forum vechi.',
	'CONV_ERROR_USER_ACCESS'					=> 'Nu s-au putut lua informaăiile de autentificare ale utilizatorului.',
	'CONV_ERROR_WRONG_GROUP'					=> 'Grup greăit ă?%1$să? definit în %2$s.',
	'CONV_OPTIONS_BODY'						=> 'Această pagină colectează datele necesare pentru a accesa forumul sursă. Specificaăi detaliile bazei de date pentru fostul dumneavoastră forum; convertorul nu va schimba nimic în baza de date specificată mai jos. Sursa forumului ar trebui să fie dezactivată pentru a permite o conversie consistentă.',
	'CONV_SAVED_MESSAGES'						=> 'Mesaje salvate',

	'PRE_CONVERT_COMPLETE'					=> 'Toate etapele preconversiei au fost finalizate cu succes. Acuma puteăi începe procesul propriu zis de conversie. Reăineăi că va trebui să adjustaăi manual mai multe lucruri. După conversie, în special verificaăi permisiunile atribuite, reconstruiăi index-ul de căutare care nu este convertit ăi deasemenea, asiguraăi-vă că fişierele s-au copiat corect, de exemplu imaginile asociate ăi zămbetele.',
));

