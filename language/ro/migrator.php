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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'În mod neașteptat, setarea de configurare "%s" nu există.',

	'GROUP_NOT_EXIST'					=> 'În mod neașteptat, grupul "%s" nu există.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aplic dependențele pentru %s.',
	'MIGRATION_DATA_DONE'				=> 'Instalare date: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalare date: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_DATA_RUNNING'			=> 'Instalez date: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrarea a instalat (sărit) deja: %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Ceva nu a funcționat în timpul cererii și o excepție a fost emisă. Schimbările efectuate înainte de eroarea apărută au fost restaurate după cum ne-am priceput mai bine dar ar trebui să verificați forumul pentru erori.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migrarea "%1$s" nu poate fi efectuată, lipsește migrarea "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'en The migration "%s" is not installed.',
	'MIGRATION_NOT_VALID'				=> '%s nu este o migrare validă.',
	'MIGRATION_SCHEMA_DONE'				=> 'Schemă instalată: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instalare schemă: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Schema instalată: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Reverted Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Reverting Data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Reverting Data: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Reverted Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Reverting Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Reverting Schema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'O migrare este invalidă. Lipsește o condiție dintr-un ajutor de declarație IF.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'O migrare este invalidă. Lipsește un apel valid către un pas de migrare dintr-un ajutor de declarație IF.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'O migrare este invalidă. O funcție apelabilă nu a putut fi apelată.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'O migrare este invalidă. A fost întâlnit un tip necunoscut al utilitarului de migrare.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'O migrare este invalidă. A fost întâlnită un utilitar nedefinit de migrare.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'O migrare este invalidă. A fost întâlnită o metodă nedefinită a utilitarului de migrare.',

	'MODULE_ERROR'						=> 'A fost întâlnită o eroare în timpul creării unui modul: %s',
	'MODULE_EXISTS'						=> 'en A module already exists: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'en Several modules with the given parent module langname already exist: %s. Try using before/after keys to clarify the module placement.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'en A required module info file is missing: %2$s',
	'MODULE_NOT_EXIST'					=> 'en A required module does not exist: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'en Unable to determine the parent module identifier: %s',
	'PERMISSION_NOT_EXIST'				=> 'În mod neașteptat, setarea permisiune  "%s" nu există.',

	'ROLE_NOT_EXIST'					=> 'În mod neașteptat, rolul permisiune "%s" nu există.',
));
