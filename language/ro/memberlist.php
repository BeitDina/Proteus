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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Cel mai activ în forumul',
	'ACTIVE_IN_TOPIC'		=> 'Cel mai activ in subiectul',
	'ADD_FOE'				=> 'Adaugă ca persoană neagreată',
	'ADD_FRIEND'			=> 'Adaugă ca prieten',
	'AFTER'					=> 'După',	

	'ALL'					=> 'Toate',

	'BEFORE'				=> 'Înainte',

	'CC_SENDER'				=> 'Trimite-mi o copie a acestuie email.',
 	'CONTACT_ADMIN'			=> 'Contactează un administrator al forumului',
	
	'DEST_LANG'				=> 'Limbă',
	'DEST_LANG_EXPLAIN'		=> 'Selectaţi o limbă potrivită (dacă e disponibilă) pentru destinatarul acestui mesaj.',

	'EDIT_PROFILE'			=> 'Modifică profil',

	'EMAIL_BODY_EXPLAIN'	=> 'Acest mesaj va fi trimis ca text simplu, aşadar nu includeţi coduri HTML sau BBCode. Adresa de întoarcere pentru acest mesaj va fi setată ca fiind adresa dumneavoastră de email.',
	'EMAIL_DISABLED'		=> 'Scuze, dar toate funcţiile cu privire la e-mail au fost dezactivate.',
	'EMAIL_SENT'			=> 'E-mailul a fost trimis.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Acest mesaj va fi trimis ca text simplu, aşadar nu includeţi coduri HTML sau BBCode. Ţineţi cont de faptul că informaţiile subiectului sunt deja incluse în mesaj. Adresa de întoarcere pentru acest mesaj va fi setată ca fiind adresa dumneavoastră de e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Trebuie să specificaţi o adresă de email validă pentru destinatar.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Trebuie să introduceţi un mesaj care să fie trimis prin e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Trebuie să introduceţi un mesaj pentru a fi trimis.',
	'EMPTY_NAME_EMAIL'		=> 'Trebuie să introduceţi numele real al destinatarului.',
	'EMPTY_SENDER_EMAIL'	=> 'Trebuie să furnizați o adresă de email validă.',
	'EMPTY_SENDER_NAME'		=> 'Trebuie să furnizați un nume.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Trebuie să specificaţi un subiect pentru e-mail.',
	'EQUAL_TO'				=> 'Egal cu',

	'FIND_USERNAME_EXPLAIN'	=> 'Folosiţi acest formular pentru a căuta anumiţi membri. Nu trebuie să completaţi toate câmpurile. Pentru părţi de cuvinte, folosiţi * ca wildcard. Când introduceţi data, folosiţi formatul <kbd>YYYY-MM-DD</kbd>, ex. <samp>2004-02-29</samp>. Puteţi folosi acele căsuţe pentru a selecta unul sau mai mulţi utilizatori (unii utilizatori pot fi acceptaţi în funcţie de formular) şi apăsaţi pe butonul de selectare marcări pentru a vă întoarce la formularul anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nu puteţi trimite alt e-mail acum. Încercaţi mai târziu.',

	'GROUP_LEADER'			=> 'Liderul grupului',

	'HIDE_MEMBER_SEARCH'	=> 'Ascunde căutarea de utilizatori',

	'IM_ADD_CONTACT'		=> 'Adaugă contact',
	'IM_DOWNLOAD_APP'		=> 'Descarcă aplicaţie',
	'IM_JABBER'				=> 'Ţineţi cont de faptul că unii utilizatori au ales să nu primească mesaje instant nesolicitate.',
	'IM_JABBER_SUBJECT'		=> 'Acesta este un mesaj automat, vă rugăm să nu răspundeţi! Mesaj de la utilizatorul %1$s la %2$s.',
	'IM_MESSAGE'			=> 'Mesajul dumneavoastră',
	'IM_NAME'				=> 'Numele dumneavoastră',
	'IM_NO_DATA'			=> 'Nu există nicio informaţie corespunzătoare de contact pentru acest utilizator.',
	'IM_NO_JABBER'			=> 'Scuze, mesageria directă a utilizatorilor Jabber nu este suportată pe acest forum. Aveţi nevoie de un client Jabber instalat pe sistemul dumneavoastră pentru a contacta destinatarul de mai sus.',
	'IM_RECIPIENT'			=> 'Destinatar',
	'IM_SEND'				=> 'Trimite mesaj',
	'IM_SEND_MESSAGE'		=> 'Trimite mesaj',
	'IM_SENT_JABBER'		=> 'Mesajul dumneavoastră către %1$s a fost trimis cu succes.',
	'IM_USER'				=> 'Trimite un mesaj instant',
	
	'LAST_ACTIVE'				=> 'Activ ultima oară',
	'LESS_THAN'					=> 'Mai puţin de',
	'LIST_USERS'				=> array(
		1	=> '%d utilizator',
		2	=> '%d utilizatori',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Forumul necesită ca dumneavoastră să fiţi înregistrat şi autentificat pentru a vedea lista echipei.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Forumul necesită ca dumneavoastră să fiţi înregistrat şi autentificat pentru a accesa lista de membri.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Forumul necesită ca dumneavoastră să fiţi înregistrat şi autentificat pentru a căuta utilizatori.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Forumul necesită ca dumneavoastră să fiţi înregistrat şi autentificat pentru a vedea profilurile.',

	'MANAGE_GROUP'			=> 'Administrare grup',
	'MORE_THAN'				=> 'Mai mult de',

	'NO_CONTACT_FORM'		=> 'Formularul de contact a administratorului forumului a fost dezactivat.',
	'NO_CONTACT_PAGE'		=> 'Pagina de contact a administratorului forumului a fost dezactivată.',
	'NO_EMAIL'				=> 'Nu aveţi permisiunea să trimiteţi e-mail acestui utilizator.',
	'NO_VIEW_USERS'			=> 'Nu aveţi permisiunea să vizualizaţi lista cu membri sau profilurile.',

	'ORDER'					=> 'Ordine',
	'OTHER'					=> 'Altul',

	'POST_IP'				=> 'Scris de la IP/domeniu',

	'REAL_NAME'				=> 'Numele recipientului',
	'RECIPIENT'				=> 'Recipient',
	'REMOVE_FOE'			=> 'Şterge persoană neagreată',
	'REMOVE_FRIEND'			=> 'Şterge prieten',

	'SELECT_MARKED'			=> 'Selectează marcările',
	'SELECT_SORT_METHOD'	=> 'Selectează metoda de sortare',
	'SENDER_EMAIL_ADDRESS'	=> 'Adresa dumneavoastră de email',
	'SENDER_NAME'			=> 'Numele dumneavoastră',
	'SEND_ICQ_MESSAGE'		=> 'Trimite mesaj ICQ',
	'SEND_IM'				=> 'Mesagerie instant',
	'SEND_JABBER_MESSAGE'	=> 'Trimite mesaj Jabber',
	'SEND_MESSAGE'			=> 'Mesaj',
	'SEND_YIM_MESSAGE'		=> 'Trimite mesaj YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Ultima oară activ',
	'SORT_POST_COUNT'		=> 'Mesaje',

	'USERNAME_BEGINS_WITH'	=> 'Numele de utilizator începe cu',
	'USER_ADMIN'			=> 'Administrare utilizator',
	'USER_BAN'           	=> 'Interziceri',
	'USER_FORUM'			=> 'Statistici utilizator',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nicio notificare de trimis',
		1		=> '%1$d notificare trimisă<br />» %2$s',
        2		=> '%1$d notificări trimise<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Conectat',
	'USER_PRESENCE'			=> 'Prezenţa forumului',
	'USERS_PER_PAGE'		=> 'Utilizatori pe pagină',
	
	'VIEWING_PROFILE'		=> 'Vizualizare profil - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Vizualizare profil Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Vizualizare profil Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Vizualizare profil Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Vizualizare canal YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Vizualizare profil Google+',
));
