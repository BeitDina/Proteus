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
	'ALL_categorii'		=> 'Toate categoriile',
	'APPROVE'				=> 'Aprobare',
	'APPROVE_ARTICLE'		=> 'Aprobare articol',
	'APPROVED'				=> 'Aprobat',
	'ARTICLES'				=> 'Articole',
	'ARTICLE_CONFIRM'		=> 'Eşti sigur căci vrei să %1$ acest articol?',
	'ARTICLE_DENIED'		=> 'Articol negat',
	'ARTICLE_STORED_MOD'	=> 'Acest articol a fost trimis cu succes, dar trebuie să fie aprobat de un moderator până probabil va fi vizibil.',
	'ARTICLE_DISAPPROVED'	=> 'Articol dezaprobat',
	'AUTHOR'				=> 'Autor',

	'BUTTON_APPROVE'		=> 'Aprobare',
	'BUTTON_DELETE'			=> 'Ştergere',
	'BUTTON_DENY'			=> 'Negare',
	'BUTTON_EDIT'			=> 'Editare',
	'BUTTON_NEW_ARTICLE'	=> 'Articol Nou',
	'BUTTON_DISAPPROVE'		=> 'Dezaprobare',

	'categorii'	=> 'categorii',
	'CHANGE_POSTER'	=> 'Achimbă trimiţător',

	'DELETE_ARTICLE'		=> 'Ştergere articol',
	'DENIED'				=> 'Negat',
	'DENY'					=> 'Negare',
	'DENY_ARTICLE'			=> 'Negare articol',
	'DESCRIPTION'			=> 'Descriere',
	'DISAPPROVE'			=> 'Dezaprobare',
	'DISAPPROVE_ARTICLE'	=> 'Dezaprobare articol',
	'DISAPPROVED'			=> 'Dezaprobat',

	'EDIT_ARTICLE'	=> 'Editare articol',

	'EMTPY_TITLE'		=> 'Trebuie să introduci un titlu când trimiţi un articol.',
	'EMPTY_DESCRIPTION'	=> 'Trebuie să introduci o descriere când trimiţi un articol.',
	'EMPTY_CATEGORY'	=> 'Trebuie să specifici cel puţin o categorie pentru acest articol să aparţină.',
	'EMPTY_TEXT'		=> 'Trebuie să introduci un mesaj când trimiţi un articol.',

	'INVALID_MODE'	=> 'Mod Invalid',
	'INVALID_TYPE'	=> 'Tip Invalid',

	'KNOWLEDGEBASE'			=> 'Catalog Articole',
	'KNOWLEDGEBASE_EXPLAIN'	=> 'Această secţiune conţine articole detaliate elaborând pe unele chestiuni întâmpinate de utilizatori. Articolele trimise de membrii comunităţii sunt verificate de acurateţe de echipă. Dacă nu găseşti răspuns la întrebarea ta aici, îţi recomandăm să te uiţi prin forumuri şi totodată să foloseşti căutare.',
	'KNOWLEDGEBASE_TITLE'	=> 'Vezi Catalog Articole',

	'LAST_MODIFIED'		=> 'Ultima modificare',
	'LINK_TO_ARTICLE'	=> 'Link la acest articol',

	'NARROW_SEARCH'	=> 'Strâmtează-ţi căutarea prin selectarea unei categorii',

	'NOTIFICATION_ARTICLE_APPROVED'		=> '<strong>Articol aprobat</strong>: %1$s',
	'NOTIFICATION_ARTICLE_DELETED'		=> '<strong>Articol şters</strong>: %1$s',
	'NOTIFICATION_ARTICLE_DENIED'		=> '<strong>Articol negat</strong>: %1$s',
	'NOTIFICATION_ARTICLE_DISAPPROVED'	=> '<strong>Articol dezaprobat</strong>: %1$s',
	'NOTIFICATION_ARTICLE_IN_QUEUE'		=> '<strong>Catalog Articole Apobare Articol</strong> cerere: %1$s',

	'NO_ARTICLE'	=> 'Articolul dorit nu există.',
	'NO_ARTICLES'	=> 'Nu există articole în acest Catalog de Articole ori în acestă categorie.',
	'NO_CATEGORY'	=> 'Categoria dorită nu există.',
	'NO_PAGE_MODE'	=> 'Invalid or no page mode specified.',

	'POST_ARTICLE'	=> 'Trimite un nou articol',

	'TYPE'	=> 'Tip',

	'VIEWING_KNOWLEDGEBASE'	=> 'Vizualizare Catalog Articole',

	'WRITTEN_BY'	=> 'Scris de',
	'WRITTEN_ON'	=> 'Scris pe',
));
