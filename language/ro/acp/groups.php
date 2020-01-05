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
    'ACP_GROUPS_MANAGE_EXPLAIN'        => 'Din acest panou puteţi administra toate grupurile. Puteţi şterge, crea şi modifica grupurile existente. Mai mult, puteţi alege liderii de grup, puteţi schimba starea grupului în deschis/ascuns/închis şi puteţi specifica numele şi descrierea grupului.',
    'ADD_GROUP_CATEGORY'			   => 'Adaugă categorie',
	'ADD_USERS'                        => 'Adăugare utilizatori',
    'ADD_USERS_EXPLAIN'                => 'Aici puteţi adăuga grupului utilizatori noi. Puteţi alege dacă acest grup este cel standard pentru utilizatorii selectaţi. În plus, îi puteţi defini ca lideri ai grupului. Va rugăm să scrieţi un utilizator pe fiecare linie.',

    'COPY_PERMISSIONS'                => 'Copiaţi permisiunile de la',
    'COPY_PERMISSIONS_EXPLAIN'        => 'Odată creat, grupul va avea aceleaşi permisiuni ca şi cele pe care le-ţi specificat aici.',
    'CREATE_GROUP'                    => 'Crează un grup nou',

    'GROUPS_NO_MEMBERS'                => 'Acest grup nu are membri',
    'GROUPS_NO_MODS'                   => 'Acest grup nu are niciun lider definit',
    
    'GROUP_APPROVE'                   => 'Aprobă membru',
    'GROUP_APPROVED'                  => 'Membri aprobaţi',
    'GROUP_AVATAR'                    => 'Imaginea grupului',
    'GROUP_AVATAR_EXPLAIN'            => 'Aceasta imagine va fi arătată in Panoul de control al grupului',
    'GROUP_CATEGORY_NAME'			  => 'Nume categorie',
	'GROUP_CLOSED'                    => 'Închis',
    'GROUP_COLOR'                    => 'Culoarea grupului',
    'GROUP_COLOR_EXPLAIN'            => 'Definţi culoarea numelui membrilor care va fi arătată, lăsaţi liber pentru setarea implicită.',
    'GROUP_CONFIRM_ADD_USERS'		 => array(
		1	=> 'Sunteţi sigur că vreţi să adaugaţi utilizatorul %2$s la grup?',
		2	=> 'Sunteţi sigur că vreţi să adaugaţi utilizatorii %2$s la grup?',
	),
    'GROUP_CREATED'                    => 'Grupul a fost creat cu succes',
    'GROUP_DEFAULT'                    => 'Specifică acest grup ca implicit pentru cei selectați',
    'GROUP_DEFS_UPDATED'               => 'Acest grup a fost specificat ca fiind implicit pentru membrii selectaţi',
    'GROUP_DELETE'                     => 'Înlătură membrul din grup',
    'GROUP_DELETED'                    => 'Grupul a fost şters iar membrilor li s-a alocat grupul implicit.',
    'GROUP_DEMOTE'                     => 'Retrage liderul grupului',
    'GROUP_DESC'                       => 'Descrierea grupului',
    'GROUP_DETAILS'                    => 'Detaliile grupului',
    'GROUP_EDIT_EXPLAIN'               => 'Aici puteţi modifica un grup existent. Îi puteţi schimba numele, descrierea şi tipul (deschis, închis, etc.). De asemenea, puteţi specifica anumite opţiuni pentru toate grupurile ca de exemplu culoarea, rangul, etc. Schimbările făcute aici suprascriu setările curente ale utilizatorilor. Reţineţi că membrii grupului îşi pot modifica imaginea dacă nu cumva aţi specificat membrilor permisiuni potrivite.',
    'GROUP_ERR_USERS_EXIST'            => 'Utilizatori specificaţi sunt deja membri ai acestui grup',
    'GROUP_FOUNDER_MANAGE'             => 'Doar fondatorul administrează',
    'GROUP_FOUNDER_MANAGE_EXPLAIN'     => 'Panoul de administrare al acestui grupului este doar pentru fondatori. Utilizatorii cu drepturi de grup pot în continuare să vadă acest grup la fel ca şi membrii grupului',
    'GROUP_HIDDEN'                     => 'Ascuns',
    'GROUP_LANG'                       => 'Limba grupului',
    'GROUP_LEAD'                       => 'Liderii grupului',
    'GROUP_LEADERS_ADDED'              => 'Noii lideri au fost adăugaţi cu succes.',
    'GROUP_LEGEND'                     => 'Arată grupul în legendă',
    'GROUP_LIST'                       => 'Membrii actuali',
    'GROUP_LIST_EXPLAIN'               => 'Aceasta este o lista completă cu toţi utilizatorii care fac parte din grup. Puteţi şterge (în afară de grupurile speciale) sau adăuga membri după caz.',
    'GROUP_MEMBERS'                    => 'Membrii grupului',
    'GROUP_MEMBERS_EXPLAIN'            => 'Aceasta este o lista completă cu toţi utilizatorii care fac parte din grup. Include secţiuni separate pentru lideri, pentru membrii în aşteptare şi cei curenţi. De aici puteţi administra legate de apartenenţa membrilor la acest grup şi la rolul acestora. Pentru a înlătura un lider dar pentru a-l păstra în grup folosiţi opţiunea Retrage lider mai degrabă decât Şterge. Similar, folosiţi opţiunea Promovează pentru a specifica un membru existent ca şi lider.',
    'GROUP_MESSAGE_LIMIT'              => 'Limita pe director a mesajelor private ale grupului ',
    'GROUP_MESSAGE_LIMIT_EXPLAIN'      => 'Această opţiune suprascrie limita pe director a mesajelor pentru fiecare utilizator. Valoarea 0 înseamnă că va fi folosită limita implicită specificată pentru utilizator.',
    'GROUP_MODS_ADDED'                 => 'Noii lideri ai grupului au fost adăugaţi cu succes.',
    'GROUP_MODS_DEMOTED'               => 'Liderii grupului au fost scoşi cu succes.',
    'GROUP_MODS_PROMOTED'              => 'Membrii grupului au fost promovaţi cu succes',
    'GROUP_NAME'                       => 'Numele grupului',
    'GROUP_NAME_TAKEN'                 => 'Numele grupului introdus este deja folosit, specificaţi altul.',
    'GROUP_OPEN'                       => 'Deschis',
    'GROUP_PENDING'                    => 'Lista de aşteptare a membrilor',
    'GROUP_MAX_RECIPIENTS'             => 'Numărul maxim al destinatarilor permişi într-un mesaj privat',
    'GROUP_MAX_RECIPIENTS_EXPLAIN'     => 'Numărul maxim al destinatarilor permişi într-un mesaj privat. Dacă este specificat 0, atunci este folosită setarea globală a forumului.',
    'GROUP_OPTIONS_SAVE'			   => 'Opţiuni extinse pentru grup',
    'GROUP_PROMOTE'                    => 'Promovează ca lider al grupului',
    'GROUP_RANK'                       => 'Rangul grupului',
    'GROUP_RECEIVE_PM'                 => 'Grupul poate să primească mesaje private',
    'GROUP_RECEIVE_PM_EXPLAIN'         => 'Reţineţi că nu se pot trimite mesaje private grupurilor ascunse, indiferent de această setare.',
    'GROUP_REQUEST'                    => 'Cere',
    'GROUP_SETTINGS_SAVE'              => 'Setările generale ale grupului',
    'GROUP_SKIP_AUTH'				   => 'Exclude liderul grupului din permisiuni',
	'GROUP_SKIP_AUTH_EXPLAIN'		   => 'Dacă este activată, liderul grupului nu va mai fi moştenit din permisiunile grupului.',
    'GROUP_SPECIAL'					   => 'Predefinit',
	'GROUP_TEAMPAGE'				   => 'Afișează grupul în pagina echipei',
	'GROUP_TYPE'                       => 'Tipul grupului',
    'GROUP_TYPE_EXPLAIN'               => 'Această permisiune determină care utilizatori pot să adere sau să vadă grupul.',
    'GROUP_UPDATED'                    => 'Preferinţele grupului au fost actualizate cu succes.',
    
    'GROUP_USERS_ADDED'                => 'Noi utilizatori au fost adăugaţi cu succes în grup.',
    'GROUP_USERS_EXIST'                => 'Utilizatorii selectaţi sunt deja membri.',
    'GROUP_USERS_REMOVE'               => 'Utilizatorii au fost scoşi cu succes din grup şi valorile implicite setate.',
	'GROUP_USERS_INVALID'			=> 'en No users were added to the group as the following usernames do not exist: %s',

    'LEGEND_EXPLAIN'				   => 'Acestea sunt grupurile care vor fi afișate în legenda grupurilor:',
	'LEGEND_SETTINGS'				   => 'Setări legendă',
	'LEGEND_SORT_GROUPNAME'			   => 'Sortare legendă în funcție de numele grupurilor',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	   => 'Ordinea de mai jos eeste ignorată când această opțiune este activată.',

	'MANAGE_LEGEND'			=> 'Administrare legendă grup',
	'MANAGE_TEAMPAGE'		=> 'Administrare pagina echipaei',
	'MAKE_DEFAULT_FOR_ALL'  => 'Specificaţi acest grup implicit pentru fiecare membru',
    'MEMBERS'               => 'Membri',

    'NO_GROUP'                    => 'Niciun grup specificat.',
    'NO_GROUPS_ADDED'			  => 'Încă nu au fost adăugate grupuri.',
	'NO_GROUPS_CREATED'           => 'Niciun grup creat pană acum.',
    'NO_PERMISSIONS'              => 'Nu copiază permisiuniile',
    'NO_USERS'                    => 'Nu aţi specificat niciun utilizator.',
    'NO_USERS_ADDED'			  => 'Niciun utilizator nu a fost adăugat la grup.',
    'NO_VALID_USERS'              => 'Nu aţi specificat niciun utilizator eligibil pentru acţiunea respectivă.',

	'PENDING_MEMBERS'			=> 'en Pending',

    'SELECT_GROUP'				=> 'Selectați un grup',
	'SPECIAL_GROUPS'            => 'Grupuri predefinite',
    'SPECIAL_GROUPS_EXPLAIN'    => 'Grupurile predefinite sunt grupuri speciale, ele nu pot fi şterse sau modificate direct. Puteţi adăuga utilizatori sau să modificaţi setările de bază.',

    'TEAMPAGE'					=> 'Pagina echipei',
	'TEAMPAGE_DISP_ALL'			=> 'Toți membrii',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Numai grupul implicit al utilizatorului',
	'TEAMPAGE_DISP_FIRST'		=> 'Numai primul membru',
	'TEAMPAGE_EXPLAIN'			=> 'Acestea sunt grupurile care sunt afișate pe pagina echipei:',
	'TEAMPAGE_FORUMS'			=> 'Afișează forumurile moderate',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Dacă este setat pe da, moderatorii vor avea o listă cu toate forumurile unde au permisiuni de moderator afișate în dreptul lor. Acest lucru poate determina utilizarea intensivă bazei de date pentru forumuri mari.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Afișare membri',
	'TEAMPAGE_SETTINGS'			=> 'Setări pagina echipei',
	'TOTAL_MEMBERS'             => 'Membri',

    'USERS_APPROVED'                => 'Utilizatorii au fost aprobaţi cu succes.',
    'USER_DEFAULT'                  => 'Utilizator implicit',
    'USER_DEF_GROUPS'               => 'Grupurile definite ale utilizatorilor',
    'USER_DEF_GROUPS_EXPLAIN'       => 'Aceste grupuri sunt create de dumneavoastră sau de către alţi administratori. Puteţi administra aderările, modifica proprietăţile grupului sau chiar şterge grupul.',
    'USER_GROUP_DEFAULT'            => 'Setează ca şi grup implicit',
    'USER_GROUP_DEFAULT_EXPLAIN'    => 'Alegând Da aici va desemna grupul selectat să fie implicit pentru utilizatorii adăugaţi',
    'USER_GROUP_LEADER'             => 'Setează ca şi lider al grupului',
));
