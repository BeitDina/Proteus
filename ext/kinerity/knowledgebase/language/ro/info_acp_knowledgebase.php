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
	'ACP_KNOWLEDGEBASE'				=> 'Catalog Articole',
	'ACP_KNOWLEDGEBASE_MANAGE'		=> 'Administrează categorii',
	'ACP_KNOWLEDGEBASE_SETTINGS'	=> 'Catalog Articole setări',

	// ACP Logs
	'ACP_KNOWLEDGEBASE_SETTINGS_LOG'	=> '<strong>Catalog Articole setări schimbate</strong>',

	'ACP_KNOWLEDGEBASE_ARTICLE_APPROVED_LOG'	=> '<strong>Articol Catalog Articole Aprobat</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DELETED_LOG'		=> '<strong>Articol Catalog Articole Şters</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DENIED_LOG'		=> '<strong>Articol Catalog Articole Negat</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_ARTICLE_DISAPPROVED_LOG'	=> '<strong>Articol Catalog Articole Dezaprobat</strong><br />» %s',

	'ACP_KNOWLEDGEBASE_CATEGORY_ADD_LOG'		=> '<strong>S-a creat noua categorie Catalog Articole</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_CATEGORY_DELETE_LOG'		=> '<strong>S-a şters categoria Catalog Articole</strong><br />» %s',
	'ACP_KNOWLEDGEBASE_CATEGORY_EDIT_LOG'		=> '<strong>S-au actualizat informaţiile categoriei Catalog Articole</strong><br />» %1$s',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_DOWN_LOG'	=> '<strong>S-a mutat categoria Catalog Articole</strong> %1$s <strong>below</strong> %2$s',
	'ACP_KNOWLEDGEBASE_CATEGORY_MOVE_UP_LOG'	=> '<strong>S-a mutat categoria Catalog Articole </strong> %1$s <strong>apobare</strong> %2$s',

	// Settings page
	'ACP_KNOWLEDGEBASE_SETTINGS_EXPLAIN'	=> 'Aici poţi configura setările principale pentru Catalog Articole.',
	'ACP_KNOWLEDGEBASE_ENABLE'				=> 'Activează Catalog Articole',
	'ACP_KNOWLEDGEBASE_HEADER_LINK'			=> 'Afişează legătură Catalog Articole în antet',
	'ACP_KNOWLEDGEBASE_FONT_ICON'			=> 'Icoana Legăturii Catalog Articole',
	'ACP_KNOWLEDGEBASE_FONT_ICON_EXPLAIN'	=> 'Introdu numele unui <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome</a> icon to use for the Catalog Articole link in the header. Leave this field blank for no Catalog Articole icon.',
	'ACP_KNOWLEDGEBASE_FONT_ICON_INVALID'	=> 'Icoana Legăturii Catalog Articole conţinea caractere invalide.',
	'ACP_KNOWLEDGEBASE_SETTINGS_CHANGED'	=> 'Catalog Articole Setări schimbate.',

	// Administrează page
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_NOT_UPDATED'	=> array(
		1	=> 'Categorie ştearsă cu success.<br /><br />Te rog ia aminte căci erau %d articole în această categorie care deja aparţineau de noua categorie. Următorul articol era deja prezent:<br />%s',
		2	=> 'Categorie ştearsă cu success.<br /><br />Te rog ia aminte căci erau %d articole în această categorie care deja aparţineau de categoria nouă. Următorul articol era deja prezent:<br />%s',
	),
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_NOT_DELETED'	=> array(
		1	=> 'Categorie ştearsă cu success.<br /><br />Te rog ia aminte căci era %d articole  în această categorie care aparţineau de altă categorie. Următorul articol <b><u>nu</u></b> era şters:<br />%s',
		2	=> 'Categorie ştearsă cu success.<br /><br />Te rog ia aminte căci erau %d articole  în această categorie care aparţineau de altă categorie. Următorul articol <b><u>nu</u></b> este şters:<br />%s',
	),


	'ACP_KNOWLEDGEBASE_MANAGE_EXPLAIN'			=> 'Din acestă pagină poţi adăuga, edita, şterge şi re-ordona categorii. O categorie esze un grup de articole asociate. Fiecare categorie poate avea un număr nelimitat de articole.',
	'ACP_KNOWLEDGEBASE_CATEGORY'				=> 'Categorie',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY'			=> 'Creare categorie',
	'ACP_KNOWLEDGEBASE_CREATE_CATEGORY_EXPLAIN'	=> 'Using the form below you can crea a noi category which will be displayed in the Catalog Articole.',
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY'			=> 'Ştergere categorie',
	'ACP_KNOWLEDGEBASE_DELETE_CATEGORY_EXPLAIN'	=> 'Folosind formularul de mai jos poţi şterge o categorie existentă în Catalog Articole. You can şterge all articole associated with this category or move them de altă categorie. <strong>Articolele care există în alte categorii nu vor fi şterse ori mutate.</strong>',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY'			=> 'Editare categorie',
	'ACP_KNOWLEDGEBASE_EDIT_CATEGORY_EXPLAIN'	=> 'Folosing formularul de mai jos poţi actualiza o categorie existentă care va fi afişată în Catalog Articole.',
	'ACP_KNOWLEDGEDABE_INVALID_HASH'			=> 'Legătura este coruptă. Este invalid hash-ul.',
	'ACP_ARTICLES'								=> 'Articole',
	'ACP_CATEGORIES'							=> 'Categorii',
	'ACP_CATEGORY_SETTINGS'						=> 'Setări categorii',
	'ACP_CATEGORY_NAME'							=> 'Nume categorie',
	'ACP_CATEGORY_NAME_EXPLAIN'					=> 'Numele categoriilor sunt afişate pe pagina index pentru fiecare articol, vizualizarea pagini categorii şi vizuaizarea paginii article. Numele categoriilor sunt totodată folosite să identifici categoria ta când le administrezi în ACP.',
	'ACP_CATEGORY_DESCRIPTION'					=> 'Descriere categorii',
	'ACP_CATEGORY_DESCRIPTION_EXPLAIN'			=> 'Descrierea categoriei este displayed on the index page when a category is selected.',
	'ACP_ADD_CATEGORY'							=> 'Creare categorie nouă',
	'ACP_DELETE_ARTICLES'						=> 'Şterge articole',
	'ACP_MOVE_ARTICLES'							=> 'Mută articole',
	'ACP_DELETE_CATEGORY_CONFIRM'				=> 'Eşti sigur căci vrei să înlături această categorie?',
	'ACP_CATEGORY_ADDED'						=> 'Categorie adăugată cu success.',
	'ACP_CATEGORY_DELETED'						=> 'Categorie înlăturată cu success.',
	'ACP_CATEGORY_EDITED'						=> 'Categorie editată cu success.',
));
