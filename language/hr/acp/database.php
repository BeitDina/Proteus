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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan Matijaščić
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan Matijaščić.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'ACP_BACKUP_EXPLAIN'=>'Ovdje možeš backupirati [napraviti zaštitni preslik] sve phpBB podatke.<br />Datoteku možeš pohraniti lokalno [<samp>store/</samp>] ili ju direktno preuzeti.<br />Za smanjenje veličine datoteke prije preuzimanja, ako server podržava tu opciju, možeš koristiti gzip odnosno bilo koju drugu ponuđenu kompresiju.',
'ACP_RESTORE_EXPLAIN'=>'Ovdje možeš izvršiti potpun povrat svih phpBB tablica iz [ranije] pohranjene datoteke.<br />Ako server podržava tu opciju, možeš pohraniti gzip ili bzip2 kompresiranu tekst datoteku koja će automatski biti dekompresirana.<br /><strong>UPOZORENJE:</strong> ovime ćeš prepisati postojeće podatke.<br />Proces može (po)trajati poduže, stoga, ostani na ovoj stranici dok ne bude zgotovljen.<br />Zaštitni preslici [backupi] pohranjeni su u <samp>store/</samp> mapi i pretpostavlja se da su generirani phpBB backup funkcijom.<br />Povrat zaštitnih preslika koji nisu kreirani ugrađenim sustavom kreiranja zaštitnih preslika može rezultirati njihovim funkcioniranjem, ali i ne mora.',
'BACKUP_DELETE'=>'Zaštitni preslik je izbrisan.',
'BACKUP_INVALID'=>'Datoteka izabrana za izradu zaštitnog preslika je neispravna.',
'BACKUP_OPTIONS'=>'Postavke izrade zaštitnog preslika',
'BACKUP_SUCCESS'=>'Zaštitni preslik je kreiran.',
'BACKUP_TYPE'=>'Vrsta izrade zaštitnog preslika',
'DATABASE'=>'Alati za bazu',
'DATA_ONLY'=>'Samo podatci',
'DELETE_BACKUP'=>'Izbriši zaštitni preslik',
'DELETE_SELECTED_BACKUP'=>'Jesi li siguran/na da želiš izbrisati zaštitni preslik?',
'DESELECT_ALL'=>'Odoznači sve',
'DOWNLOAD_BACKUP'=>'Preuzmi zaštitni preslik',
'FILE_TYPE'=>'Vrsta datoteke',
'FILE_WRITE_FAIL'=>'Nije moguće zapisati datoteku u mapu za pohranu.',
'FULL_BACKUP'=>'Potpun',
'RESTORE_FAILURE'=>'Zaštitni preslik može biti/moguće je da je neispravan.',
'RESTORE_OPTIONS'=>'Postavke povrata zaštitnog preslika',
'RESTORE_SELECTED_BACKUP'=>'Jesi li siguran/na da želiš izvršiti povrat izabranog zaštitnog preslika?',
'RESTORE_SUCCESS'=>'Povrat izabranog zaštitnog preslika baze je izvršen.<br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljen zaštitni preslik.',
'SELECT_ALL'=>'Označi sve',
// <!-- Kocka je hičena! -->
'SELECT_FILE'=>'Označi datoteku',
'START_BACKUP'=>'Započni izradu zaštitnog preslika',
'START_RESTORE'=>'Započni povrat zaštitnog preslika',
'STORE_AND_DOWNLOAD'=>'Pohrani i preuzmi',
'STORE_LOCAL'=>'Pohrani datoteku lokalno',
'STRUCTURE_ONLY'=>'Samo struktura',
'TABLE_SELECT'=>'Izbor tablica',
'TABLE_SELECT_ERROR'=>'Izaberi/odaberi najmanje jednu tablicu.',
));
