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
	'ALL_AVAILABLE'			=> 'Toate disponibile',
	'ALL_RESULTS'			=> 'Toate rezultatele',

	'DISPLAY_RESULTS'		=> 'Afişează rezultatele ca',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Căutarea a găsit %d rezultat',
		2	=> 'Căutarea a găsit %d rezultate',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Căutarea a găsit mai mult de %d rezultat',
		2	=> 'Căutarea a găsit mai mult de %d rezultate',
	),

	'GLOBAL'				=> 'Anunţ global',

	'IGNORED_TERMS'			=> 'ignorat',
	'IGNORED_TERMS_EXPLAIN'	=> 'Următoarele cuvinte din căutarea dumneavoastră au fost ignorate deoarece conţin cuvinte prea comune: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Mergi la mesaj',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Forumul vă cere să fiţi înregistrat şi autentificat pentru a putea vizualiza propriile mesaje.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Forumul vă cere să fiţi înregistrat şi autentificat pentru a putea vizualiza mesajele necitite.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Forumul vă cere să fiţi înregistrat şi autentificat pentru a putea vizualiza mesajele noi de la ultima vizită.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Aţi specificat prea multe cuvinte pentru căutare. Vă rugăm să nu introduceţi mai mult de %1$d cuvânt.',
		2	=> 'Aţi specificat prea multe cuvinte pentru căutare. Vă rugăm să nu introduceţi mai mult de %1$d cuvinte.',
	),	

	'NO_KEYWORDS'			=> 'Trebuie să introduceţi cel puţin un cuvânt de căutat. Fiecare cuvânt trebuie să conţină cel puţin %s caractere şi nu trebuie să conţină mai mult de %s caractere, excluzând wildcardurile.',
	'NO_RECENT_SEARCHES'	=> 'Nicio căutare nu a fost efectuată recent.',
	'NO_SEARCH'				=> 'Ne pare rău, dar nu aveţi permisiunea să folosiţi funcţia Căutare.',
	'NO_SEARCH_RESULTS'		=> 'Nu a fost găsit niciun rezultat.',
	'NO_SEARCH_LOAD'		=> 'Ne pare rău dar nu puteți folosi funcția de căutare momentan. Serverul are o încărcare mare. Vă rugăm să încercați mai târziu.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Ne pare rău dar nu puteţi căuta pe forum în acest moment. Încercaţi din nou peste %d secundă.',
		2	=> 'Ne pare rău dar nu puteţi căuta pe forum în acest moment. Încercaţi din nou peste %d ssecunde.',
	),	
	'NO_SEARCH_UNREADS'      => 'Ne pare rău dar căutarea pentru mesajele necitite a fost dezactivată pe acest forum.',
	'WORD_IN_NO_POST'		=> 'Niciun mesaj nu a fost găsit deoarece cuvântul <strong>%s</strong> nu face parte din niciun mesaj.',
	'WORDS_IN_NO_POST'		=> 'Niciun mesaj nu a fost găsit deoarece cuvintele <strong>%s</strong> nu fac parte din niciun mesaj.',

	'POST_CHARACTERS'		=> 'de caractere din conţinutul mesajelor',
	'PHRASE_SEARCH_DISABLED'	=> 'Căutarea după o frază exactă nu e suportată în acest forum.',

	'RECENT_SEARCHES'		=> 'Căutări recente',
	'RESULT_DAYS'			=> 'Limitează rezultatele anterioare',
	'RESULT_SORT'			=> 'Sortează rezultatele după',
	'RETURN_FIRST'			=> 'Afişează primele',
	'GO_TO_SEARCH_ADV'		=> 'Mergeți la căutare avansată',
	
	'SEARCHED_FOR'				=> 'Caută termenul folosit',
	'SEARCHED_TOPIC'			=> 'Subiect căutat',
	'SEARCHED_QUERY'			=> 'Interogare căutată',
	'SEARCH_ALL_TERMS'			=> 'Caută după toţi termenii sau foloseşte interogarea introdusă',
	'SEARCH_ANY_TERMS'			=> 'Caută după orice termen',
	'SEARCH_AUTHOR'				=> 'Caută după autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilizaţi * ca wildcard pentru părţi de cuvinte.',
	'SEARCH_FIRST_POST'			=> 'Doar primul mesaj din subiect',
	'SEARCH_FORUMS'				=> 'Caută în forumuri',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selectaţi forumul sau forumurile în care doriţi să căutaţi. Subforumurile sunt selectate automat dacă nu dezactivaţi „caută în subforumuri„ mai jos.',
	'SEARCH_IN_RESULTS'			=> 'Caută aceste rezultate',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Adăugaţi <strong>+</strong> în faţa unui cuvânt ce trebuie găsit şi <strong>-</strong> în faţa unui cuvânt ce nu trebuie găsit. Puneţi o listă de cuvinte separate de <strong>|</strong> în paranteze dacă numai unul din cuvinte trebuie găsit. Utilizaţi * ca wildcard pentru părţi de cuvinte.',
	'SEARCH_MSG_ONLY'			=> 'Numai mesaj text',
	'SEARCH_OPTIONS'			=> 'Opţiuni de căutare',
	'SEARCH_QUERY'				=> 'Interogare de căutare',
	'SEARCH_SUBFORUMS'			=> 'Caută în subforumuri',
	'SEARCH_TITLE_MSG'			=> 'Subiecte mesaje şi textul mesajului',
	'SEARCH_TITLE_ONLY'			=> 'Doar titlul subiectelor',
	'SEARCH_WITHIN'				=> 'Caută în',
	'SORT_ASCENDING'			=> 'Ascendent',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendent',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Subiectul mesajului',
	'SORT_TIME'					=> 'Data mesajului',
	'SPHINX_SEARCH_FAILED'		=> 'Căutare eșuată: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Ne pare rău, căutarea nu a putut fi efectuată. Mai multe informații despre acest eșec au fost înregistrare în jurnalul de erori.',
	
	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Trebuie să specificaţi cel puţin %d caracter al numelui autorului.',
		2	=> 'Trebuie să specificaţi cel puţin %d caractere ale numelui autorului.',
	),
));
