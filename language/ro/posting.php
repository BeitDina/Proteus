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
	'ADD_ATTACHMENT'			=> 'Încarcă fişiere',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Dacă doriţi să ataşaţi unul sau mai multe fişiere, introduceţi detaliile mai jos.',
	'ADD_FILE'					=> 'Adaugă fişierul',
	'ADD_POLL'					=> 'Creare chestionar',
	'ADD_POLL_EXPLAIN'			=> 'Dacă nu vreţi să adaugaţi un chestionar subiectului, lăsaţi câmpurile necompletate.',
	'ALREADY_DELETED'			=> 'Ne pare rău, dar acest mesaj este deja şters.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'en The attachment comment contains forbidden characters (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Nu este spațiu disponibil suficient pentru a publica acest fișier atașat.',
	'ATTACH_QUOTA_REACHED'		=> 'Ne pare rău, cota fişierelor ataşate a fost atinsă.',
	'ATTACH_SIG'				=> 'Ataşează o semnătură (semnăturile pot fi modificate din Panoul utilizatorului)',

	'BBCODE_A_HELP'				=> 'Încarcă un fişier în linie: [attachment=]numefişier.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Text bold: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Afişează cod: [code]cod[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Mărime font: [size=85]text mic[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s este <em>DEZACTIVAT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s este <em>ACTIVAT</em>',
	'BBCODE_I_HELP'				=> 'Text italic: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Listă: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listează articolele: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Listă ordonată: [list=1][*]Primul punct[/list] sau [list=a][*]Punctul a[/list]',
	'BBCODE_P_HELP'				=> 'Adaugă imagine: [img]http://cale_imagine[/img]',
	'BBCODE_Q_HELP'				=> 'Citează text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Culoare font: [color=red]text[/color]  Sfat: de asemenea puteţi folosi culorile hexazecimale culoare=#FF0000',
	'BBCODE_U_HELP'				=> 'Text subliniat: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Adaugă URL: [url]http://url[/url] sau [url=http://url]text URL[/url]',
	'BBCODE_Y_HELP'				=> 'Listă: Adaugă element de listă',
	'BUMP_ERROR'				=> 'Nu puteţi readuce subiectul acesta în atenţie atât de curând de la ultimul mesaj.',

	'CANNOT_DELETE_REPLIED'		=> 'Ne pare rău, dar puteţi şterge numai mesajele la care nu s-a răspuns.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Acest mesaj a fost închis. Nu mai puteţi modifica mesajul.',
	'CANNOT_EDIT_TIME'			=> 'Nu mai puteţi modifica sau şterge mesajul',
	'CANNOT_POST_ANNOUNCE'		=> 'Ne pare rău, dar nu puteţi crea anunţuri.',
	'CANNOT_POST_STICKY'		=> 'Ne pare rău, dar nu puteţi crea subiecte importante.',
	'CHANGE_TOPIC_TO'			=> 'Schimbaţi tipul subiectului în',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Mesajul dumneavoastră conține %1$d caracter.',
		2	=> 'Mesajul dumneavoastră conține %1$d caractere.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Semnatura dumneavoastră conține %1$d caracter.',
		2	=> 'Semnatura dumneavoastră conține %1$d caractere.',
	),
	'CLOSE_TAGS'				=> 'Închide taguri',
	'CURRENT_TOPIC'				=> 'Subiectul curent',

	'DELETE_FILE'				=> 'Şterge fişier',
	'DELETE_MESSAGE'			=> 'Şterge mesaj',
	'DELETE_MESSAGE_CONFIRM'	=> 'Sunteţi sigur că vreţi să ştergeţi acest mesaj?',
	'DELETE_OWN_POSTS'			=> 'Ne pare rău, dar puteţi şterge doar propriile mesaje.',
	'DELETE_PERMANENTLY'		=> 'Ștergere definitivă',
	'DELETE_POST_CONFIRM'		=> 'Sunteţi sigur că vreţi să ştergeţi acest mesaj?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Sunteţi sigur că vreţi să ştergeţi <strong>definitiv</strong> acest mesaj?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Ștergere definitivă a acestui mesaj nu va putea fi restaurată',
		2	=> 'Ștergere definitivă %1$d mesaje nu vor putea fi restaurate',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Sunteţi sigur că vreţi să ştergeţi aceste mesaje?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Sunteţi sigur că vreţi să ştergeţi <strong>definitiv</strong> aceste mesaje?',
	'DELETE_REASON'				=> 'Motivul ștergerii',
	'DELETE_REASON_EXPLAIN'		=> 'Motivul specificat pentru ștergere va fi vizibil pentru moderatori.',
	'DELETE_POST_WARN'			=> 'Odată şters, mesajul nu mai poate fi recuperat',
	'DELETE_TOPIC_CONFIRM'		=> 'Sunteţi sigur că vreţi să ştergeţi acest subiect?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Ștergere definitivă a acestui subiect nu va putea fi restaurată',
		2	=> 'Ștergere definitivă %1$d subiecte nu vor putea fi restaurate',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Sunteţi sigur că vreţi să ştergeţi <strong>definitiv</strong> acest subiect?',
	'DELETE_TOPICS_CONFIRM'		=> 'Sunteţi sigur că vreţi să ştergeţi aceste subiecte?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Sunteţi sigur că vreţi să ştergeţi <strong>definitiv</strong> aceste subiecte?',
	'DISABLE_BBCODE'			=> 'Dezactivează CodulBB',
	'DISABLE_MAGIC_URL'			=> 'Nu analiza automat legăturile',
	'DISABLE_SMILIES'			=> 'Dezactivează zâmbetele',
	'DISALLOWED_CONTENT'      => 'Publicarea a fost respinsă deoarece fişierul publicat a fost identificat ca un posibil vector de atac.',
	'DISALLOWED_EXTENSION'		=> 'Extensia %s nu este permisă.',
	'DRAFT_LOADED'				=> 'Mesaj în lucru încărcat, poate veţi dori să finalizaţi mesajul acum.<br />Mesajul dumneavoastră în lucru va fi şters după ce veţi trimite acest mesaj.',
	'DRAFT_LOADED_PM'			=> 'Mesaj în lucru încărcat, poate veţi dori să finalizaţi mesajul privat acum.<br />Mesajul dumneavoastră în lucru va fi şters după ce veţi trimite acest mesaj privat.',
	'DRAFT_SAVED'				=> 'Mesajul în lucru a fost salvat cu succes.',
	'DRAFT_TITLE'				=> 'Titlu mesaj în lucru',

	'EDIT_REASON'				=> 'Motiv pentru modificarea acestui mesaj',
	'EMPTY_FILEUPLOAD'			=> 'Fişierul încărcat este gol.',
	'EMPTY_MESSAGE'				=> 'Trebuie să introduceţi un mesaj când scrieţi.',
	'EMPTY_REMOTE_DATA'			=> 'Fişierul nu a putut fi încărcat, vă rugăm să încercaţi să îl încărcaţi manual.',

	'FLASH_IS_OFF'				=> '[flash] este <em>DEZACTIVAT</em>',
	'FLASH_IS_ON'				=> '[flash] este <em>ACTIVAT</em>',
	'FLOOD_ERROR'				=> 'Nu puteţi scrie alt mesaj atât de curând după anteriorul.',
	'FONT_COLOR'				=> 'Culoare font',
	'FONT_COLOR_HIDE'			=> 'Ascunde culoarea fontului',
	'FONT_HUGE'					=> 'Imens',
	'FONT_LARGE'				=> 'Mare',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Dimensiune font',
	'FONT_SMALL'				=> 'Mic',
	'FONT_TINY'					=> 'Micuţ',

	'GENERAL_UPLOAD_ERROR'		=> 'Nu s-a putut încărca fişierul ataşat în %s.',

	'IMAGES_ARE_OFF'			=> '[img] este <em>DEZACTIVAT</em>',
	'IMAGES_ARE_ON'				=> '[img] este <em>ACTIVAT</em>',
	'INVALID_FILENAME'			=> '%s este un nume invalid de fişier.',

	'LOAD'						=> 'Încarcă',
	'LOAD_DRAFT'				=> 'Încarcă mesaj în lucru',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aici puteţi selecta mesajul în lucru pe care veţi continua să-l compuneţi. Mesajul curent va fi anulat, tot conţinutul mesajelor curente va fi şters. Vizualizaţi, modificaţi şi ştergeţi mesajele în lucru din Panoul utilizatorului.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Trebuie să vă autentificaţi pentru a putea aduce în atenţie subiectele din acest forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Trebuie să vă autentificaţi pentru a putea şterge mesajele din acest forum.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'en You need to login in order to soft-delete posts within this forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Trebuie să vă autentificaţi pentru a putea scrie în acest forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Trebuie să vă autentificaţi pentru a putea cita mesajele din acest forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Trebuie să vă autentificaţi pentru a putea răspunde în subiectele din acest forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Poţi folosi fonturile doar până la marimea de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Fişierul dumneavostră flash poate avea înălțimea de maxim %d pixeli.',
		2	=> 'Fişierele dumneavostră flash pot avea înălțimea de maxim %d pixeli.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Fişierul dumneavostră flash poate avea lăţimea de maxim %d pixeli.',
		2	=> 'Fişierele dumneavostră flash pot avea lăţimea de maxim %d pixeli.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Imaginea dumneavoastră poate fi până la %1$d pixeli înălțime.',
		2	=> 'Imaginile dumneavoastră pot fi până la %1$d pixeli înălțime.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Imaginea dumneavoastră poate fi până la %d pixeli lățime.',
		2	=> 'Imaginile dumneavoastră pot fi până la %d pixeli lățime.',
	),	

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Introduceți mesajul dumneavoastră aici, el trebuie să conțină nu mai mult de <strong>%d</strong> caractere.',
		2	=> 'Introduceți mesajele dumneavoastră aici, ele trebuie să conțină nu mai mult de <strong>%d</strong> caractere.',
	),
	'MESSAGE_DELETED'			=> 'Acest mesaj a fost şters cu succes.',
	'MORE_SMILIES'				=> 'Vezi mai multe zâmbete',

	'NOTIFY_REPLY'				=> 'Notifică-mă când este scris un răspuns',
	'NOT_UPLOADED'				=> 'Fişierul nu a putut fi încărcat.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nu puteţi şterge opţiunile existente ale chestionarului.',
	'NO_PM_ICON'				=> 'Nicio iconiţă MP',
	'NO_POLL_TITLE'				=> 'Trebuie să introduceţi un titlu chestionarului.',
	'NO_POST'					=> 'Mesajul cerut nu există.',
	'NO_POST_MODE'				=> 'Niciun mod de scriere nu a fost specificat.',
	'NO_TEMP_DIR'				=> 'en Temporary folder could not be found or is not writable.',

	'PARTIAL_UPLOAD'			=> 'Fişierul încărcat a fost încărcat doar parţial.',
	'PHP_UPLOAD_STOPPED'		=> 'en A PHP extension has stopped the file upload.',
	'PHP_SIZE_NA'				=> 'Mărimea fişierelor ataşate este prea mare.<br />Nu s-a putut determina mărimea maximă definită de PHP în php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Mărimea fişierelor ataşate este prea mare, mărimea maximă a fişierelor de încărcare este de %1$d %2$s.<br />Rețineți că mărimea este setată în php.ini şi nu poate fi suprascrisă.',
	'PLACE_INLINE'				=> 'Aşează în linie',
	'POLL_DELETE'				=> 'Şterge chestionar',
	'POLL_FOR'					=> 'Porneşte chestionar pentru',
	'POLL_FOR_EXPLAIN'			=> 'Introduceţi valoarea 0 sau lăsaţi gol pentru un timp nelimitat al chestionarului.',
	'POLL_MAX_OPTIONS'			=> 'Opţiuni per utilizator',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Acesta este numărul opţiunilor pe care fiecare utilizator le poate selecta când votează.',
	'POLL_OPTIONS'				=> 'Opţiuni chestionar',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Plasați fiecare opțiune pe o nouă linie. Puteți introduce <strong>%d</strong> opțiune.',
		2	=> 'Plasați fiecare opțiune pe o nouă linie. Puteți introduce <strong>%d</strong> opțiuni.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Plasați fiecare opțiune pe o nouă linie. Puteți introduce <strong>%d</strong> opțiune. Dacă ștergeți sau adăugați opțiuni, toate voturile anterioare vor fi resetate.',
		2	=> 'Plasați fiecare opțiune pe o nouă linie. Puteți introduce <strong>%d</strong> opțiuni. Dacă ștergeți sau adăugați opțiuni, toate voturile anterioare vor fi resetate.',
	),
	'POLL_QUESTION'				=> 'Întrebări chestionar',
	'POLL_TITLE_TOO_LONG'		=> 'Titlul chestionarului trebuie să conţină mai puţin de 100 caractere.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Dimensiunea titlului chestionarului este prea mare, luați în considerare eliminarea codurilor BB sau a zâmbetelor.',
	'POLL_VOTE_CHANGE'			=> 'Permite revotarea',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Dacă este activat, utilizatorii pot să îşi schimbe votul.',
	'POSTED_ATTACHMENTS'		=> 'Fişiere ataşate publicate',
	'POST_APPROVAL_NOTIFY'		=> ' Acum veţi fi notificat când mesajul dumneavostră va fi aprobat.',
	'POST_CONFIRMATION'			=> 'Confirmarea mesajului',
	'POST_CONFIRM_EXPLAIN'		=> 'Pentru a preveni mesajele automate, administratorul forumului cere introducerea unui cod de confirmare. Codul este afişat în imaginea pe care o puteţi vedea mai jos. Dacă aveţi probleme cu vizualizarea acestuia sau nu puteţi citi codul din alte motive, vă rugăm să contactaţi %sAdministratorul forumului%s.',
	'POST_DELETED'				=> 'Acest mesaj a fost şters cu succes.',
	'POST_EDITED'				=> 'Acest mesaj a fost modificat cu succes.',
	'POST_EDITED_MOD'			=> 'Acest mesaj a fost modificat cu succes, dar necesită aprobarea unui moderator înainte de a fi vizibil public.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Iconiţă mesaj',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revizuire mesaj',
	'POST_REVIEW_EDIT'			=> 'Revizuire mesaj',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Acest mesaj a fost modificat de un alt utilizator în timp ce l-aţi revizuit. Poate doriţi să vă revizuiţi versiunea curentă a acestui mesaj şi să vă reconsideraţi completările.',
	'POST_REVIEW_EXPLAIN'		=> 'Cel puţin un mesaj nou a fost scris în acest subiect. Poate doriţi să vă revizuiţi mesajul.',
	'POST_STORED'				=> 'Acest mesaj a fost trimis cu succes.',
	'POST_STORED_MOD'			=> 'Acest mesaj a fost trimis cu succes, dar necesită aprobarea unui moderator înainte de a fi făcut public.',
	'POST_TOPIC_AS'				=> 'Afişează subiectul ca',
	'PROGRESS_BAR'				=> 'Bară progres',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Puteţi să introduceţi numai %d citat.',
		2	=> 'Puteţi să introduceţi numai %d citate.',
	),
	'QUOTE_NO_NESTING'			=> 'Nu puteți introduce citate.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Fișierul specificat nu poate fi încărcat datorită întreruperii solicitării.',
	'SAVE'						=> 'Salvează',
	'SAVE_DATE'					=> 'Salvat la',
	'SAVE_DRAFT'				=> 'Salvează mesajul în lucru',
	'SAVE_DRAFT_CONFIRM'		=> 'Atenţie că mesajele în lucru salvate au incluse doar subiectul şi mesajul, orice alt element fiind eliminat. Vreţi să salvaţi mesajul în lucru acum?',
	'SMILIES'					=> 'Zâmbete',
	'SMILIES_ARE_OFF'			=> 'Zâmbetele sunt <em>DEZACTIVATE</em>',
	'SMILIES_ARE_ON'			=> 'Zâmbetele sunt <em>ACTIVATE</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Timpul limitat pentru subiect Important/Anunţ',
	'STICK_TOPIC_FOR'			=> 'Subiect important pentru',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Introduceţi valoarea 0 sau lăsaţi gol pentru timp nelimitat la subiecte Important/Anunţ. Reţineţi că acest număr este relativ la data publicării.',
	'STYLES_TIP'				=> 'Sfat: Stilurile pot fi aplicate rapid textului selectat.',

	'TOO_FEW_CHARS'				=> 'Mesajul propriu conţine foarte puţine caractere.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Trebuie să introduceți cel puțin %1$d caracter.',
		2	=> 'Trebuie să introduceți cel puțin %1$d caractere.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Trebuie să introduceţi cel puţin două opţiuni în chestionar.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nu puteţi adăuga alt fişier ataşat, %d este maxim.',
	'TOO_MANY_CHARS'			=> 'Mesajul dumneavostră conţine prea multe caractere.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Numărul maxim de caractere permise este %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Aţi încercat să introduceţi prea multe opţiuni în chestionar.',
	'TOO_MANY_SMILIES'			=> 'Mesajul dumneavostră conţine prea multe zâmbete. Numărul maxim de zâmbete permis este de %d.',
	'TOO_MANY_URLS'				=> 'Mesajul dumneavostră conţine prea multe URL-uri. Numărul maxim de URL-uri permis este de %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nu puteţi specifica mai multe opţiuni per utilizator decât opţiunile existente în chestionar.',
	'TOPIC_BUMPED'				=> 'Subiectul a fost adus în atenţie cu succes.',

	'UNAUTHORISED_BBCODE'		=> 'Nu puteţi folosi anumite coduriBB: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Mesajul dumneavoastră conține următorul caracter nepermis:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Mesajul dumneavoastră conține următoarele caractere nepermise:<br />%s',
	'UPDATE_COMMENT'			=> 'Comentariu actualizat',
	'URL_INVALID'				=> 'URL-ul specificat este invalid.',
	'URL_NOT_FOUND'				=> 'Fişierul specificat nu poate fi găsit.',
	'URL_IS_OFF'				=> '[url] este <em>DEZACTIVAT</em>',
	'URL_IS_ON'					=> '[url] este <em>ACTIVAT</em>',
	'USER_CANNOT_BUMP'			=> 'Nu puteţi aduce în atenţie subiectele în acest forum.',
	'USER_CANNOT_DELETE'		=> 'Nu puteţi şterge mesajele în acest forum.',
	'USER_CANNOT_EDIT'			=> 'Nu puteţi modifica mesajele în acest forum.',
	'USER_CANNOT_REPLY'			=> 'Nu puteţi răspunde în acest forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Nu puteţi să efectuaţi operaţiuni de scriere în acest forum pentru că tipul forumului nu suportă acest lucru.',

	'VIEW_MESSAGE'				=> '%sVizualizaţi mesajul propriu trimis%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVizualizaţi mesajul privat propriu trimis%s',

	'WRONG_FILESIZE'			=> 'Fişierul este prea mare, mărimea maximă permisă este %1$d %2$s.',
	'WRONG_SIZE'				=> 'Imaginea trebuie să fie de cel puţin %1$s pixeli lăţime, %2$s pixeli înălţime şi cel mult %3$s pixeli lăţime şi %4$s pixeli înălţime. Imaginea trimisă are lăţimea de %5$s pixeli şi înălţimea de %6$s pixeli.',
));
