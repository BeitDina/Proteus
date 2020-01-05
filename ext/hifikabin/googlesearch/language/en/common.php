<?php
/**
*
* @package phpBB Extension - Google Search
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

	'GOOGLE'							=> 'Google',
	'GOOGLE_SEARCH'						=> 'Google Search ...',
	'SEARCH_GOOGLE'						=> 'Google Search',

	'GOOGLESEARCH_NAVBAR'				=> 'Navbar',
	'GOOGLESEARCH_HEADER'				=> 'Header',
	'GOOGLESEARCH_INDEX'				=> 'Index',

	'ACP_GOOGLESEARCH_CONFIG'			=> 'Google Search',
	'ACP_GOOGLESEARCH_CONFIG_EXPLAIN'	=> 'This is the configuration page for the Google Search extension.',

	'ACP_GOOGLESEARCH_CONFIG_SET'		=> 'Configuration',
	'GOOGLESEARCH_CONFIG_SAVED'			=> 'Google Search settings saved',

	'GOOGLESEARCH_CUSTOM'				=> 'Custom Google Search',

	'GOOGLESEARCH_NOSCRIPT'				=> 'JavaScript must be enabled and Google whitelisted in order to view the Custom Google Search Results',

	'GOOGLESEARCH_POSITION'				=> 'Google Search Position',
	'GOOGLESEARCH_POSITION_EXPLAIN'		=> 'Do you want to show the Search in the NavBar or Header?',


	'GOOGLESEARCH_CUSTOM_CODE'						=> 'Custom Code',
	'GOOGLESEARCH_CUSTOM_CODE_EXPLAIN'				=> 'You can replace this default code with your own Search Engine ID if you wish',
	'GOOGLESEARCH_CUSTOM_CODE_PLACEHOLDER'			=> 'Search Engine ID',

	'GOOGLESEARCH_VERIFICATION_CODE'				=> 'Google Webmaster Tools Verification',
	'GOOGLESEARCH_VERIFICATION_CODE_EXPLAIN'		=> 'You can enter your Google Verification Code here if you wish',
	'GOOGLESEARCH_VERIFICATION_CODE_PLACEHOLDER'	=> 'Google Verification Code',

	'GOOGLESEARCH_REQUIRE_3.1.4'					=> 'This extension requires phpBB 3.1.4 or higher and will not work with 3.2.0 or later. Either update your forum or download the Google Search Extension for phpBB 3.2.x',
	'GOOGLESEARCH_REQUIRE_3.2.0'					=> 'This extension requires at least phpBB version 3.2.0.  Please update your forum to be able to use this extension',
));

