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
    'ACP_FILES'                     => 'Administrare fişiere de limbă',
    'ACP_LANGUAGE_PACKS_EXPLAIN'    => 'Aici puteţi instala/dezinstala pachetele de limbă. Pachetul de limbă standard este marcat cu un asterix (*).',
    
	'DELETE_LANGUAGE_CONFIRM'		=> 'Sunteți sigur că doriți ștergerea “%s”?',
    
    'INSTALLED_LANGUAGE_PACKS'      => 'Pachete de limbă instalate',
   
    'LANGUAGE_DETAILS_UPDATED'           => 'Detaliile de limbaj au fost actualizate cu succes.',
    'LANGUAGE_PACK_ALREADY_INSTALLED'    => 'Acest pachet de limbă este deja instalat.',
    'LANGUAGE_PACK_DELETED'              => 'Pachetul de limbă <strong>%s</strong> a fost eliminat cu succes. Toţi utilizatorii ce folosesc acest limbaj au fost resetaţi la fişierele standard de limbă ale forumului.',
    'LANGUAGE_PACK_DETAILS'              => 'Detalii pachet de limbă',
    'LANGUAGE_PACK_INSTALLED'            => 'Pachetul de limbă <strong>%s</strong> a fost instalat cu succes.',
	'LANGUAGE_PACK_CPF_UPDATE'			 => 'Textele de limbă pentru câmpurile de profil personalizate au fost copiate din limba standard. Vă rugăm să le modificați dacă este cazul.',
    'LANGUAGE_PACK_ISO'                  => 'ISO',
    'LANGUAGE_PACK_LOCALNAME'            => 'Nume local',
    'LANGUAGE_PACK_NAME'                 => 'Nume',
    'LANGUAGE_PACK_NOT_EXIST'            => 'Pachetul de limbaj selectat nu există.',
    'LANGUAGE_PACK_USED_BY'              => 'Folosit de (incluzând roboţii)',
    'LANGUAGE_VARIABLE'                  => 'Variabilă',
    'LANG_AUTHOR'                        => 'Autorul Pachetului de limbă',
    'LANG_ENGLISH_NAME'                  => 'Nume în engleză',
    'LANG_ISO_CODE'                      => 'Cod ISO',
    'LANG_LOCAL_NAME'                    => 'Nume local',

    'MISSING_LANG_FILES'     => 'Lipseşte fişierul de limbă',
    'MISSING_LANG_VARIABLES' => 'Lipsesc variabile de limbă',
    
    'NO_FILE_SELECTED'              => 'Nu aţi specificat un fişier de limbă.',
    'NO_LANG_ID'                    => 'Nu aţi specificat un pachet de limbă.',
    'NO_REMOVE_DEFAULT_LANG'        => 'Nu puteţi elimina pachetul de limbă iniţial.<br />Dacă vreţi să eliminaţi acest pachet de limbă, schimbaţi mai întâi limba standard folosită pe forum.',
    'NO_UNINSTALLED_LANGUAGE_PACKS' => 'Niciun pachet de limbă dezinstalat',

    'THOSE_MISSING_LANG_FILES'            => 'Următoarele fişiere de limbă lispesc din directorul de limbă %s',
    'THOSE_MISSING_LANG_VARIABLES'        => 'Următoarele variabile de limbă lipsesc din pachetul de limbă %s',

    'UNINSTALLED_LANGUAGE_PACKS'    => 'Pachetele de limbă dezinstalate',

 	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Vizualizare baza de date cu pachete de limbă',
));
