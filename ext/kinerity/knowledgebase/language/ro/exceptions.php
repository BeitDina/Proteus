<?php
/**
 *
 * Catalog Articole extensie pt  pachetul phpBB Forum Software
 *
 * @copyright (c) 2017, kinerity, https://www.acsyste.com
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'EXCEPTION_FIELD_MISSING'		=> 'Câmpurile solicitate lipsesc',
	'EXCEPTION_INVALID_ARGUMENT'	=> 'Argument invalid specificat pentru `%1$s`. Motiv: %2$s',
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'Câmpul `%1$s` primeşte data dincole de creaţele lui',
	'EXCEPTION_TOO_LONG'			=> 'Intrarea era mai lungă decât lungimea maximă.',
	'EXCEPTION_NOT_UNIQUE'			=> 'Intrarea nu era unică.',
	'EXCEPTION_UNEXPECTED_VALUE'	=> 'Câmpul `%1$s` primeşte date neaşteptate. Motiv: %2$s',
	'EXCEPTION_ILLEGAL_CHARACTERS'	=> 'Intrarea conţinea caractere ilegale.',
));
