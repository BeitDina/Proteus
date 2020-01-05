<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
	'ACP_VIGLINK_SETTINGS'			=> 'Setări VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink este un serviciu de terţă-parte ce discret monetizează legăruri trimise de utilizatori din forumul tău fără nici o schimbare în experienţa utilizatorului. Când utilizatorii fac clic în legăturile lor externe, a produselor sau servicilor şi cumpără ceva, comercianţii plătesc prin VigLink un comision, din care se repartizează o parte proiectului phpBB. Prin alegerea activării VigLink şi procesul de donare la proiectul phpBB, susţii organizaţia noastră de cod deschis "open-source" şi aseguri securitatea noastrp financiară.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Poţi schima aceste setări în orice moment din panoul “<a href="%1$s">Setări VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Nu veți mai fi redirecționat către această pagină odată ce trimiteți opțiunile preferate mai jos, făcând clic pe butonul Trimite',
	'ACP_VIGLINK_ENABLE'			=> 'Abilitare VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Permite folosirea de servicii VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Revendică propiile câştiguri (opţional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Poţi revendica propiile tale câştiguri înregistrândute într-un cont Convertire VigLink.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Serviciile VigLink au fost dezactivate de phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Revendică garanţia ta',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Poţi revendica garanţia forumului de câştiguri monetare VigLink, înloc de donare a gananţiilor proiectului phpBB. Pentru a gestiona configurarea contului tău, înregistrează tu contul “Converteşte VigLink” făcând click pe “Converteşte Contul”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Converteşte contul',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nu s-a putut prelua legătura contului de conversie VigLink.',
));
