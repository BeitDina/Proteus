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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
    'ACL_CAT_ACTIONS'      => 'Acţiuni',
    'ACL_CAT_CONTENT'      => 'Conţinut',
    'ACL_CAT_FORUMS'       => 'Forumuri',
    'ACL_CAT_MISC'	       => 'General',
    'ACL_CAT_PERMISSIONS'  => 'Permisiuni',
    'ACL_CAT_PM'           => 'Mesaje private',
    'ACL_CAT_POLLS'	       => 'Chestionare',
    'ACL_CAT_POST'		   => 'Mesaj',
    'ACL_CAT_POST_ACTIONS' => 'Acţiuni mesaj',
    'ACL_CAT_POSTING'      => 'Scrie',
    'ACL_CAT_PROFILE'      => 'Profil',
    'ACL_CAT_SETTINGS'	   => 'Setări',
    'ACL_CAT_TOPIC_ACTIONS'=> 'Acţiuni subiect',
    'ACL_CAT_USER_GROUP'   => 'Grupuri &amp; utilizatori',
));

// User Permissions
$lang = array_merge($lang, array(
    'ACL_U_VIEWPROFILE'  => 'Poate vedea profiluri, lista membrilor şi cea cu utilizatorii conectaţi',
    'ACL_U_CHGNAME'      => 'Poate schimba nume utilizator',
    'ACL_U_CHGPASSWD'    => 'Poate schimba parola',
    'ACL_U_CHGEMAIL'     => 'Poate schimba adresa de email', 
    'ACL_U_CHGAVATAR'    => 'Poate schimba imaginea asociată (Avatar)', 
    'ACL_U_CHGGRP'       => 'Poate schimba grupul implicit de utilizatori',
	'ACL_U_CHGPROFILEINFO'	=> 'Poate schimba informațiile din profil',

    'ACL_U_ATTACH'       => 'Poate ataşa fişiere', 
    'ACL_U_DOWNLOAD'     => 'Poate descărca fişiere', 
    'ACL_U_SAVEDRAFTS'   => 'Poate salva versiuni intermediare',
    'ACL_U_CHGCENSORS'   => 'Poate dezactiva cenzurarea cuvintelor',
    'ACL_U_SIG'	         => 'Poate folosi semnătura',
	'ACL_U_EMOJI'		 => 'en Can use emoji and rich text characters in topic title',

    'ACL_U_SENDPM'        => 'Poate trimite mesaje private', 
    'ACL_U_MASSPM'        => 'Poate trimite mesaje private către mai mulţi utilizatori',
    'ACL_U_MASSPM_GROUP'  => 'Poate trimite mesaje private către grupuri', 
    'ACL_U_READPM'        => 'Poate citi mesaje private', 
    'ACL_U_PM_EDIT'       => 'Poate modifica propriile mesaje private', 
    'ACL_U_PM_DELETE'     => 'Poate şterge mesaje private din propriul folder', 
    'ACL_U_PM_FORWARD'    => 'Poate trimite mai departe mesaje private', 
    'ACL_U_PM_EMAILPM'    => 'Poate trimite mesaje private prin email', 
    'ACL_U_PM_PRINTPM'    => 'Poate tipări mesaje private',
    'ACL_U_PM_ATTACH'     => 'Poate ataşa fişiere în mesaje private', 
    'ACL_U_PM_DOWNLOAD'   => 'Poate descărca fişiere în mesaje private', 
    'ACL_U_PM_BBCODE'     => 'Poate folosi cod BB în mesaje private', 
    'ACL_U_PM_SMILIES'    => 'Poate folosi zâmbete în mesaje private', 
    'ACL_U_PM_IMG'        => 'Poate folosi cod BB [img] în mesaje private', 
    'ACL_U_PM_FLASH'      => 'Poate folosi cod BB [flash] în mesaje private', 

    'ACL_U_SENDEMAIL'     => 'Poate trimite email-uri', 
    'ACL_U_SENDIM'        => 'Poate trimite mesaje instant', 
    'ACL_U_IGNOREFLOOD'   => 'Poate ignora limita de flood', 
    'ACL_U_HIDEONLINE'    => 'Poate ascunde starea online', 
    'ACL_U_VIEWONLINE'    => 'Poate vedea utilizatorii online ascunşi', 
    'ACL_U_SEARCH'        => 'Poate căuta în forum', 
));

// Forum Permissions
$lang = array_merge($lang, array(
    'ACL_F_LIST'        => 'Poate vedea forumul', 
	'ACL_F_LIST_TOPICS' => 'Nu se văd subiecte',
    'ACL_F_READ'        => 'Poate citi forumul', 
    'ACL_F_SEARCH'      => 'Poate căuta în forum', 
    'ACL_F_SUBSCRIBE'   => 'Se poate înscrie la forum', 
    'ACL_F_PRINT'		=> 'Poate imprima subiecte',
	'ACL_F_EMAIL'		=> 'Poate trimite subiecte prin email',
	'ACL_F_BUMP'		=> 'Poate ridica subiecte',
	'ACL_F_USER_LOCK'	=> 'Poate închide propriile subiecte',
	'ACL_F_DOWNLOAD'	=> 'Poate descărca fișiere',
	'ACL_F_REPORT'		=> 'Poate raporta mesaje',

	'ACL_F_POST'		=> 'Poate deschide noi subiecte',
	'ACL_F_STICKY'		=> 'Poate scrie mesaje lipicioase',
	'ACL_F_ANNOUNCE'	=> 'Poate scrie anunțuri',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'en Can post global announcements',
	'ACL_F_REPLY'		=> 'Poate răspunde în subiecte',
	'ACL_F_EDIT'		=> 'Poate să-și modifice mesajele',
	'ACL_F_DELETE'		=> 'Poate să-și șteargă definitiv mesajele',
	'ACL_F_SOFTDELETE'	=> 'Poate ă-și șteargă temporar mesajele<br /><em>Moderatorii care au permisiuni de aprobare a mesajelor, pot restaura mesajele șterse temporar.</em>',
	'ACL_F_IGNOREFLOOD' => 'Poate ignora limita de flood',
	'ACL_F_POSTCOUNT'	=> 'Creșterea contorului mesajelor<br /><em>Rețineți că această setare va influența numai mesajele noi.</em>',
	'ACL_F_NOAPPROVE'	=> 'Poate scrie mesaje fără aprobare',

	'ACL_F_ATTACH'      => 'Poate ataşa fişiere', 
    'ACL_F_ICONS'       => 'Poate folosi iconiţe pentru subiecte/mesaje', 
    'ACL_F_BBCODE'      => 'Poate folosi cod BB', 
    'ACL_F_FLASH'       => 'Poate folosi cod BB [flash]', 
	'ACL_F_IMG'         => 'Poate folosi cod BB [img]', 
    'ACL_F_SIGS'        => 'Poate folosi semnături', 
    'ACL_F_SMILIES'     => 'Poate folosi zâmbete', 
    
	'ACL_F_POLL'        => 'Poate crea chestionare', 
    'ACL_F_VOTE'        => 'Poate vota în chestionare', 
    'ACL_F_VOTECHG'	    => 'Poate schimba votul existent', 
   ));

// Moderator Permissions
$lang = array_merge($lang, array(
    'ACL_M_EDIT'        => 'Poate modifica mesaje', 
    'ACL_M_DELETE'      => 'Poate şterge mesaje', 
    'ACL_M_SOFTDELETE'	=> 'Poate şterge temporar mesaje<br /><em>Moderatorii care au permisiuni de a aproba mesaje, pot restaura mesajele șterse temporar.</em>',
	'ACL_M_APPROVE'	    => 'Poate aproba mesaje', 
    'ACL_M_REPORT'      => 'Poate închide şi şterge rapoarte', 
    'ACL_M_CHGPOSTER'   => 'Poate schimba autorul mesajului', 

    'ACL_M_MOVE'    => 'Poate muta subiecte', 
    'ACL_M_LOCK'    => 'Poate închide subiecte', 
    'ACL_M_SPLIT'   => 'Poate despărţi subiecte', 
    'ACL_M_MERGE'   => 'Poate uni subiecte', 

    'ACL_M_INFO'        => 'Poate vizualiza detaliile mesajului', 
    'ACL_M_WARN'        => 'Poate da avertismente<br /><em>Această setare este alocată doar global. Nu este bazată pe forum.</em>', // This moderator setting is only global (and not local)
    'ACL_M_PM_REPORT'	=> 'Poate închide şi şterge rapoarte pentru mesaje private<br /><em>Această setare este alocată doar global. Nu este bazată pe forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'         => 'Poate administra restricţiile<br /><em>Această setare este alocată doar global. Nu este bazată pe forum.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
    'ACL_A_BOARD'        => 'Poate modifica setările forumului/verifica existența de noi versiuni', 
    'ACL_A_SERVER'       => 'Poate modifica setările server-ului și de comunicaţie', 
    'ACL_A_JABBER'       => 'Poate modifica configuraţiile Jabber', 
    'ACL_A_PHPINFO'      => 'Poate vizualiza setările php', 

    'ACL_A_FORUM'       => 'Poate administra forumuri', 
    'ACL_A_FORUMADD'    => 'Poate adăuga noi forumuri', 
    'ACL_A_FORUMDEL'    => 'Poate şterge forumuri', 
    'ACL_A_PRUNE'       => 'Poate curăţi forumuri', 

    'ACL_A_ICONS'        => 'Poate modifica iconiţe de subiect/mesaj şi zâmbete', 
    'ACL_A_WORDS'        => 'Poate modifica lista de cuvinte cenzurate', 
    'ACL_A_BBCODE'       => 'Poate defini etichete de cod BB', 
    'ACL_A_ATTACH'       => 'Poate schimba setările pentru ataşarea de fişiere', 

    'ACL_A_USER'        => 'Poate administra utilizatori<br /><em>Aceasta include de asemenea vizualizarea listei cu utilizatorii conectaţi.</em>', 
    'ACL_A_USERDEL'     => 'Poate şterge/curăţi utilizatori', 
    'ACL_A_GROUP'       => 'Poate administra grupuri',
    'ACL_A_GROUPADD'    => 'Poate adăuga grupuri noi', 
    'ACL_A_GROUPDEL'    => 'Poate şterge grupuri', 
    'ACL_A_RANKS'       => 'Poate administra ranguri',
    'ACL_A_PROFILE'	    => 'Poate administra câmpurile din profil particularizate', 
    'ACL_A_NAMES'       => 'Poate administra numele dezactivate', 
    'ACL_A_BAN'	        => 'Poate administra restricţiile', 

    'ACL_A_VIEWAUTH'    => 'Poate vizualiza măştile permisiunilor', 
    'ACL_A_AUTHGROUPS'  => 'Poate modifica permisiunile pentru grupurile individuale', 
    'ACL_A_AUTHUSERS'   => 'Poate modifica permisiunile pentru utilizatorii individuali', 
    'ACL_A_FAUTH'       => 'Poate modifica clasa permisiunilor forumului', 
    'ACL_A_MAUTH'       => 'Poate modifica clasa permisiunilor moderatorului', 
    'ACL_A_AAUTH'       => 'Poate modifica clasa permisiunilor administratorului', 
    'ACL_A_UAUTH'       => 'Poate modifica clasa permisiunilor utilizatorului', 
    'ACL_A_ROLES'       => 'Poate administra roluri', 
    'ACL_A_SWITCHPERM'  => 'Poate folosi permisiunile altora', 

	'ACL_A_STORAGE'		=> 'en Can manage storages',
    'ACL_A_STYLES'      => 'Poate administra stiluri', 
    'ACL_A_EXTENSIONS'	=> 'CPoate administra extensii',
	'ACL_A_VIEWLOGS'    => 'Poate vizualiza jurnale', 
    'ACL_A_CLEARLOGS'   => 'Poate curăţa jurnale', 
    'ACL_A_MODULES'     => 'Poate administra module', 
    'ACL_A_LANGUAGE'    => 'Poate administra pachete de limbă', 
    'ACL_A_EMAIL'       => 'Poate trimite email la toți utilizatorii', 
    'ACL_A_BOTS'        => 'Poate administra roboţi', 
    'ACL_A_REASONS'     => 'Poate administra motive de raportare/contestări', 
    'ACL_A_BACKUP'      => 'Poate salva/restaura baza de date', 
    'ACL_A_SEARCH'      => 'Poate administra setări de căutare', 
));
