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

	// Template
	'STORAGE_TITLE'							=> 'Setări Storare',
	'STORAGE_TITLE_EXPLAIN'			=> 'Schimbă furnizorii de storare pentru tipuri de sorare pentru phpBB. Alege furnizori locali sau furnizori remote să storezi fişiere adăugate sau create de phpBB.',
	'STORAGE_SELECT'						=> 'Selectează storare',
	'STORAGE_SELECT_DESC'				=> 'Selectează o storare din listă.',
	'STORAGE_NAME'							=> 'Nume Storare',
	'STORAGE_NUM_FILES'					=> 'Numer de fişiere',
	'STORAGE_SIZE'							=> 'Mărime',
	'STORAGE_FREE'							=> 'Spaţiu disponibil',
	'STORAGE_UNKNOWN'				=> 'Necunoscut',

	// Storage names
	'STORAGE_ATTACHMENT_TITLE'		=> 'Storare Ataşamente',
	'STORAGE_AVATAR_TITLE'				=> 'Storare Avatare',
	'STORAGE_BACKUP_TITLE'				=> 'Storare Backup',

	// Local adapter
	'STORAGE_ADAPTER_LOCAL_NAME'									=> 'Nume Local',
	'STORAGE_ADAPTER_LOCAL_OPTION_PATH'						=> 'Cale',
	'STORAGE_ADAPTER_LOCAL_OPTION_SUBFOLDERS'			=> 'Organizează în subdirectoare',
	'STORAGE_ADAPTER_LOCAL_OPTION_SUBFOLDERS_EXPLAIN'	=> 'Unele servere web ar putea avea probleme storând număr mare de fişiere într-un singur director. 	Activează acestă opţiune să distribui fişiere în diferite directoare.',

	// Form validation
	'STORAGE_UPDATE_SUCCESSFUL' 					=>	'Orice tipuri de depozite (storage) au fost uctulizate cu succes.',
	'STORAGE_NO_CHANGES'								=>	'Nici o schimbare a fost aplicată.',
	'STORAGE_PROVIDER_NOT_EXISTS'					=>	'Furnizorul selectat pentru %s nu există.',
	'STORAGE_PROVIDER_NOT_AVAILABLE'			=>	'Furnizorul selectat pentru %s nu este disponibil.',
	'STORAGE_FORM_TYPE_EMAIL_INCORRECT_FORMAT'	=>	'Email Incorect pentru %s de %s.',
	'STORAGE_FORM_TYPE_TEXT_TOO_LONG'			=>	'Textul este prea lung pentru %s de %s.',
	'STORAGE_FORM_TYPE_SELECT_NOT_AVAILABLE'	=>	'Valoare selectată nu este disponibilă pentru %s de %s.',
));
