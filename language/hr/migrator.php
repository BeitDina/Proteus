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
'CONFIG_NOT_EXIST'=>'Config postavka "%s" neočekivano ne postoji.',
'GROUP_NOT_EXIST'=>'Grupa "%s" neočekivano ne postoji.',
'MIGRATION_APPLY_DEPENDENCIES'=>'Primijeni zavisnosti od %s.',
'MIGRATION_DATA_DONE'=>'Instaliran/i podatak/ci: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_DATA_IN_PROGRESS'=>'Instaliranje podataka: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_DATA_RUNNING'=> 'Instaliranje podataka: %s.',
'MIGRATION_EFFECTIVELY_INSTALLED'=>'Migracija je [već] instalirana [preskočeno]: %s.',
'MIGRATION_EXCEPTION_ERROR'=>'Nešto je pošlo po zlu tijekom zahtjeva i iznimka je izbačena. Promjene napravljene prije negoli je došlo do pogreške su, u skladu s našim mogućnostima, vraćene u prethodno stanje, ali bi svejedno trebao/la provjeriti forum za slučaj da je došlo do (po)grešaka.',
'MIGRATION_NOT_FULFILLABLE'=>'Migracija "%1$s" nije u potpunosti “ispunjena” [izvršena]: nedostaje migracija "%2$s".',
'MIGRATION_NOT_INSTALLED'=>'Migracija "%s" nije instalirana.',
'MIGRATION_NOT_VALID'=>'%s nije validna migracija.',
'MIGRATION_SCHEMA_DONE'=>'Instalirana shema: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_SCHEMA_IN_PROGRESS'=>'Instaliranje sheme: %1$s; vrijeme: %2$.2f sekunda/e/i.',
'MIGRATION_SCHEMA_RUNNING'=>'Instaliranje sheme: %s.',
'MIGRATION_REVERT_DATA_DONE'=>'Vraćeni podatci: %1$s; vrijeme: %2$.2f sekunda/e/i.',
'MIGRATION_REVERT_DATA_IN_PROGRESS'=>'Vraćanje podataka: %1$s; vrijeme: %2$.2f sekunda/e/i.',
'MIGRATION_REVERT_DATA_RUNNING'=>'Vraćanje podataka: %s.',
'MIGRATION_REVERT_SCHEMA_DONE'=>'Vraćena shema: %1$s; vrijeme: %2$.2f sekunda/e/i.',
'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'=>'Vraćanje sheme: %1$s; vrijeme: %2$.2f sekunda/e/i.',
'MIGRATION_REVERT_SCHEMA_RUNNING'=>'Vraćanje sheme: %s.',
'MIGRATION_INVALID_DATA_MISSING_CONDITION'=>'Migracija nije validna: nedostaje uvjet pomoćnika if naredbe <em>[if statement]</em>.',
'MIGRATION_INVALID_DATA_MISSING_STEP'=>'Migracija nije validna: nedostaje valjani poziv koraka migracije pomoćnika if naredbe <em>[if statement]</em>.',
// <!-- Kocka je hičena! -->
'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'=>'Migracija nije validna: nije [bilo] moguće pozvati prilagođenu pozivnu funkciju.',
'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'=>'Migracija nije validna: [došlo je do/uočen je] nepoznat tip alata migracije.',
'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'=>'Migracija nije validna: [došlo je do/uočen je] nedefiniran (tip) alat(a) migracije.',
'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'=>'Migracija nije validna: [došlo je do/uočena je] nedefinirana metoda alata migracije.',
'MODULE_ERROR'=>'Došlo je do pogreške tijekom kreiranja modula: %s.',
'MODULE_EXISTS'=>'Modul već postoji: %s.',
'MODULE_EXIST_MULTIPLE'=>'Postoji [već] nekoliko modula sa zadanim krovnim modulnim jezičnim imenom: %s.<br />Pokušaj s korištenjem prije/kasnije ključeva za razjašnjavanje smještaja modula.',
'MODULE_INFO_FILE_NOT_EXIST'=>'Nedostaje potrebna info datoteka modula: %2$s.',
'MODULE_NOT_EXIST'=>'Potreban modul "%s" ne postoji.',
'PARENT_MODULE_FIND_ERROR'=>'Nije moguće odrediti identifikator krovnog modula: %s.',
'PERMISSION_NOT_EXIST'=>'Postavka dopuštenja "%s" neočekivano ne postoji.',
'ROLE_NOT_EXIST'=>'Set dopuštenja "%s" neočekivano ne postoji.',
));
