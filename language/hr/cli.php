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
$lang = array_merge($lang, array(
'CLI_CONFIG_CANNOT_CACHED'=>'Podesi ovu opciju ako se opcije konfiguracije prečesto mijenjaju da bi bile učinkovito pohranjene u priručnu memoriju.',
'CLI_CONFIG_CURRENT'=>'Trenutna konfiguracijska vrijednost.<br />Za određivanje <em>boolean</em> vrijednosti, koristi 0 i 1.',
'CLI_CONFIG_DELETE_SUCCESS'=>'<em>Config</em> %s izbrisan/a.',
'CLI_CONFIG_NEW'=>'Nova konfiguracijska vrijednost.<br />Za određivanje <em>boolean</em> vrijednosti, koristi 0 i 1.',
'CLI_CONFIG_NOT_EXISTS'=>'<em>Config</em> %s ne postoji.',
'CLI_CONFIG_OPTION_NAME'=>'Naziv opcija konfiguracije',
'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'=>'Omogući ako vrijednost treba biti prikazana bez novog redka na kraju.',
'CLI_CONFIG_INCREMENT_BY'=>'Povećanje vrijednosti za',
'CLI_CONFIG_INCREMENT_SUCCESS'=>'<em>Config</em> %s povećan/a.',
'CLI_CONFIG_SET_FAILURE'=>'Nije moguće postaviti <em>config</em> %s.',
'CLI_CONFIG_SET_SUCCESS'=>'<em>Config</em> %s postavljen/a.',
'CLI_DESCRIPTION_CRON_LIST'=>'Prikazuje listu spremnih i nespremnih <em>cron</em> poslova.',
'CLI_DESCRIPTION_CRON_RUN'=>'Pokreće sve spremne <em>cron</em> zadatke.',
'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'=>'Naziv zadatka za pokretanje.',
'CLI_DESCRIPTION_DB_LIST'=>'Izlistava sve instalirane i dostupne migracije.',
'CLI_DESCRIPTION_DB_MIGRATE'=>'Ažurira bazu primjenjujući migracije.',
'CLI_DESCRIPTION_DB_REVERT'=>'Vraća migraciju u prethodno stanje.',
'CLI_DESCRIPTION_DELETE_CONFIG'=>'Izbrisuje opciju konfiguracije.',
'CLI_DESCRIPTION_DISABLE_EXTENSION'=>'Onemogućava određenu ekstenziju.',
'CLI_DESCRIPTION_ENABLE_EXTENSION'=>'Omogućava određenu ekstenziju.',
'CLI_DESCRIPTION_FIND_MIGRATIONS'=>'Pronalazi neovisne migracije.',
'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'=>'Popravlja hijerarhijsku struktura foruma i modula.',
// <!-- Kocka je hičena! -->
'CLI_DESCRIPTION_GET_CONFIG'=>'Pronalazi vrijednost opcije konfiguracije.',
'CLI_DESCRIPTION_INCREMENT_CONFIG'=>'Povećava cjelobrojnu vrijednost opcije konfiguracije.',
'CLI_DESCRIPTION_LIST_EXTENSIONS'=>'Izlistava sve ekstenzije u bazi i sustavu datoteka.',
'CLI_DESCRIPTION_OPTION_ENV'=>'Naziv okoline.',
'CLI_DESCRIPTION_OPTION_SAFE_MODE'=>'Pokreće [se] u sigurnosnom modu [bez ekstenzija].',
'CLI_DESCRIPTION_OPTION_SHELL'=>'Pokretanje ljuske.',
'CLI_DESCRIPTION_PURGE_EXTENSION'=>'Ispražnjuje određenu ekstenziju.',
'CLI_DESCRIPTION_REPARSER_LIST'=>'Izlistava tipove teksta koji mogu biti reparsirani.',
'CLI_DESCRIPTION_REPARSER_AVAILABLE'=>'Dostupni reparseri:',
'CLI_DESCRIPTION_REPARSER_REPARSE'=>'Reparsira pohranjeni tekst s trenutnim <em>text_formatter</em> uslugama.',
'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'=>'Tip teksta koji treba biti reparsiran.<br />Ostavi praznim za reparsiranje svega.',
'CLI_DESCRIPTION_REPARSER_LIST'=>'Izlistava tipove teksta koji mogu biti reparsirani.',
'CLI_DESCRIPTION_REPARSER_REPARSE'=>'Reparsira pohranjeni tekst s trenutnim <em>text_formatter</em> uslugama.',
'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'=>'Tip teksta za reparsiranje [ostavi praznim za reparsiranje svega].',
'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'=>'Nemoj spremati [ikakve] promjene [već] samo ispiši što bi se dogodilo',
'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'=>'Najniži ID zapis za procesuiranje',
'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'=>'Najviši ID zapis za procesuiranje',
'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'=>'Približan broj zapisa za procesuiranje odjednom',
'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'=>'Započni s reparsiranjem gdje je zadnje izvođenje stalo',
'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'=>'Rekalkulira <em>user_email_hash</em> stupac korisničke tablice.',
'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'=>'Postavlja vrijednost opcije konfiguracije [samo] ako se stara vrijednost poklapa s trenutnom vrijednošću.',
'CLI_DESCRIPTION_SET_CONFIG'=>'Postavlja vrijednost opcije konfiguracije.',
'CLI_DESCRIPTION_THUMBNAIL_DELETE'=>'Izbriši sve postojeće minijature.',
'CLI_DESCRIPTION_THUMBNAIL_GENERATE'=>'Generiraj sve nedostajuće minijature.',
'CLI_DESCRIPTION_THUMBNAIL_RECREATE'=>'Rekreiraj sve minijature.',
'CLI_DESCRIPTION_UPDATE_CHECK'=>'Provjeri je li forum <em>up to date</em> [najnoviji].',
'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'=>'Naziv ekstenzije za provjeru [sve provjerava sve ekstenzije].',
'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'=>'Pokreni naredbu provjere s priručnom memorijom.',
'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'=>'Pokreni naredbu izborom provjere samo stabilnih odnosno nestabilnih verzija.',
'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'=>'Ažurira zastarjele <em>hashove</em> zaporki da bi bili <em>hashirani</em> s <em>bcryptom</em>.',
'CLI_ERROR_INVALID_STABILITY'=>'"%s" mora biti postavljen(a) na “stabilno” odnosno “nestabilno”.',
'CLI_DESCRIPTION_USER_ACTIVATE'=>'Aktiviraj korisnički račun.',
'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'=>'Korisničko ime korisničkog računa za (de)aktivaciju.',
'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'=>'Deaktiviraj korisnički račun.',
'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'=>'Korisnički račun je već aktiviran.',
'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'=>'Korisnički račun je već deaktiviran.',
'CLI_DESCRIPTION_USER_ADD'=>'Dodaj novi korisnički račun.',
'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'=>'Korisničko ime novog korisničkog računa',
'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'=>'Zaporka novog korisničkog računa',
'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'=>'Adresa elektroničke pošte novog korisničkog računa',
'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'=>'Pošalji poruku elektroničkom poštom korisniku/ci novokreiranog korisničkog računa [zadano neomogućeno].',
'CLI_DESCRIPTION_USER_DELETE'=>'Izbriši korisnički račun.',
'CLI_DESCRIPTION_USER_DELETE_USERNAME'=>'Korisničko ime korisničkog računa za izbrisivanje.',
'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'=>'Izbriši sve postove korisničkog računa [neomogućavanjem ove opcije postovi korisničkog računa bit će zadržani].',
'CLI_DESCRIPTION_USER_RECLEAN'=>'Reočisti korisničke račune.',
'CLI_EXTENSION_DISABLE_FAILURE'=>'Nije moguće onemogućiti %s ekstenziju.',
'CLI_EXTENSION_DISABLE_SUCCESS'=>'Ekstenzija %s onemogućena.',
'CLI_EXTENSION_DISABLED'=>'Ekstenzija %s nije omogućena.',
'CLI_EXTENSION_ENABLE_FAILURE'=>'Nije moguće omogućiti %s ekstenziju.',
'CLI_EXTENSION_ENABLE_SUCCESS'=>'Ekstenzija %s omogućena.',
'CLI_EXTENSION_ENABLED'=>'Ekstenzija %s je već omogućena.',
'CLI_EXTENSION_NOT_EXIST'=>'Ekstenzija %s ne postoji.',
'CLI_EXTENSION_NAME'=>'Naziv ekstenzije',
// <!-- Kocka je hičena! -->
'CLI_EXTENSION_PURGE_FAILURE'=>'Nije moguće isprazniti %s ekstenziju.',
'CLI_EXTENSION_PURGE_SUCCESS'=>'Ekstenzija %s ispražnjena.',
'CLI_EXTENSION_UPDATE_FAILURE'=>'Nije moguće ažurirati %s ekstenziju',
'CLI_EXTENSION_UPDATE_SUCCESS'=>'Ekstenzija %s ažurirana.',
'CLI_EXTENSION_NOT_FOUND'=>'Nije pronađena niti jedna ekstenzija.',
'CLI_EXTENSION_NOT_ENABLEABLE'=>'Ekstenzija %s nije omogućljiva.',
'CLI_EXTENSIONS_AVAILABLE'=>'Dostupno',
'CLI_EXTENSIONS_DISABLED'=>'Onemogućeno',
'CLI_EXTENSIONS_ENABLED'=>'Omogućeno',
'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'=>'Popravljena hijerarhijska struktura foruma i modula.',
'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'=>'Rekalkulirani <em>user_email_hash</em> stupci korisničkih tablica.',
'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'=>'Ažurirani zastarjeli <em>hashovi</em> zaporki u <em>bcrypt</em>.',
'CLI_MIGRATION_NAME'=>'Naziv migracije, uključujući imenski prostor [koristi kose crte u desno (<em>forward slashes</em>) umjesto kosih crta ulijevo (<em>backslashes</em>) kako ne bi došlo do problema].',
'CLI_MIGRATIONS_AVAILABLE'=>'Dostupne migracije',
'CLI_MIGRATIONS_INSTALLED'=>'Instalirane migracije',
'CLI_MIGRATIONS_ONLY_AVAILABLE'=>'Prikaži samo dostupne migracije',
'CLI_MIGRATIONS_EMPTY'=>'Nema migracija.',
'CLI_REPARSER_REPARSE_REPARSING'=>'Reparsiranje %1$s (raspon %2$d..%3$d)',
'CLI_REPARSER_REPARSE_REPARSING_START'=>'Reparsiranje %s...',
'CLI_REPARSER_REPARSE_SUCCESS'=>'Reparsiranje je završeno.',
'CLI_THUMBNAIL_DELETED'=>'%1$s (%2$s) izbrisano.',
'CLI_THUMBNAIL_DELETING'=>'Izbrisivanje minijatura',
'CLI_THUMBNAIL_SKIPPED'=>'%1$s (%2$s) preskočeno.',
'CLI_THUMBNAIL_GENERATED'=>'%1$s (%2$s) generirano.',
'CLI_THUMBNAIL_GENERATING'=>'Generiranje minijatura',
'CLI_THUMBNAIL_GENERATING_DONE'=>'Sve minijature su regenerirane.',
'CLI_THUMBNAIL_DELETING_DONE'=>'Sve minijature su izbrisane.',
'CLI_THUMBNAIL_NOTHING_TO_GENERATE'=>'Nema minijatura za generiranje.',
'CLI_THUMBNAIL_NOTHING_TO_DELETE'=>'Nema minijatura za izbrisivanje.',
'CLI_USER_ADD_SUCCESS'=>'Uspješno dodan korisnički račun %s.',
'CLI_USER_DELETE_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati ‘%s’? [D/N]',
'CLI_USER_RECLEAN_START'=>'Rečišćenje korisničkih računa',
'CLI_USER_RECLEAN_DONE'=>[
0=>'Rečišćenje završeno. Nije bilo potrebe za čišćenjem ijednog korisničkog računa.',
1=>'Rečišćenje završeno. %d korisnički račun je očišćen.',
2=>'Rečišćenje završeno. %d korisnička računa su očišćena.',
3=>'Rečišćenje završeno. %d korisničkih računa je očišćeno.',
],
));
// Additional help for commands.
$lang = array_merge($lang, array(
'CLI_HELP_CRON_RUN'=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Opcionalno, možeš odrediti naziv <em>cron</em> zadatka za provođenje samo određenog <em>cron</em> zadatka.',
'CLI_HELP_USER_ACTIVATE'=>'(De)Aktiviraj korisnički račun korištenjem <info>--deactivate</info> opcije [za opcionalno slanje aktivacijske poruke elektroničke pošte korisniku/ci koristi(š) <info>--send-email</info> opciju].',
'CLI_HELP_USER_ADD'=>'<info>%command.name%</info> dodaje(š) novi korisnički račun: ako naredbu pokreneš bez opcija, bit ćeš zatražen/a za unos(om) iste/ih [za opcionalno slanje poruke elektroničke pošte novom/oj korisniku/ci koristi(š) <info>--send-email</info> opciju].',
'CLI_HELP_USER_RECLEAN'=>'Rečišćenje korisničkih računa služi provjeri svih pohranjenih korisničkih računa osiguravajući pritom da budu pohranjene (i) čiste verzije [očišćeni korisnički računi (bit će) u obliku forme neosjetljive na velika/mala slova, NFC formalizirani i transformirani u ASCII].',
));
