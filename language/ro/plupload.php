<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Adaugă fișiere',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Adaugă fișiere pentru încărcare în lista de așteptare și apăsați butonul de start.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s este deja în lista de așteptare.',
	'PLUPLOAD_CLOSE'			=> 'Închide',
	'PLUPLOAD_DRAG'				=> 'Trageți fișierele aici.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Eroare fișier duplicat.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Puteți de asemenea atașa fișiere prin tragerea și fixarea lor în caseta de mesaj.',
	'PLUPLOAD_ERR_INPUT'		=> 'Nu a reușit deschiderea fluxului de intrare.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nu a reușit mutarea fișierelor încărcate.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nu a reușit deschiderea fluxului de ieșire.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Fșier prea mare:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Eroare la numărarea fișierelor.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Extensie fișier invalidă:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Timpul de rulare a depășit memoria disponibilă.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL-ul pentru încărcare este eronat sau nu există.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Eroare la extensia fișierului.',
	'PLUPLOAD_FILE'				=> 'Fișier: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fișier: %s, mărime: %d, mărire maximă a fișierului: %d',
	'PLUPLOAD_FILENAME'			=> 'Nume fișier',
	'PLUPLOAD_FILES_QUEUED'		=> '%d fișiere în lista de așteptare',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Eroare generică.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Eroare HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Formatul imaginii este eronat sau nu este suportat.',
	'PLUPLOAD_INIT_ERROR'		=> 'Eroare de inițiere.',
	'PLUPLOAD_IO_ERROR'			=> 'Eroare IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Eroare de securitate.',
	'PLUPLOAD_SELECT_FILES'		=> 'Selectare fișiere',
	'PLUPLOAD_SIZE'				=> 'Mărime',
	'PLUPLOAD_SIZE_ERROR'		=> 'Eroare la mărimea fișierului.',
	'PLUPLOAD_STATUS'			=> 'Statut',
	'PLUPLOAD_START_UPLOAD'		=> 'Start încărcare',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start încărcare în listă',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stop încărcare',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop încărcare curentă',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Încărcat %d/%d fișiere',
));
