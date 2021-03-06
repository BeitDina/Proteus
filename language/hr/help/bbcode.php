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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan Matijaščić
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan Matijaščić.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
'HELP_BBCODE_BLOCK_IMAGES'=>'Prikazivanje slik(a)e u postu',
'HELP_BBCODE_BLOCK_INTRO'=>'Uvod',
'HELP_BBCODE_BLOCK_LINKS'=>'Stvaranje linkova [veza]',
'HELP_BBCODE_BLOCK_LISTS'=>'Stvaranje lista [popisa]',
'HELP_BBCODE_BLOCK_OTHERS'=>'Ostalo',
'HELP_BBCODE_BLOCK_QUOTES'=>'Citiranje i stvaranje teksta fiksne širine',
'HELP_BBCODE_BLOCK_TEXT'=>'Oblikovanje teksta',
'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'=>'Za postanje privitak(a), ako je administrator/ica omogućio/la tu opciju te ako imaš sva dopuštenja, [vidjet ćeš formu <em>Dodavanje privit(a)ka</em> ispod okvira za pisanje teksta posta], koristiš <strong>[attachment=][/attachment]</strong> tag(ove).',
'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'=>'Kako dodati privitak u post?',
'HELP_BBCODE_IMAGES_BASIC_ANSWER'=>'phpBB BBKod sadrži tag(ove) za dodavanje slika u postove.<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umećeš/umetneš treba biti dostupna na Internetu [Ne može postojati samo na tvojem računalu - osim ako imaš webserver!].<br />Za postanje slike, trebaš obuhvatiti URL, na kojem se slika nalazi, sa: <strong>[img][/img]</strong> tago(vi)m(a). Npr.<br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong>.<br />Kao što je spomenuto u odjeljku iznad, sliku možeš obuhvatiti <strong>[url][/url]</strong> tago(vi)m(a). Npr.<br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br />će dati donju sliku.<br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
'HELP_BBCODE_IMAGES_BASIC_QUESTION'=>'Kako dodati sliku u post?',
'HELP_BBCODE_INTRO_BBCODE_ANSWER'=>'BBKod je specijalna implementacija HTMLa.<br />Mogućnost korištenja BBKoda daje administrator/ica foruma (de)aktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, opcionalno sam/a možeš (de)aktivirati korištenje BBKoda.<br />BBKod je sličan HTMLu u stilu; tagovi se umeću u vitičaste zagrade [i] [umjesto &lt; i &gt;] (a) što nudi veću kontrolu prikaza. Kod [tagovi] se može pisati ručno, no, ovisno o predlošku kojeg koristiš, vidjet ćeš da je dodavanje BBKoda postovima moguće i putem sučelja iznad prostora za post [poruku] na obrascu za pisanje postova.',
'HELP_BBCODE_INTRO_BBCODE_QUESTION'=>'Što je BBKod?',
'HELP_BBCODE_LINKS_BASIC_ANSWER'=>'phpBB BBKod podržava više načina stvaranja URIa, Uniform Resource Indicatora, poznatijih kao URLovi.<br /><ul><li>Prvi od njih koristi <strong>[url=][/url]</strong> tag(ove); bez obzira što upišeš poslije znaka = će uzrokovati da se sadržaj tagova ponaša kao URL.<br />Npr. za link na phpBB.com možeš koristiti<br /><strong>[url=https://www.phpbb.com/]</strong>Posjeti phpBB!<strong>[/url]</strong><br />rezultat će biti <a href="https://www.phpbb.com/">Posjeti phpBB!</a><br />Vidjet ćeš da se link otvara u novom prozoru zato da bi korisnik/ca mogao/la nastaviti koristiti forum ako želi.</li><li>Želiš li da URL bude prikazan kao link možeš koristiti <br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br />rezultat će biti <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>.</li><li>phpBB dodatno sadrži nešto što se zove <em>Magični linkovi</em>, a što će pretvoriti bilo koji ispravan URL u link bez upisivanja tag(ov)a ili prefiksa http://. Npr. upišeš li www.phpbb.com u post [bez tagova] automatski će u prikazu, kad pogledaš post, biti vidljiv link <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Na isti način, osim što ćeš koristiti druge tagove, možeš kreirati adrese elektroničke pošte. Npr.<br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong> odnosno, upišeš li samo, no.one@domain.adr<br />će biti prikazano kao <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>.</li></ul>Kao i sa svim BBKod tagovima, URL možeš postaviti oko bilo kojeg drugog taga kao što su <strong>[img][/img]</strong> [sljedeći odjeljak], <strong>[b][/b]</strong>, i sl.<br />Na tebi je da se pobrineš zatvoriti sve tagove.<br />Npr. sljedeće oblikovanje je nepravilno: <strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong>,<br />a može dovesti i do toga da ti post bude izbrisan [stoga pazi].',
'HELP_BBCODE_LINKS_BASIC_QUESTION'=>'Kako napraviti link(ove)?',
'HELP_BBCODE_LISTS_ORDERER_ANSWER'=>'Drugi tip liste, pobrojana lista, prikazuje svaku stavku u listi, jednu iza druge, označavajući svaku sa brojčanom odnosno alfabetskom oznakom.<br />Za pobrojanu listu koristiš <strong>[list=1][/list]</strong> za brojčanu listu odnosno <strong>[list=a][/list]</strong> za alfabetsku listu.<br />Kao i kod nepobrojane liste, stavke određuješ koristeći <strong>[*]</strong>. Npr.<br /><strong>[list=1]</strong><br /><strong>[*]</strong>Jedan<br /><strong>[*]</strong>Dva<br /><strong>[*]</strong>Tri<br /><strong>[/list]</strong><br />će dati<br /><ol style="list-style-type: decimal;"><li>Jedan</li><li>Dva</li><li>Tri</li></ol><strong>[list=a]</strong><br /><strong>[*]</strong>Osoba A<br /><strong>[*]</strong>Osoba B<br /><strong>[*]</strong>Osoba C<br /><strong>[/list]</strong><br />će dati<br /><ol style="list-style-type: lower-alpha"><li>Osoba A</li><li>Osoba B</li><li>Osoba C</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Jedan<br /><strong>[*]</strong>Dva<br /><strong>[*]</strong>Tri<br /><strong>[/list]</strong><br /><br />će dati<ol style="list-style-type: upper-alpha"><li>Jedan</li><li>Dva</li><li>Tri</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Jedan<br /><strong>[*]</strong>Dva<br /><strong>[*]</strong>Tri<br /><strong>[/list]</strong><br /><br />će dati<ol style="list-style-type: lower-roman"><li>Jedan</li><li>Dva</li><li>Tri</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Jedan<br /><strong>[*]</strong>Dva<br /><strong>[*]</strong>Tri<br /><strong>[/list]</strong><br /><br />će dati<ol style="list-style-type: upper-roman"><li>Jedan</li><li>Dva</li><li>Tri</li></ol>',
'HELP_BBCODE_LISTS_ORDERER_QUESTION'=>'Kako stvoriti pobrojanu listu?',
'HELP_BBCODE_LISTS_UNORDERER_ANSWER'=>'BBKod podržava dva tipa lista: nepobrojane i pobrojane.<br />One su, u principu, iste kao i njihovi HTML ekvivalenti.<br />Nepobrojana lista prikazuje svaku stavku u listi, jednu iza druge, označavajući svaku sa grafičkom oznakom.<br />Za nepobrojanu listu koristiš <strong>[list][/list]</strong> te odrediš svaku stavku koristeći <strong>[*]</strong>.<br />Npr. za izlistavanje tri određene boje koristiš:<br /><strong>[list]</strong><br /><strong>[*]</strong>Crvena<br /><strong>[*]</strong>Narančasta<br /><strong>[*]</strong>Žuta<br /><strong>[/list]</strong><br />što će dati<br /><ul><li>Crvena</li><li>Narančasta</li><li>Žuta</li></ul><br />Za određivanje stila grafičke/ih oznake/a koristiš <strong>[list=disc][/list]</strong> odnosno <strong>[list=circle][/list]</strong> odnosno <strong>[list=square][/list]</strong>.',
'HELP_BBCODE_LISTS_UNORDERER_QUESTION'=>'Kako stvoriti nepobrojanu listu?',
'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'=>'Ako si administrator/ica foruma i imaš potrebita dopuštenja, možeš putem odjeljka <em>BBKodovi</em>.',
'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'=>'Mogu li doda(va)ti vlastite tagove?',
'HELP_BBCODE_QUOTES_CODE_ANSWER'=>'Želiš li prikazati dio koda ili bilo što drugo što zahtijeva fiksnu širinu, [npr. Courier tip slova...], umetneš tekst u <strong>[code][/code]</strong> tag(ove). Npr.<br /><strong>[code]</strong>echo &quot;Ovo je neki kod&quot;;<strong>[/code]</strong>.<br />Svo oblikovanje radi se unutar <strong>[code][/code]</strong> tag(ova) i zadržava se kada kasnije pogledaš napisano.',
// <!-- Kocka je hičena! -->
'HELP_BBCODE_QUOTES_CODE_QUESTION'=>'Kako prikazati kod ili nešto drugo fiksne širine teksta?',
'HELP_BBCODE_QUOTES_TEXT_ANSWER'=>'Postoje dva načina citiranja teksta: s referencom ili bez reference.<br /><ul><li>Kada koristiš &quot;Citiraj&quot; funkciju za odgovaranje na post vidjet ćeš da je tekst posta na koji odgovaraš umetnut u <strong>[quote=&quot;&quot;][/quote]</strong> tag(ove).<br />Ova metoda omogućava citiranje s referencom prema osobi ili bilo čemu drugome što staviš.<br />Npr. za citiranje dijela teksta koji je napisao Gospon Fakin upišeš<br /><strong>[quote=&quot;Gospon Fakin&quot;]</strong>Tekst koji je Gospon Fakin napisao...<strong>[/quote]</strong><br />Rezultat će biti taj da će pisati &quot;Gospon Fakin je napisao/la:&quot; - prije stvarnog teksta.<br />Zapamti da ime koje citiraš <strong>trebaš</strong> upisati između &quot;&quot; - navodnici nisu opcionalni.</li><li>Druga metoda omogućava naslijepo citiranje nečega.<br />Za postizanje toga umetneš tekst u <strong>[quote][/quote]</strong> tag(ove). <br />Rezultat će biti taj da će pisati &quot;Citat:&quot; - prije samog teksta.</li></ul>',
'HELP_BBCODE_QUOTES_TEXT_QUESTION'=>'Kako citirati tekst u odgovoru?',
'HELP_BBCODE_TEXT_BASIC_ANSWER'=>'BBKod sadrži tagove koji omogućavaju brzo mijenjanje osnovnog stila teksta.<br />To možeš napraviti na više načina...<br /><ul><li>Za podebljanje - tekst umetneš u <strong>[b][/b]</strong>, npr.<br /><strong>[b]</strong>“Svaka smjela ideja u početku izgleda kao ludost. [Goethe]”<strong>[/b]</strong><br />će biti prikazano kao <strong>“Svaka smjela ideja u početku izgleda kao ludost. [Goethe]”</strong>.</li><li>Za podcrtanje - tekst umetneš u <strong>[u][/u]</strong>, npr. <br /><strong>[u]</strong>“Ludim smatraju onoga čija se ludost ne poklapa s ludošću većine. [Hoel, Beckett]”<strong>[/u]</strong><br />će biti prikazano kao <span style="text-decoration: underline">“Ludim smatraju onoga čija se ludost ne poklapa s ludošću većine. [Hoel, Beckett]”</span>.</li><li>Za nakošenje - tekst umetneš u <strong>[i][/i]</strong>, npr.<br /><strong>[i]</strong>“S luđacima treba ludovati. [Petronije]”<strong>[/i]</strong><br />će biti prikazano kao <em>“S luđacima treba ludovati. [Petronije]”</em>.</li></ul>',
'HELP_BBCODE_TEXT_BASIC_QUESTION'=>'Kako podebljati/podcrtati/nakositi tekst?',
'HELP_BBCODE_TEXT_COLOR_ANSWER'=>'Za promjenu boje/veličine teksta možeš koristiti donje tagove, s time da trebaš imati na umu da će krajnji rezultat [izgled] ovisiti o pregledniku i sustavu gledatelja/ice(a).<br /><ul><li>Za promjenu boje - tekst umetneš u <strong>[color=][/color]</strong>.<br />Možeš upisati naziv boje [npr.: white=bijela; black=crna; itd.] njezin heksadecimalan kod [npr.: #FFFFFF=bijela; #000000=crna; itd.].<br />Npr.<br />za promjenu boje teksta u crvenu - tekst umetneš u<br /><strong>[color=red]</strong>“Juhuhu, kaj ima, sve štima?”<strong>[/color]</strong><br />ili<br /><strong>[color=#FF0000]</strong>“Juhuhu, kaj ima, sve štima?”<strong>[/color]</strong><br />što će oboje dati <span style="color:red">“Juhuhu, kaj ima, sve štima?”</span>.</li><li>Za promjenu veličine - tekst umetneš u <strong>[size=][/size]</strong>.<br />Ovaj tag ovisi o predlošku kojeg koristiš; preporučen format je numerička vrijednost koja predstavlja veličinu teksta u postotcima, počevši od 20 [toliko sitno da ćeš ga jedva vidjeti] pa sve do 200 [vrlo veliko].<br />Npr.<br /><strong>[size=30]</strong>“Ovo ne vidim pročitati ni z očalama.”<strong>[/size]</strong><br />će dati <span style="font-size:30%;">“Ovo ne vidim pročitati ni z očalama.”</span>;<br /><strong>[size=200]</strong>“Jezuš kaj ovo strši!”<strong>[/size]</strong><br />će dati <span style="font-size:200%;">“Jezuš kaj ovo strši!”</span>.</li></ul>',
'HELP_BBCODE_TEXT_COLOR_QUESTION'=>'Kako promijeniti boju/veličinu teksta?',
'HELP_BBCODE_TEXT_COMBINE_ANSWER'=>'Je. Npr. za privlačenje nečije pozornosti možeš napisati:<br /><strong>[size=200][color=red][b]</strong>Danas će biti toplo i sunčano. (;<strong>[/b][/color][/size]</strong><br />što će dati <span style="color:red;font-size:200%;"><strong>Danas će biti toplo i sunčano. (;</strong></span><br />Nije preporučljivo koristiti puno teksta koji je višestruko oblikovan jer se time gube čitljivost i preglednost.<br />Na tebi je da se pobrineš zatvoriti sve tagove.<br />Npr. sljedeće oblikovanje je nepravilno: <strong>[b][u]</strong>Ovo je nepravilno<strong>[/b][/u]</strong>.',
'HELP_BBCODE_TEXT_COMBINE_QUESTION'=>'Je li moguće kombinirati tagove?',
));
