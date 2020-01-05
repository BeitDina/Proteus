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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(

	'EXTENSION_ALREADY_INSTALLED'				=> 'en The “%s” extension has already been installed.',
	'EXTENSION_ALREADY_INSTALLED_MANUALLY'		=> 'en The “%s” extension has already been installed manually.',
	'EXTENSION_ALREADY_MANAGED'					=> 'en The “%s” extension is already managed.',
	'EXTENSION_CANNOT_MANAGE_FILESYSTEM_ERROR'	=> 'en The “%s” extension cannot be managed because the existing files could not be removed from the filesystem.',
	'EXTENSION_CANNOT_MANAGE_INSTALL_ERROR'		=> 'en The “%s” extension could not be installed. The prior installation of this extension has been restored.',
	'EXTENSION_MANAGED_WITH_CLEAN_ERROR'		=> 'en The “%1$s” extension has been installed but an error occurred and the old files could not be removed. You might want to delete the “%2$s” files manually.',
	'EXTENSION_MANAGED_WITH_ENABLE_ERROR'		=> 'en The “%s” extension has been installed but an error occurred while enabling it.',
	'EXTENSION_NOT_INSTALLED'					=> 'en The “%s” extension is not installed.',

	'ENABLING_EXTENSIONS'	=> 'en Enabling extensions',
	'DISABLING_EXTENSIONS'	=> 'en Disabling extensions',

	'EXTENSIONS_CATALOG'			=> 'en Extensions Catalog',
	'EXTENSIONS_CATALOG_EXPLAIN'	=> 'en Here you can browse all of the extensions available for your phpBB board. Extensions can easily be installed or removed with just a click. Adjust the settings to allow instant enabling and purging of extensions.',

	'EXTENSION'					=> 'Extensie',
	'EXTENSIONS'				=> 'Extensii',
	'EXTENSIONS_ADMIN'			=> 'Manager extensii',
	'EXTENSIONS_EXPLAIN'		=> 'Managerul de extensii este un utilitar al forumului phpBB ce vă permite gestionarea statutului extensiilor și vizualizarea informațiilor despre ele.',
	'EXTENSION_INVALID_LIST'	=> 'Extensia “%s” nu e validă.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Extensia selectată nu e disponibilă pentru acest forum, vă rugăm să verificați phpBB și ce versiune PHP este permisă (vedeți pagina de detalii).',
	'EXTENSION_DIR_INVALID'		=> 'The selected extension has an invalid directory structure and cannot be enabled.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'The selected extension cannot be enabled, please verify the extension’s requirements.',

	'DETAILS'				=> 'Detalii',

	'EXTENSIONS_DISABLED'	=> 'Extensii dezactivate',
	'EXTENSIONS_ENABLED'	=> 'Extensii activate',

	'EXTENSION_DELETE_DATA'	=> 'Șterge date',
	'EXTENSION_DISABLE'		=> 'Dezactivează',
	'EXTENSION_ENABLE'		=> 'Activează',
	'EXTENSION_UPDATE'		=> 'Actualizare',
	'EXTENSION_REMOVE'		=> 'Înlătură',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Ștergerea unei extensii va determina eliminarea tuturor datelor și setărilor. Fișierele extensiei sunt menținute așa că aceasta poate fi activată din nou.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Dezactivarea unei extensii menține fișierele acesteia, datele și setările dar elimină orice funcționalitate adăugată de extensie.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Activarea unei extensii permite folosirea ei pe forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de ștergere. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de dezactivare. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de activare. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Datele extensiei au fost șterse',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Extesia a fost dezactivată',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Extesia a fost activată',

	'EXTENSION_NAME'			=> 'Nume extensie',
	'EXTENSION_ACTIONS'			=> 'Acțiuni',
	'EXTENSION_OPTIONS'			=> 'Opțiuni',
	'EXTENSION_INSTALL_HEADLINE'=> 'Instalarea extensii',
 	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
 			<li>Descărcați extensia din baza de date cu extensii a phpBBâ€™</li>
 			<li>Dezarhivați extensia și încărcați-o în folderul <samp>ext/</samp></li>
 			<li>Activați extensia, aici în Managerul de extensii</li>
 		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Actualizarea unei extensii',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Dezactivați extensia</li>
			<li>Ștergeți fișierele extensiei din sistemul de fișiere</li>
			<li>Încărcați fișierele noi</li>
			<li>Activați extensia</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Eliminarea completă a unei extensii din forum',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Dezactivați extensia</li>
			<li>Ștergeți datele extensiei</li>
			<li>Ștergeți fișierele extensiei din sistemul de fișiere</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Sunteți sigur că doriți să ștergeți datele asociate cu “%s”?<br /><br />Aceasta elimină toate datele și setările sale și nu poate fi anulată!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Sunteți sigur că doriți dezactivarea extensiei “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Sunteți sigur că doriți activarea extensiei “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Sunteți sigur că doriți forțarea utilizării unei versiuni instabile?',

	'INSTALLED'				=> 'Instalat',
	'INSTALLED_MANUALLY'	=> 'Instalat manual',

	'RETURN_TO_EXTENSION_LIST'	=> 'Intoarcere la lista extensiilor',

	'EXT_DETAILS'			=> 'Detalii extensie',
	'DISPLAY_NAME'			=> 'Afișează numele',
	'CLEAN_NAME'			=> 'Curață nume',
	'TYPE'					=> 'Tip',
	'DESCRIPTION'			=> 'Descrere',
	'VERSION'				=> 'Versiune',
	'HOMEPAGE'				=> 'Pagina',
	'PATH'					=> 'Cale fișier',
	'TIME'					=> 'Data lansării',
	'LICENSE'				=> 'Licență',

	'REQUIREMENTS'			=> 'Cerințe',
	'PHPBB_VERSION'			=> 'Versiune phpBB',
	'PHP_VERSION'			=> 'Versiune PHP',
	'AUTHOR_INFORMATION'	=> 'Informații autor',
	'AUTHOR_NAME'			=> 'Nume',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Pagina',
	'AUTHOR_ROLE'			=> 'Rol',

	'NOT_UP_TO_DATE'		=> '%s nu este actualizată',
	'UP_TO_DATE'			=> '%s este actualizată',
	'ANNOUNCEMENT_TOPIC'	=> 'Anunț de lansare',
	'DOWNLOAD_LATEST'		=> 'Descarcă versiunea',
	'NO_VERSIONCHECK'		=> 'Nu sunt furnizate informații despre versiune.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Reverifică toate versiunile',
	'FORCE_UNSTABLE'					=> 'Verifică întotdeauna pentru versiuni instabile',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Setări verificare versiune',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Browse extensions database',

	'META_FIELD_NOT_SET'	=> 'Required meta field %s has not been set.',
	'META_FIELD_INVALID'	=> 'Meta field %s is invalid.',

	'EXTENSIONS_CATALOG_SETTINGS'	=> 'Extensions catalog settings',
	'ENABLE_ON_INSTALL'				=> 'Enable extensions while installing',
	'PURGE_ON_REMOVE'				=> 'Purge extensions while removing',
	'ENABLE_PACKAGIST'				=> 'Search packagist',
	'ENABLE_PACKAGIST_EXPLAIN'		=> 'Search packagist for phpBB extensions. Beware that packagist may contain extensions not validated by the phpBB Extension Customisations Team.',
	'ENABLE_PACKAGIST_CONFIRM'		=> 'Are you sure you want to search packagist?',
	'COMPOSER_REPOSITORIES'			=> 'Repositories',
	'COMPOSER_REPOSITORIES_EXPLAIN'	=> 'Add URLs to Composer repositories of phpBB extensions to search here, one per line (must be the base url of the packages.json file).',
	'NO_EXTENSION_AVAILABLE'		=> 'There are no extension available for your board',

	'EXTENSION_MANAGED_SUCCESS'		=> 'The extension %s is now being managed automatically.',
	'EXTENSIONS_INSTALLED'			=> 'Extensions successfully installed.',
	'EXTENSIONS_REMOVED'			=> 'Extensions successfully removed.',
	'EXTENSIONS_UPDATED'			=> 'Extensions successfully updated.',

	'EXTENSIONS_CATALOG_NOT_AVAILABLE'	=> 'The extensions catalog is not available',
	'EXTENSIONS_COMPOSER_NOT_WRITABLE'	=> 'In order to use the catalog, the following files and directories must be writable: ext/ vendor-ext/ composer-ext.json and composer-ext.lock',

	'STABILITY_STABLE'	=> 'stable',
	'STABILITY_RC'		=> 'RC',
	'STABILITY_BETA'	=> 'beta',
	'STABILITY_ALPHA'	=> 'alpha',
	'STABILITY_DEV'		=> 'dev',

	'COMPOSER_MINIMUM_STABILITY'			=> 'Stabilitate Minimă',
	'COMPOSER_MINIMUM_STABILITY_EXPLAIN'	=> 'en Always use <samp>stable</samp> versions on a live forum. Non-stable versions may still be in development and could cause unexpected problems with your forum and should only be used for development purposes in local or staging environments.',


));
