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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER' => 'Fiecare forum poate sau nu să permită anumite tipuri de atașamente. Dacă nu sunteți sigur ce tipuri de fișiere pot fi încărcate, contactați Administrația pentru mai multe informații. ',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION' => 'Ce atașamente sunt permise pe acest forum?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER' => 'Pentru a găsi lista atașamentelor dvs., trebuie să accesați Panoul de control al utilizatorului și să faceți clic pe opțiunea "Organizează atașamente".',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION' => 'Cum găsesc toate atașamentele mele?',
	
	'HELP_FAQ_BLOCK_ATTACHMENTS' => 'Fișiere atașate',
	'HELP_FAQ_BLOCK_BOOKMARKS' => 'Abonamente și Preferințe',
	'HELP_FAQ_BLOCK_FORMATTING' => 'Formate și tipuri de subiecte',
	'HELP_FAQ_BLOCK_FRIENDS' => 'Prieteni și ignorați',
	'HELP_FAQ_BLOCK_GROUPS' => 'Niveluri și grupuri de utilizatori',
	'HELP_FAQ_BLOCK_ISSUES' => 'Despre phpBB',
	'HELP_FAQ_BLOCK_LOGIN' => 'Probleme legate de identificare și înregistrare',
	'HELP_FAQ_BLOCK_PMS' => 'Mesagerie privată',
	'HELP_FAQ_BLOCK_POSTING' => 'Livrare de mesaje',
	'HELP_FAQ_BLOCK_SEARCH' => 'Căutați pe forumuri',
	'HELP_FAQ_BLOCK_USERSETTINGS' => 'Preferințe și setări ale utilizatorului',
	
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER' => 'În phpBB 3.0, subiectele preferate au funcționat mult ca marcaje pentru browserul web. Nu ați fost alertat când a existat o actualizare. Începând cu phpBB 3.1, Preferințele seamănă mai mult cu abonarea la un subiect. Poți fi anunțat la actualizarea unui subiect preferat. Abonându-vă însă, veți fi anunțat că există o actualizare a unui subiect sau a unui forum în forumul propriu-zis. Opțiunile de notificare pentru Preferințe și abonamente pot fi setate în Panoul de control al utilizatorului, la „Preferințe forum”. ',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION' => 'Care este diferența dintre adăugarea ca favorit și abonarea la un subiect?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER' => 'Pentru a vă abona la un forum special, trebuie să faceți clic pe linkul „Abonați-vă pe forum”.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION' => 'Cum mă abonez la un forum specific?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER' => 'Pentru a vă șterge abonamentele, trebuie să accesați Panoul de control al utilizatorului și să faceți clic pe opțiunea "Organizează BBCODE".',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION' => 'Cum îmi șterg abonamentele?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER' => 'Puteți marca sau abona la un subiect specific, făcând clic pe linkul corespunzător din meniul „Instrumente pentru subiecte”, situat în partea de sus și de jos a unui subiect de discuție. <br /> Răspuns la o Subiectul cu opțiunea marcată „Notifica-mă când este trimis un răspuns” se abonează și la acel subiect. ',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION' => 'Cum poți marca sau abona la subiecte specifice?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER' => 'Anunțurile noastre conțin adesea informații importante despre lege care ar trebui citite și ar trebui citite de fiecare dată când este posibil. Anunțurile apar la începutul fiecărei pagini unde sunt publicate. Ca și în reclamele globale, autorizațiile pentru reclame sunt aprobate de administraţie. ',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION' => 'Ce sunt anunţurile?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBcode este o implementare HTML specială, oferă un control excelent în format al obiectelor particulare ale publicațiilor. Utilizarea BBCode trebuie să fie activată de către administrație, dar poate fi de asemenea dezactivată din formularul de livrare a mesajelor. BBCode este, de asemenea, similar în stil cu HTML, dar etichetele sunt închise între paranteze [ și ] în loc de &lt; şi &gt;. Pentru mai multe informații, citiți manualul BBCode. Linkul apare de fiecare dată când veți posta un mesaj.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Ce este codul BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Anunțurile globale conțin informații importante și ar trebui să le citiți ori de câte ori este posibil. Acestea vor apărea la începutul fiecărui forum și în Panoul de control al utilizatorului. Autorizațiile pentru anunțuri globale sunt acordate de către Administrație.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Ce sunt anunţurile globale?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nu. Nu este posibilă publicarea în HTML. Multe dintre formate și acțiuni care pot fi executate cu HTML pot fi aplicate utilizând BBCodes.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Pot folosi HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Sunt imagini alese de autorul subiectului pentru a indica conținutul aceluiași. Posibilitatea utilizării pictogramelor în mesaje depinde de permisiunile acordate de administrație.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Ce sunt pictogramele pentru temă?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER' => 'Da, imagini pot fi afișate în mesajele tale. Dacă administrația vă permite să atașați fișiere, puteți încărca imaginea direct pe forum. În caz contrar, mai întâi trebuie să salvați fotografia pe un server de acces public, de ex. http://www.ejemplo.com/mi-imagen.gif. Nu puteți publica imagini care sunt pe computerul dvs. (cu excepția cazului în care este un server de acces public) sau al celor care sunt stocate sub mecanisme de autentificare, de ex. hotmail sau mail mail, site-uri protejate prin parolă etc. Pentru a afișa imagini, utilizați BBCode cu eticheta [img]. ',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Pot publica imagini?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Subiecte închise sunt subiecte în care utilizatorii nu mai pot răspunde și sondajele conținute în acestea sunt încheiate automat. Subiectele pot fi închise din mai multe motive. Această decizie este luată de Administrație sau de un moderator. Poate vă puteți închide propriile subiecte în funcție de permisiunile acordate de administratori.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Ce sunt subiectele închise?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Emoticoane sunt imagini mici care pot fi folosite pentru a exprima un sentiment cu un cod mic, de ex. :) denotă fericire, în timp ce :( denotă tristețe. Lista completă de emoticoane poate fi văzută în formularul de publicare. Încercați să nu abuzați de utilizarea emoticoanelor, deoarece acestea pot face un mesaj foarte greu de citit și un moderator șterge subiectul sau emoticoane de mesaje Administrația poate seta o limită pentru numărul de emoticoane care vor fi utilizate într-un mesaj.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Ce sunt emoticoanele?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Subiecte lipicioase apar pe forumul de sub anunţuri și numai pe prima pagină. De multe ori sunt importante, așa că ar trebui să le citiți ori de câte ori este posibil. La fel ca în anunțurile și anunțurile globale, Administrația are permisiuni pentru a remedia un subiect.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Ce sunt subiectele lipicioase?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Puteți utiliza lista pentru a organiza alți utilizatori ai forumului. Utilizatorii adăugați la lista de prieteni pot fi văzuți în panoul de control al utilizatorului pentru acces rapid pentru a vedea dacă sunt identificați și astfel să le poată trimite un mesaj privat. În funcție de șablonul folosit de forum, mesajele acestor utilizatori pot fi afișate evidențiate. Dacă adăugați un utilizator la lista ignorați, toate mesajele dvs. vor fi ascunse.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Ce este lista de prieteni (amici) și ignorați (inamici)?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Puteți adăuga utilizatori la lista dvs. în două moduri. În fiecare profil de utilizator există un link pentru a-l adăuga la lista de prieteni și / sau ignorate. Puteți face, de asemenea, direct din Panoul de control al utilizatorului, introducând numele dvs. Puteți elimina utilizatorii din lista dvs. de pe aceeași pagină.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Cum puteți adăuga sau șterge utilizatori din lista de prieteni și ignorați?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratorii sunt utilizatorii alocați cu cel mai înalt nivel de control asupra întregului forum. Acești utilizatori pot controla toate acțiunile și configurațiile forumului, inclusiv setările de permisiuni, interzicerea utilizatorilor, crearea grupurilor de utilizatori și moderatorii etc. Acestea depind de fondatorul forumului și de permisiunile pe care le-a dat. De asemenea, au toate capacitățile de moderare din fiecare forum, în funcție de setările făcute de fondatorul site-ului.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION' => 'Ce sunt administratorii?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER' => 'Administrația forumului are posibilitatea de a atribui o culoare utilizatorilor unui grup pentru a le facilita identificarea.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION' => 'De ce apar anumite grupuri de utilizatori în culori diferite?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER' => 'Dacă sunteți membru al mai multor grupuri în mod implicit, „implicit” va fi utilizat pentru a determina ce culoare și interval vor fi afișate în mod implicit în profilul dvs. Administrația trebuie să vă ofere permisiuni pentru a vă schimba grupul implicit prin intermediul Panoului de control al utilizatorului. ',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION' => 'Ce este un "Grup de utilizatori implicit"?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER' => 'Moderatorii sunt persoane (sau grupuri de persoane) care se ocupă de forumul de zi cu zi. Au autoritatea de a edita sau șterge mesaje, de a le închide, de a le deschide, de a le muta, de a șterge și de a separa subiecte pe forumul pe care îl moderează. În general, moderatorii sunt prezenți pentru a împiedica utilizatorii să iasă din subiect sau să posteze spam și / sau conținut rău intenționat. ',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION' => 'Care sunt moderatorii?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER' => 'Această pagină vă oferă lista completă a utilizatorilor grupului, inclusiv administratorii, moderatorii și alte detalii, precum forumurile care sunt responsabile de moderarea fiecăruia.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION' => 'Care este legătura "Echipa"?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER' => 'Grupurile de utilizatori sunt seturi de utilizatori care împart comunitatea în sectoare gestionabile cu care pot lucra administratorii forumului. Fiecare utilizator poate aparține mai multor grupuri și fiecare grup poate avea permisiuni diferite. Acest lucru ajută administratorii să schimbe permisiunile multor utilizatori simultan, cum ar fi permisiunile de moderator sau să garanteze accesul la forumuri private pentru utilizatori. ',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER' => 'Puteți vedea toate grupurile de utilizatori prin linkul „Grupuri de utilizatori”. Dacă doriți să vă alăturați unui grup, puteți continua făcând clic pe butonul corespunzător. Nu toate grupurile au acces gratuit. Cu toate acestea, unii necesită aprobare pentru a se alătura, alții sunt închise, iar unele sunt ascunse. Dacă grupul este deschis, vă puteți alătura făcând clic pe butonul corespunzător. Dacă grupul necesită aprobare pentru a vă alătura, puteți solicita să vă alăturați făcând clic pe butonul corespunzător. Liderul grupului trebuie să aprobe solicitarea dvs. și vă va întreba cu siguranță de ce doriți să o faceți. Vă rugăm să nu vă deranjați în mod continuu Managerul de grup dacă respingeți solicitarea dvs.; sigur ai motivele tale. ',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION' => 'Unde sunt grupurile de utilizatori și cum pot să mă alătur acestora?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER' => 'Responsabilul unui grup este desemnat de către Administrație la crearea grupului. Dacă sunteți interesat să creați un grup de utilizatori, contactați Administrația. ',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION' => 'Cum pot deveni Manager de grup?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION' => 'Ce sunt grupurile de utilizatori?',
	
	'HELP_FAQ_ISSUES_ADMIN_ANSWER' => 'Toți utilizatorii forumului pot utiliza formularul „Contactați-ne”, dacă această opțiune a fost activată de administratorul forumului. <br /> Membrii forumului pot utiliza și linkul „Echipa”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION' => 'Cum pot contacta un administrator?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER' => 'Acest forum a fost scris și autorizat prin intermediul phpBB Limited. Dacă credeți că ar trebui adăugată o anumită caracteristică, vizitați <a href="https://www.phpbb.com/ideas/"> phpBB Ideas Center </a> (în engleză), unde puteți vota idei funcții existente sau sugerează noi. ',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION' => 'De ce acest forum nu are așa ceva?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER' => 'Fiecare dintre administratorii enumerați în grupul în care scrie „Echipa” este un contact adecvat pentru a vă trimite reclamațiile. Dacă nu primiți un răspuns, ar trebui să încercați să contactați proprietarul domeniului (faceți un <a href="http://www.google.com/search?q=whois"> whois search </a>) sau, dacă acest lucru este forum are mesaje despre un domeniu gratuit (Yahoo !, gmail.com, hotmail.com, etc.), către departamentul sau administrarea abuzurilor din acel serviciu. Rețineți că phpBB Limited <strong> nu are niciun tip de control </strong> și nu poate fi în niciun fel responsabil pentru modul în care, unde sau de cine este utilizat acest sistem forum. Nu are sens să contactați phpBB Limited în legătură cu probleme legale (defăimare, răspundere, denaturarea comentariilor etc.) care nu sunt în ceea ce privește site-ul phpbb.com sau la discreția software-ului phpBB. Dacă trimiteți un e-mail către phpBB Limited <strong> cu privire la utilizarea terților </strong> a acestui software, sunteți dispus să primiți un răspuns clar sau să primiți direct niciun răspuns. ',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION' => 'Cine poate fi contactat despre abuzuri sau utilizări ilegale legate de acest forum?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER' => 'Această aplicație (în forma sa originală) este dezvoltată, publicată și conține drepturi de autor aparținând <a href="https://www.phpbb.com/"> phpBB Limited </a>. Este realizat sub GNU (General Public License) versiunea 2 (GPL-2.0) și este distribuit liber. Consultați <a href="https://www.phpbb.com/about/"> Despre phpBB </a> pentru mai multe detalii. ',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION' => 'Cine a programat acest forum?',
	
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER' => 'Dacă nu activați caseta <em> Amintiți-vă </em> când intrați pe forum, datele dvs. sunt stocate într-un cookie securizat, care este șters când părăsiți pagina sau după un anumit timp. Acest lucru împiedică utilizarea contului dvs. de către o altă persoană. Pentru a fi recunoscut automat de sistem, nu trebuie decât să bifați caseta la intrare. Nu este recomandat dacă accesați forumul de pe un computer partajat, de ex. bibliotecă, cafenele informatice, computere universitare etc. Dacă nu vedeți caseta, înseamnă că administrația forumului a dezactivat opțiunea. ',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION' => 'De ce expiră automat sesiunea mea de utilizator?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER' => 'Există mai multe motive pentru care se poate întâmpla acest lucru. În primul rând, asigurați-vă că numele dvs. de utilizator și parola sunt ortografiate corect. Dacă există, contactați Administrația pentru a vă asigura că nu a fost exclusă. Este, de asemenea, posibil ca forumul să fie configurat prost de către proprietarul său și / sau să aibă defecte în programare, deci ar trebui să fie reparat. ',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER' => 'Este posibil ca administrația să dezactiveze sau să șteargă contul dvs. din anumite motive. De asemenea, unele forumuri își elimină periodic utilizatorii care nu au postat mesaje o anumită perioadă de timp pentru a reduce greutatea bazei de date. Dacă da, înregistrați-vă din nou și participați la discuții. ',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION' => 'În urmă cu ceva timp m-am înregistrat, dar acum nu mă pot conecta!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION' => 'De ce nu mă pot identifica?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER' => 'Administrația site-ului poate a interzis adresa dvs. IP sau numele de utilizator cu care încercați să vă înregistrați este dezactivat. Înregistrarea noilor utilizatori poate fi de asemenea dezactivată. Contactați Administrația site-ului. ',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION' => 'De ce nu mă pot înregistra?',
	"HELP_FAQ_LOGIN_COPPA_ANSWER" => 'COPPA, APPCO sau Legea privind protecția vieții private și protecția copiilor sub 13 ani din 1998, este o lege a Statelor Unite, în care se solicită site-uri de internet, care sunt potențiali colectori de informații. , ca fișa copilului să fie scrisă și ratificată cu acordul părinților sau cu o altă metodă de recunoaștere a gardei legale, care permite colectarea informațiilor personale identificabile ale unui minor. ',
	'HELP_FAQ_LOGIN_COPPA_QUESTION' => 'Ce este COPPA? (APPCO) ',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER' => '"Șterge cookie-urile" șterge cookie-urile create de phpBB, care vă păstrează autorizația de a accesa anumite resurse ale forumului și de a fi identificat la acesta. Cookie-urile oferă funcții precum citirea urmăririi de navigare pe forum de către utilizator dacă administrația a activat opțiunea. Dacă aveți probleme cu intrarea sau părăsirea forumului, ștergerea cookie-urilor vă va ajuta cu siguranță. ',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION' => 'Care este funcția „Șterge cookie-urile”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER' => 'Nu vă panicați, calmați-vă! Dacă parola dvs. nu poate fi recuperată, o puteți dezactiva sau modifica. Accesați pagina de conectare și faceți clic pe <em> Mi-am uitat parola </em>. Urmați instrucțiunile și veți fi identificați din nou în cel mai scurt timp. ',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION' => 'Mi-am pierdut parola!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER' => 'Nu trebuie să faceți acest lucru, decizia este luată de Administratori și Moderatori. În unele cazuri, va trebui să vă înregistrați pentru a posta subiecte și răspunsuri. Totuși, înregistrarea vă va oferi acces la conținut suplimentar și / sau avantaje de care nu v-ați bucura ca utilizator invitat, cum ar fi imaginea personalizată (avatar), mesaje private, abonament la grupuri de utilizatori etc. Va dura doar câteva secunde. Este foarte recomandat. ',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER' => 'În primul rând, verificați numele de utilizator și parola. Dacă totul este corect, există două motive posibile. Dacă sistemul de protecție a copilului (APPCO) este activat și când v-ați înregistrat, ați ales opțiunea <em> Am sub 13 ani </em> atunci va trebui să urmați câteva instrucțiuni care vor fi date pentru a activa contul. Unele forumuri prevăd că conturile trebuie activate, fie de către dumneavoastră, fie de către Administrație, înainte de a vă putea identifica; Aceste informații vor fi furnizate la sfârșitul procesului de înregistrare. Dacă vi s-a trimis un e-mail, urmați instrucțiunile. Dacă nu ați primit niciun e-mail, cu siguranță, adresa de e-mail pe care ați furnizat-o este incorectă sau poate a fost capturată de un filtru anti-spam. Dacă sunteți sigur că adresa de e-mail pe care ați furnizat-o este corectă, trimiteți un mesaj către Administrație. ',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION' => 'M-am înregistrat și nu mă pot identifica!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION' => 'De ce trebuie să mă înregistrez?',
	
	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER' => 'Există trei motive posibile; nu este înregistrat și / sau identificat, Administrația Forumului a dezactivat opțiunea de mesaje private pentru toți utilizatorii, sau Administrația a dezactivat pentru dvs. sau grupul de utilizatori opțiunea de a trimite mesaje. Pentru mai multe informații, contactați administrația. ',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION' => 'Nu pot trimite un mesaj privat!',
	'HELP_FAQ_PMS_SPAM_ANSWER' => 'Ne pare rău să auzim asta. Formularul de e-mail include identificatori pentru a controla cine a trimis astfel de mesaje, prin urmare, puteți contacta Administrația și le puteți trimite o copie completă a mesajului primit. Este foarte important să includeți antetul, deoarece conține datele utilizatorului care a trimis e-mailul. Administrația va lua măsuri. ',
	'HELP_FAQ_PMS_SPAM_QUESTION' => 'Am primit spam sau e-mailuri rău intenționate de la cineva de pe acest forum!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER' => 'Dacă primiți mesaje rău intenționate sau ofensatoare de la un anumit utilizator, îl puteți bloca astfel încât să nu vă poată trimite mesaje în opțiunile Panoului de control al utilizatorului, puteți utiliza butonul pentru a raporta sau raporta mesajele respective la moderatorii sau comunicați-o administrației. ',
	'HELP_FAQ_PMS_UNWANTED_QUESTION' => 'Primesc mesaje private nedorite!',
	
	'HELP_FAQ_POSTING_BUMP_ANSWER' => 'Puteți face acest lucru făcând clic pe linkul care spune „Reactivați subiectul” când îl vizualizați, puteți „reactiva” subiectul la începutul primei pagini. Cu toate acestea, dacă nu o vizualizați, atunci tema reactivată a fost dezactivată sau timpul de reactivare nu a fost încă atins. De asemenea, este posibil să reactivăm un subiect răspunzând la acesta, însă citiți regulile forumului înainte de a face acest lucru. ',
	'HELP_FAQ_POSTING_BUMP_QUESTION' => 'Cum pot reactiva un subiect?',
	'HELP_FAQ_POSTING_CREATE_ANSWER' => 'Pentru a publica un subiect nou, faceți clic pe "Subiect nou". Pentru a posta un răspuns la un subiect, faceți clic pe „Trimiteți răspuns”. Probabil că trebuie să vă înregistrați înainte de a putea posta și răspunde. Sub fiecare forum veți găsi o listă cu acțiunile permise. Exemplu: puteți posta subiecte noi, puteți vota în sondaje etc. ',
	'HELP_FAQ_POSTING_CREATE_QUESTION' => 'Cum pot crea un subiect nou sau trimite un răspuns?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER' => 'Acest lucru vă va permite să salvați schițele care vor fi completate și trimise ulterior. Pentru a reîncărca o schiță salvată, vizitați Panoul de control al utilizatorului. ',
	'HELP_FAQ_POSTING_DRAFT_QUESTION' => 'Care este butonul „Salvați” pentru postarea subiectului?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER' => 'Dacă nu sunteți administrator sau moderator, puteți șterge sau modifica doar mesajele proprii. Pentru a le edita trebuie să faceți clic pe butonul <em> edit </em> (uneori această opțiune este valabilă doar pentru o anumită perioadă de timp). Dacă cineva vă editează subiectul, veți găsi un text mic care să indice că acesta a fost modificat și de câte ori a fost modificat. Nu apare dacă a fost un moderator sau o administrație care a editat-o, deși editorul își lasă de cele mai multe ori numele de utilizator și cauza ediției. Utilizatorii normali nu vor putea să-și șteargă subiectele după ce cineva le-a răspuns. ',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION' => 'Cum puteți edita sau șterge un mesaj?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER' => 'Unele forumuri pot fi limitate pentru anumiți utilizatori sau grupuri și pentru a vizualiza, citi, publica sau a lua o altă acțiune acolo este nevoie de o autorizație specială. Contactați un moderator sau un administrator de forum pentru a primi permisiunea corespunzătoare. ',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION' => 'De ce nu poate fi accesat un forum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER' => 'Permisiunile de atașare a fișierelor sunt individuale pentru fiecare forum, grup, utilizator și sunt acordate de administrație. Poate că Administrația nu vă permite să atașați fișiere în forumul în care vă aflați sau doar anumite grupuri pot face acest lucru. Contactați administrația dacă nu sunteți sigur de ce nu puteți atașa fișiere. ',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION' => 'De ce nu puteți adăuga atașamente?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER' => 'Limita pentru opțiunile dintr-un sondaj este stabilită de administrație. Dacă trebuie să adăugați mai multe opțiuni la sondaj, contactați Administrația. ',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION' => 'De ce nu puteți adăuga mai multe opțiuni la sondaj?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER' => 'Când începeți un subiect nou sau editați primul mesaj al acestuia, trebuie să faceți clic pe fila „Adăugați o anchetă” de sub formularul de publicare; Dacă nu îl vedeți, înseamnă că nu aveți permisiunile corespunzătoare pentru a crea sondaje. Introduceți un titlu și cel puțin două opțiuni în câmpul corespunzător, asigurându-vă că fiecare opțiune se află pe linia corespunzătoare a formularului. Puteți alege, de asemenea, numărul de opțiuni pe care utilizatorul le poate selecta în fila „Opțiuni per utilizator”, termenul limită în zile pentru sondaj (0 pentru durată infinită) și în final opțiunea de a permite utilizatorilor să își schimbe voturile. ',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION' => 'Cum pot crea un sondaj?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER' => 'Ca și în mesaje, sondajele pot fi modificate numai de creatorul lor original, de un moderator sau de administrație. Pentru a edita un sondaj, trebuie să editați primul mesaj al subiectului; Acest lucru este întotdeauna asociat cu sondajul. Dacă nimeni nu a votat, utilizatorii pot șterge sondajul sau edita opțiunile. Cu toate acestea, dacă un membru a votat, numai moderatorii sau administratorii pot modifica sau șterge sondajul. Acest lucru împiedică schimbarea sondajelor la jumătatea votului. ',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION' => 'Cum pot edita sau șterge un sondaj?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER' => 'Administrația Forumului a decis că mesajele postate pe forum, în care încercați să postați mesaje, trebuie să fie revizuite înainte de a le aproba. De asemenea, este posibil ca Administrația să vă plaseze într-un grup de utilizatori ale căror mesaje trebuie revizuite înainte de a le aproba. Vă rugăm să contactați administratorul pentru mai multe informații. ',
	'HELP_FAQ_POSTING_QUEUE_QUESTION' => 'De ce mesajele mele trebuie să fie aprobate?',
	'HELP_FAQ_POSTING_REPORT_ANSWER' => 'Dacă Administrația o permite, ar trebui să vedeți un buton pentru a raporta mesajele în apropierea ei. Făcând clic pe buton, forumul vă va conduce și vă va ghida prin anumite etape necesare pentru a raporta mesajul. ',
	'HELP_FAQ_POSTING_REPORT_QUESTION' => 'Cum poate fi raportat un mesaj unui moderator?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER' => 'Pentru a adăuga o semnătură la mesajele tale, trebuie să o creezi în Panoul de control al utilizatorului. Odată creată, activați opțiunea <em> Adăugare semnătură </em> atunci când postați un mesaj. Puteți atribui o semnătură implicită tuturor mesajelor dvs. bifând caseta corectă din Panoul de control al utilizatorului. Pentru a opri adăugarea în mesaje, trebuie să dezactivați opțiunea <em> Adăugare semnătură </em> în profil. ',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION' => 'Cum puteți adăuga o semnătură la mesajul meu?',
	'HELP_FAQ_POSTING_WARNING_ANSWER' => 'Administratorii fiecărui forum au propriul set de reguli pentru site-ul lor. Dacă ați încălcat orice regulă, puteți primi un avertisment. Vă rugăm să rețineți că aceasta este o decizie a Administrației Forumului, iar phpBB Limited nu are nicio legătură cu avertismentele date pe acest site. Contactați Administrația Forumului dacă nu sunteți sigur de ce ați fost avertizat. ',
	'HELP_FAQ_POSTING_WARNING_QUESTION' => 'De ce am primit un avertisment?',
	
	'HELP_FAQ_SEARCH_BLANK_ANSWER' => 'Căutarea a returnat prea multe rezultate pentru a fi procesate de server. Utilizați „Căutare avansată” și fiți mai specific în termenii și forumurile căutării dvs. ',
	'HELP_FAQ_SEARCH_BLANK_QUESTION' => 'De ce îmi reda căutarea o pagină goală?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER' => 'Introducerea unui termen de căutare în câmpul corespunzător al motorului de căutare index, forum sau în subiecte. Puteți accesa căutări avansate făcând clic pe linkul „Căutare avansată” care este disponibil pe toate paginile forumului. Modul de accesare a căutării depinde de șablonul utilizat. ',
	'HELP_FAQ_SEARCH_FORUM_QUESTION' => 'Cum puteți căuta în unul sau mai multe forumuri?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER' => 'Faceți clic pe linkul „Utilizatori” și faceți clic pe linkul „Căutați un utilizator”.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION' => 'Cum pot căuta utilizatori?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER' => 'Probabil căutarea dvs. a fost foarte generală și include mulți termeni obișnuiți care nu sunt indexați de phpBB. Fiți mai specific și folosiți opțiunile disponibile în căutarea avansată. ',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION' => 'De ce căutarea mea nu dă rezultate?',
	'HELP_FAQ_SEARCH_OWN_ANSWER' => 'Puteți găsi mesajele dvs. făcând clic pe „Afișați mesajele dvs.” în Panoul de control al utilizatorului sau făcând clic pe linkul „Afișați mesajele dvs.” prin pagina proprie de profil sau făcând clic pe butonul Meniul „Linkuri rapide” din partea de sus a forumului. Pentru a căuta subiectele dvs., utilizați pagina de căutare avansată și completați opțiunile corespunzătoare. ',
	'HELP_FAQ_SEARCH_OWN_QUESTION' => 'Cum puteți găsi propriile mesaje și subiecte?',
	
	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER' => 'Există două imagini care pot apărea sub numele de utilizator la vizualizarea mesajelor. În funcție de șablonul folosit de forum, prima imagine este asociată cu poziția (rangul) utilizatorului, de obicei sub formă de stele, blocuri sau puncte, care indică numărul de mesaje postate de dvs. sau starea dvs. în cadrul forumului. A doua, de obicei o imagine mai mare, este cunoscută drept avatar și este, în general, unică sau personală pentru fiecare utilizator. ',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER' => 'Din panoul de control al utilizatorului, faceți clic pe „Profil” puteți adăuga un avatar folosind una dintre următoarele patru metode: Gravatar, Galerie, Remote sau Încărcare. Administrația este cea care decide dacă pot fi utilizate sau nu și în ce mărime și greutate pot fi publicate. În cazul în care opțiunea avatar nu este disponibilă, contactați Administrația pentru a o activa. ',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION' => 'Cum pot arăta un avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION' => 'Care este imaginea de lângă numele meu de utilizator?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER' => 'Dacă sunteți un utilizator înregistrat, toate datele și setările dvs. sunt arhivate în baza noastră de date. Pentru a le modifica, vizitați Panoul de control al utilizatorului; făcând clic pe numele dvs. de utilizator situat în partea de sus a paginilor forumului. Acest sistem vă va permite să vă schimbați datele și preferințele. ',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION' => 'Cum pot schimba setările mele?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER' => 'Doar utilizatorii înregistrați pot trimite e-mail către alți utilizatori prin intermediul forumului, dacă administrația permite opțiunea. Acest lucru este pentru a preveni folosirea de către utilizatori anonimi a sistemului de e-mail rău intenționat. ',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION' => 'Când dau clic pe linkul de e-mail al unui utilizator, el îmi cere să mă înregistrez!',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER' => 'Din panoul de control al utilizatorului dvs., în „Preferințe forum”, veți găsi opțiunea <em> Ascunde starea conexiunii mele </em>. Activați această opțiune și va fi văzută doar de Administratori, Moderatori și dvs. Veți fi socotit ca utilizator ascuns. ',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION' => 'Cum pot împiedica numele meu de utilizator să apară pe listele utilizatorilor conectați?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER' => 'Acest lucru se poate întâmpla din cauză că administrația nu a instalat pachetul de limbă pentru forum sau nimeni nu a creat o traducere. Întrebați un administrator dacă puteți instala pachetul lingvistic de care aveți nevoie. Dacă pachetul nu există, nu ezitați să faceți o traducere. Puteți găsi mai multe informații pe site-ul <a href="https://www.phpbb.com/"> phpBB </a> & reg; ',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION' => 'Limba mea nu este în listă!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER' => 'Intervalele apar sub numele de utilizator și indică numărul de postări ale utilizatorului sau poziția acestuia în cadrul forumului, de ex. moderatori și administratori. În general, nu vă puteți schimba rangul direct așa cum este stabilit de către administrație. Vă rugăm să nu abuzați de privilegiile dvs. de publicare doar pentru a vă crește rangul. Majoritatea forumurilor îl consideră „spam”, nu îl tolerează, iar moderatorii sau administratorii vor reduce numărul de postări, chiar luând măsuri mai drastice, cum ar fi expulzarea de pe forum. ',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION' => 'Cum poate fi schimbat rangul meu?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER' => 'Dacă sunteți sigur că fusul orar este corect și ora este încă incorectă, atunci timpul stocat pe server este greșit. Vă rugăm să contactați administrația pentru a remedia problema. ',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION' => 'Am schimbat fusul orar din profilul meu, dar ora este greșită!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER' => 'Este posibil să vedeți ora corespunzătoare unui alt fus orar. În acest caz, vizitați Panoul de control al utilizatorului și definiți fusul orar în funcție de locația dvs., de ex. Londra, Paris, New York, Sydney etc. Nu uitați că pentru a schimba fusul orar, ca și celelalte preferințe, trebuie să fiți înregistrat. Dacă nu este, acesta este un moment bun pentru a face acest lucru. ',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION' => 'Ora în forumuri nu este corectă!',
));
