<?php
/**
*
* @package phpBB Extension - Download Manager
* @copyright (c) 2016 orynider - http://mxpcms.sourceforge.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ACP_PA_FILES'						=> 'Download Database',
	'ACP_MANAGE_CATEGORIES'				=> 'Manage Categories',
	'ACP_MANAGE_CONFIG'					=> 'Configuration',
	'ACP_MANAGE_DOWNLOADS'				=> 'Manage Downloads',
	'LOG_DOWNLOAD_ADD'					=> '<strong>Added new download</strong><br>» %1$s',
	'LOG_DOWNLOAD_UPDATED'				=> '<strong>Updated download</strong><br>» %1$s',
	'LOG_DOWNLOAD_DELETED'				=> '<strong>Deleted download</strong><br>» %1$s',
	'LOG_CATEGORY_ADD'					=> '<strong>Added new download category</strong><br>» %1$s',
	'LOG_CATEGORY_UPDATED'				=> '<strong>Updated download category</strong><br>» %1$s',
	'LOG_CATEGORY_DELETED'				=> '<strong>Deleted download category</strong><br>» %1$s',
	'LOG_CONFIG_UPDATED'				=> '<strong>Updated download configuration</strong>',
));
