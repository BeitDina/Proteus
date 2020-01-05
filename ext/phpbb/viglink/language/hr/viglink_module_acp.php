<?php
/**
*
* VigLink extension for the phpBB Forum Software package.
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* Croatian translation by Ančica Sečan Matijaščić (http://ancica.sunceko.net)
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
//'ACP_VIGLINK'=>'VigLink',
'ACP_VIGLINK_SETTINGS'=>'VigLink postavke',
'ACP_VIGLINK_SETTINGS_EXPLAIN'=>'VigLink je usluga treće strane koja direktno monetizira postojeće linkove na [tvojem] forumu (a) bez ikakvih promjena vezanih uz iskustvo korisnika/ca. Kada korisnici/e kliknu na te linkove, na proizvode i usluge i obave kupnju, trgovci plaćaju VigLinku proviziju - od čega se dio donira phpBB projektu. Slaganjem s omogućavanjem VigLinka i prosljeđivanjem donacija phpBB projektu - podržavaš našu “open source” organizaciju i osiguravaš našu kontinuiranu financijsku sigurnost.',
'ACP_VIGLINK_SETTINGS_CHANGE'=>'Ove postavke možeš promijeniti bilo kada u “<a href="%1$s">odjeljku postavki VigLinka</a>”.',
'ACP_VIGLINK_SUPPORT_EXPLAIN'=>'Nakon što potvrdiš preferirane postavke ispod, klikom na gumb “Pošalji”, više nećeš biti preusmjeravan/a na ovu stranicu.',
'ACP_VIGLINK_ENABLE'=>'Omogući VigLink',
'ACP_VIGLINK_ENABLE_EXPLAIN'=>'Omogućava korištenje usluga VigLinka.',
'ACP_VIGLINK_EARNINGS'=>'Zatraži vlastitu dobit (opcionalno)',
'ACP_VIGLINK_EARNINGS_EXPLAIN'=>'Možeš zatražiti vlastitu dobit zatraživanjem “VigLink Convert” korisničkog računa.',
//'ACP_VIGLINK_API_KEY_INVALID'=>'“%s” nije validan “VigLink Convert” API ključ.',
'ACP_VIGLINK_DISABLED_PHPBB'=>'VigLink usluge su onemogućene od strane phpBBa.',
'ACP_VIGLINK_CLAIM'=>'Zatraži vlastitu dobit',
'ACP_VIGLINK_CLAIM_EXPLAIN'=>'Možeš zatražiti vlastitu forumsku dobit od VigLink monetiziranih linkova umjesto doniranja [pripisa] dobiti phpBB projektu.<br />Za upravljanje postavkama vlastitog korisničkog računa, zatraži “VigLink Convert” korisnički račun klikom na “Konvertiraj korisnički račun”.',
'ACP_VIGLINK_CONVERT_ACCOUNT'=>'Konvertiraj korisnički račun',
'ACP_VIGLINK_NO_CONVERT_LINK'=>'“VigLink Convert” [korisničkog računa] link nije mogao biti dohvaćen.',
));
