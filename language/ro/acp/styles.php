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
	'ACP_STYLES_EXPLAIN'			=> 'Aici puteţi administra stilurile disponibile în forum. Puteți modifica stilurile existente, șterge, dezactiva, reactiva, instala stiluri noi. Puteți de asemenea vedea cum arată un stil utilizând funcția de previzualizare. Puteți vedea contorul numărului de utilizatori pentru fiecare stil, dar rețineți că suprascrierea stilului utilizatorilor nu se va reflecta aici.', 

	'CANNOT_BE_INSTALLED'			=> 'Nu poate fi instalat',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Sunteți sigur că vreți dezinstalarea stilurilor selectate?',
	'COPYRIGHT'						=> 'Drepturi de autor',

	'DEACTIVATE_DEFAULT'		=> 'Nu puteţi dezactiva stilul iniţial.',
	'DELETE_FROM_FS'			=> 'Şterge din sistemul de fişiere',
	'DELETE_STYLE_FILES_FAILED'	=> 'Eroare la ștergerea fișierelor stilului "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Fișierele stilului "%s" au fost șterse.',
	'DETAILS'					=> 'Detalii',

	'INHERITING_FROM'			=> 'Preluat de la',
	'INSTALL_STYLE'				=> 'Instalare stil',
	'INSTALL_STYLES'			=> 'Instalare stiluri',
	'INSTALL_STYLES_EXPLAIN'	=> 'Aici puteți instala stiluri noi.<br />Dacă nu puteți găsi un anumit stil în lista de mai jos, verificați dacă stilul nu a fost deja instalat. Dacă nu este instalat, verificați dacă este încărcat corect.',
	'INVALID_STYLE_ID'			=> 'ID stil incorect.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Nu există stiluri care să îndeplinească criteriul de căutare.',
	'NO_UNINSTALLED_STYLE'		=> 'Nu sunt detectate stiluri dezinstalate.',

	'PURGED_CACHE'				=> 'Cache-ul a fost curațat.',

	'REQUIRES_STYLE'			=> 'Acest stil necesită ca stilul "%s" să fie instalat.',

	'STYLE_ACTIVATE'			=> 'Activare',
	'STYLE_ACTIVE'				=> 'Active',
	'STYLE_DEACTIVATE'			=> 'Dezactivare',
	'STYLE_DEFAULT'				=> 'Setare stil ca implicit',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Trebuie să activați stilul înainte să îl setați ca implicit.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Stilul părinte nevalid.',
	'STYLE_ERR_NAME_EXIST'		=> 'Un stil cu acest nume există deja.',
	'STYLE_ERR_STYLE_NAME'		=> 'Trebuie să furnizați un nume pentru acest stil.',
	'STYLE_INSTALLED'			=> 'Stilul "%s" a fost instalat.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Intoarcere la lista stilurilor instalate',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instalați mai multe stiluri',
	'STYLE_NAME'				=> 'Nume stil',
	'STYLE_NAME_RESERVED'		=> 'Stilul "%s" nu poate fi instalat pentru că acest nume este rezervat.',
	'STYLE_NOT_INSTALLED'		=> 'Stilul "%s" nu a fost instalat.',
	'STYLE_PATH'				=> 'Cale stil',
	'STYLE_UNINSTALL'			=> 'Dezinstalare',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Stilul "%s" nu poate fi dezinstalat pentru că are unul sau mai multe stiluri derivate.',
	'STYLE_UNINSTALLED'			=> 'Stilul "%s" a fost dezintalat.',
	'STYLE_PHPBB_VERSION'		=> 'Versiune phpBB',
	'STYLE_USED_BY'				=> 'Folosit de (inclusiv roboții)',
	'STYLE_VERSION'				=> 'Versine Stil',

	'UNINSTALL_PROSILVER'	=> 'Nu poţi dezinstala stilul “prosilver”.',
	'UNINSTALL_DEFAULT'		=> 'Nu puteți dezintala stilul implicit.',
 
 	'BROWSE_STYLES_DATABASE'	=> 'Răsfoire baza de date stiluri',
));
