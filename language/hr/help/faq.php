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
'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'=>'Administrator/ica određuje postanje kojih privitaka je dopušteno.<br />Ako nisi siguran/na postanje kojih privitaka je dopušteno, kontaktiraj administratora/icu.',
'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'=>'Postanje kojih privitaka je dopušteno?',
'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'=>'U korisničkom profilu <em>[Profil/Postavke]</em> klikneš na link <em>Privitci</em>.',
'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'=>'Kako mogu pronaći [sve] vlastite privitke?',
'HELP_FAQ_BLOCK_ATTACHMENTS'=>'Privitci',
'HELP_FAQ_BLOCK_BOOKMARKS'=>'Bookmarkiranje i pretplaćivanje',
'HELP_FAQ_BLOCK_FORMATTING'=>'Uređivanje i tipovi tema',
'HELP_FAQ_BLOCK_FRIENDS'=>'Prijatelji/ce i gnjavatori/ce',
'HELP_FAQ_BLOCK_GROUPS'=>'Stupnjevanje korisnika/ca i korisničke grupe',
'HELP_FAQ_BLOCK_ISSUES'=>'phpBB',
'HELP_FAQ_BLOCK_LOGIN'=>'Prijavljivanje i registracija',
'HELP_FAQ_BLOCK_PMS'=>'Privatne poruke',
'HELP_FAQ_BLOCK_POSTING'=>'Postanje',
'HELP_FAQ_BLOCK_SEARCH'=>'Pretraživanje foruma',
'HELP_FAQ_BLOCK_USERSETTINGS'=>'Korisničke postavke',
'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'=>'U starijim verzijama phpBBa, bookmarkiranje je bilo slično bookmarkiranju stranica preglednikom. Po bookmarkiranju teme, nisi bio/la obaviješten/a o novim postovima, ali si se [kasnije] mogao/la vratiti na temu bez traženja iste, dovoljno je bilo kliknuti na nju na popisu bookmarkiranih tema. Pretplaćivanje na temu/tematski forum omogućavalo ti je primanje obavijesti o novim postovima.<br />Od phpBBa 3.1, bookmarkiranje je slično pretplaćivanju u smislu da možeš biti obaviješten/a o ažuriranju teme. Pretplaćivanje ti [i dalje] omogućava primanje obavijesti o novim postovima u temama odnosno novima temama na tematskim forumima.<br />Opcije obavješćivanja bookmarkiranja i pretplaćivanja možeš postaviti u korisničkom profilu <em>[Profil/Postavke]</em> u <em>Postavkama obavijesti</em>.',
'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'=>'Koja je razlika između bookmarkiranja i pretplaćivanja?',
'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'=>'Da bi se pretplatio/la na forum, prilikom pregledavanja foruma, dovoljno je kliknuti na link <em>Pretplati se</em>.',
'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'=>'Kako se mogu pretplatiti na forum?',
'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'=>'U korisničkom profilu <em>[Profil/Postavke]</em> klikneš na link <em>Pretplate</em> i slijediš upute.',
'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'=>'Kako se mogu odpretplatiti?',
'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'=>'Da bi bookmarkirao/la odnosno pretplatio/la se na temu, prilikom pregledavanja teme, dovoljno je izabrati s padajućeg izbornika teme odgovarajuću opciju odnosno, za pretplaćivanje, prilikom postanja posta, upaliti opciju <em>Obavijesti me kad odgovor bude postan</em>.',
// <!-- Kocka je hičena! -->
'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'=>'Kako mogu bookmarkirati odnosno pretplatiti se na temu?',
'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'=>'Obavijesti su postovi koji sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu svake stranice foruma na kojem su postane.<br />Administrator/ica određuje tko sve ima pravo postati obavijesti.',
'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'=>'Što su obavijesti?',
'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'=>'BBKod je specijalna implementacija HTMLa.<br />Mogućnost korištenja BBKoda daje administrator/ica foruma (de)aktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, opcionalno sam/a možeš (de)aktivirati korištenje BBKoda.<br />BBKod je sličan HTMLu u stilu; tagovi se umeću u vitičaste zagrade [i] [umjesto &lt;i&gt;] (a) što nudi veću kontrolu prikaza. Kod [tagovi] se može pisati ručno, no, ovisno o predlošku kojeg koristiš, vidjet ćeš da je dodavanje BBKoda postovima moguće i putem sučelja iznad prostora za post [poruku] na obrascu za pisanje postova.<br />Za više informacija o BBKodu pogledaj Vodič kojemu možeš pristupiti sa stranice za pisanje/uređivanje postova.',
'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'=>'Što je BBKod?',
'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'=>'Globalne obavijesti su postovi koji sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu svakog foruma i u korisničkom profilu <em>[Profil/Postavke]</em>.<br />Administrator/ica određuje tko sve ima pravo postati globalne obavijesti.',
'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'=>'Što su globalne obavijesti?',
'HELP_FAQ_FORMATTING_HTML_ANSWER'=>'Ne. Većinu onoga što je moguće dobiti/prikazati korištenjem HTMLa moguće je dobiti/prikazati i korištenjem BBKoda.',
'HELP_FAQ_FORMATTING_HTML_QUESTION'=>'Mogu li koristiti HTML?',
'HELP_FAQ_FORMATTING_ICONS_ANSWER'=>'Ikona teme, [bira ju autor/ica], je sličica povezana s postom, a koja bi trebala ukazivati na sadržaj posta.<br />Mogućnost korištenja ikona tema daje administrator/ica foruma.',
'HELP_FAQ_FORMATTING_ICONS_QUESTION'=>'Što su ikone tema?',
'HELP_FAQ_FORMATTING_IMAGES_ANSWER'=>'Da. Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u postovima/porukama, i drugo, ako je administrator/ica foruma onemogućio postanje privitaka, slika koju umećeš/umetneš treba biti dostupna na Internetu, npr. http://www.primjer.info/moja-slicka.gif [ne može postojati samo na tvojem računalu - osim ako imaš webserver odnosno na stranicama koje nisu dostupne javnosti, stranicama zaštićenima zaporkama i sl.].<br />Da bi postao/la sliku: trebaš obuhvatiti URL, na kojem se slika nalazi, sa BBKod [img][/img] tago(vi)m(a).',
'HELP_FAQ_FORMATTING_IMAGES_QUESTION'=>'Mogu li postati slike?',
'HELP_FAQ_FORMATTING_LOCKED_ANSWER'=>'Zaključane teme su teme koje je moderator(ica)/administrator(ica) [zbog nekog, a može ih biti puno, razloga] zaključao/la.<br />Moguće ih je samo pregledavati [dakle, nije moguće uređivati/izbrisati... postove...]. Ankete koje se nalaze u njima [ako nisu po određenju] završavaju istog trena kada moderator(ica)/administrator(ica) zaključa temu.<br />Ako imaš dopuštenje, [ti] možeš zaključavati teme koje si pokrenuo/la.',
'HELP_FAQ_FORMATTING_LOCKED_QUESTION'=>'Što su zaključane teme?',
'HELP_FAQ_FORMATTING_SMILIES_ANSWER'=>'Smajlići [Smileys/Emoticons] su male sličice koje <em>prikazuju</em> emocije/razmišljanja osobe [koja ih je <em>ubacila</em> u post, npr. :) znači smijem se, sretan/na sam, :( znači plačem, tužan/na sam...].<br />Smajliće u post možeš <em>ubaciti</em> na dva načina: upisivanjem kratkog koda [ako je administrator/ica odobrio/la, svaki smajlić ima svoj vlastiti kod] i(li) klikom na smajlića [smajlići se nalaze u sklopu obrasca za pisanje postova; u pravilu se vidi samo <em>prvih</em> 20, a ostale možeš vidjeti (i <em>ubaciti</em>) klikom na <em>Ostali smajlići</em>].<br />Nije preporučljivo ubacivati/ubaciti puno smajlića u post jer se time gube čitljivost i preglednost.<br />Administrator/ica može odrediti maksimalan dopušten broj smajlića “po” postu.',
'HELP_FAQ_FORMATTING_SMILIES_QUESTION'=>'Što su smajlići?',
'HELP_FAQ_FORMATTING_STICKIES_ANSWER'=>'“Važno” su postovi koji često sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu prve stranice foruma [ispod eventualnih obavijesti] na kojem su postani.<br />Administrator/ica određuje tko ih sve ima pravo postati.',
'HELP_FAQ_FORMATTING_STICKIES_QUESTION'=>'Što je “važno”?',
'HELP_FAQ_FRIENDS_BASIC_ANSWER'=>'Liste prijatelja(ica)/gnjavatora(ica) služe “organiziranju ostalih korisnika/ca foruma”.<br />Osobe koje dodaš na listu prijatelja/ica bit će izlistane u korisničkom profilu <em>[Profil/Postavke]</em> da bi bez pretraživanja mogao/la vidjeti njihov online status te im poslati privatne poruke. Postovi i sl. tih osoba mogu biti posvijetljeni.<br />Postovi osoba koje dodaš na listu gnjavatora/ica bit će zadano skriveni.',
'HELP_FAQ_FRIENDS_BASIC_QUESTION'=>'Što su liste prijatelja(ica)/gnjavatora(ica)?',
'HELP_FAQ_FRIENDS_MANAGE_ANSWER'=>'Na dva načina:<br />- putem profila korisnika/ce [klikom na link dodaješ ga/ju na listu prijatelja(ica)/gnjavatora(ica)];<br />- putem korisničkog profila <em>[Profil/Postavke]</em> [upisivanjem korisničkog/ih imena u za to predviđeno polje].<br />Na isti način izbrisuješ korisnike/ce s lista.',
'HELP_FAQ_FRIENDS_MANAGE_QUESTION'=>'Kako mogu dodati/izbrisati korisnika/cu na/s liste prijatelja(ica)/gnjavatora(ica)?',
'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'=>'Administratori/ce su osobe s najvišom razinom kontrole nad cijelim forumom.<br />Mogu kontrolirati sve aspekte foruma [postavljanje dopuštenja, isključivanje korisnika/ca, stvaranje korisničkih grupa/moderatora(ica), moderiranje foruma itd.], [a sve] ovisno o tome koja im je prava dodijelio/la glavni/a administrator/ica.',
'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'=>'Što su administratori/ce?',
'HELP_FAQ_GROUPS_COLORS_ANSWER'=>'Administrator/ica foruma određuje boje [članova/ica] korisničkih grupa da bi ih bilo lakše identificirati/razlikovati.',
'HELP_FAQ_GROUPS_COLORS_QUESTION'=>'Zašto su [neke] korisničke grupe prikazane različitim bojama?',
'HELP_FAQ_GROUPS_DEFAULT_ANSWER'=>'Ako si član/ica više od jedne grupe, postavke tvoje zadane grupe odnosit će se na prikaz tvojeg korisničkog imena u smislu kojom će bojom te s kojim statusom biti prikazano. Administrator/ica može odobriti promjenu zadane grupe putem korisničkog profila <em>[Profil/Postavke]</em>.',
'HELP_FAQ_GROUPS_DEFAULT_QUESTION'=>'Što je “zadana korisnička grupa”?',
'HELP_FAQ_GROUPS_MODERATORS_ANSWER'=>'Moderatori/ce su osobe [osoba ili (korisnička) grupa osoba] čiji je <em>“posao”</em> održavanje foruma.<br />Imaju ovlasti mijenjanja/izbrisivanja postova, zaključavanja/otključavanja/premještanja/izbrisivanja/razdvajanja tema u forumima koje održavaju.<br />Tu su (i) da bi spriječili/e korisnike/ce od skretanja s tema/objavljivanja nedopuštenih sadržaja i sl.',
'HELP_FAQ_GROUPS_MODERATORS_QUESTION'=>'Što su moderatori/ce?',
'HELP_FAQ_GROUPS_TEAM_ANSWER'=>'Link koji vodi na stranicu na kojoj se nalazi lista “osoblja” foruma [popis administratora/ica i moderatora/ica, koje grupe/forume administriraju/moderiraju i sl.].',
'HELP_FAQ_GROUPS_TEAM_QUESTION'=>'Što je “Tim” link?',
'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'=>'Korisničke grupe su grupe u koje administratori/ce grupiraju korisnike/ce.<br />Svaki/a korisnik/ca može pripadati većem broju grupa.<br />Svakoj grupi mogu biti dodijeljena individualna prava pristupa, što administratorima/cama olakšava dodjeljivanje određenih prava određenim korisnicima/ama [npr. proglašavanje više korisnika/ca moderatorima/cama foruma, pravo pristupa “privatnim” tematskim forumima itd.].',
'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'=>'Klikneš na <em>Korisničke grupe</em> u korisničkom profilu <em>[Profil/Postavke]</em> što će te odvesti na stranicu na kojoj ćeš vidjeti korisničke grupe.<br />Nemaju sve grupe <em>otvoren pristup</em> [neke su zatvorene, neke skrivene...].<br />Ako imaš pristup korisničkoj grupi, za pristupanje klikneš na odgovarajuću naredbu [obično <em>Pristupi grupi</em>].<br />Ako je grupa otvorenog tipa, automatski ćeš postati članom/icom, ako je za pristupanje potrebno odobrenje, vođa grupe će odobriti/neodobriti zahtjev, ako neodobri zahtjev bilo bi lijepo da ga/ju ne gnjaviš traženjem objašnjenja, jer, ako se zaista dogodilo da ti je neodobrio/la zahtjev, sigurno je imao/la dobar razlog.',
'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'=>'Kako mogu postati članom/icom korisničke grupe?',
'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'=>'Korisničke grupe inicijalno kreira administrator/ica pri čemu odmah određuje i vođu grupe.<br />Ako želiš postati vođom već postojeće grupe ili, pak, (za)tražiti otvaranje nove grupe, kontaktiraj administratora/icu [npr. privatnom porukom].',
'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'=>'Kako mogu postati vođa korisničke grupe?',
'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'=>'Što su korisničke grupe?',
'HELP_FAQ_ISSUES_ADMIN_ANSWER'=>'Ako je administrator/ica omogućio/la “Kontakt” formu, putem iste, mogu ga/ju kontaktirati svi/e korisnici/e foruma.<br />Registrirani/e korisnici/e administratora/icu mogu kontaktirati (i) putem linka “Tim”.',
'HELP_FAQ_ISSUES_ADMIN_QUESTION'=>'Kako mogu kontaktirati administratora/icu?',
'HELP_FAQ_ISSUES_FEATURE_ANSWER'=>'Ako smatraš da neka mogućnost treba biti dodana, posjeti <a href="https://www.phpbb.com/ideas/">phpBB Centar Ideja</a>, (a) gdje možeš vidjeti [i glasovati za] već predložene ideje i(li) predložiti vlastite.',
'HELP_FAQ_ISSUES_FEATURE_QUESTION'=>'Zašto X mogućnost nije dostupna?',
'HELP_FAQ_ISSUES_LEGAL_ANSWER'=>'Kontaktiraj administratora(e)/icu(e) foruma. Ako ga/ju/ih ne možeš (pro)naći, kontaktiraj moderatora(e)/icu(e) foruma i njih pitaj koga bi trebao/la pitati. Ako i dalje ne dobiješ odgovor, kontaktiraj vlasnika/cu domene [<a href="http://www.google.com/search?q=whois">whois lookup</a>] ili pružatelja usluga. phpBB Limited nema apsolutno nikakvu kontrolu i ne može ni u kojem slučaju odgovarati za to kako, gdje i tko forum koristi. Potpuno je besmisleno kontaktirati phpBB Limited u vezi bilo kakve pravne stvari koja nije direktno vezana uz phpBB odnosno phpbb.com stranice. Ako kontaktiraš phpBB Limited oko toga kako bilo koja treća stran(k)a koristi ovaj softver - ne očekuj odgovor.',
'HELP_FAQ_ISSUES_LEGAL_QUESTION'=>'Koga kontaktirati u vezi zlouporabe/pravnih stvari vezanih uz forum?',
'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'=>'Ovaj softver [u originalnom obliku] napravljen je i objavljen od strane <a href="https://www.phpbb.com/">phpBB Limited</a>. Dostupan je pod GNU General Public Licence verzija 2 (GPL-2.0) i može biti slobodno distribuiran. Za detalje posjeti: <a href="https://www.phpbb.com/about/">O phpBBu</a>. phpBB Limited zadržava sva autorska prava na ovaj softver.',
'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'=>'Tko je napisao/la ovaj forum?',
'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'=>'Ako ne upališ opciju <em>“Zapamti me”</em> kada se prijaviš, forum će te držati prijavljenim/om samo za tvojeg boravka na forumu [odjavit će te kad odeš s foruma]. To sprječava zlouporabu tvojeg korisničkog računa.<br />Da bi ostao/la prijavljen/a, upali(š) opciju <em>“Zapamti me”</em> prilikom prijavljivanja [što nije preporučljivo ako forumu pristupaš s tuđeg, a ne sa svojeg računala].<br />Spomenuta opcija je vidljiva samo ako ju je administrator/ica omogućio/la.',
'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'=>'Kako mogu onemogućiti automatsko odjavljivanje s foruma?',
'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'=>'Jesi li se <em>registrirao/la</em>? Da bi se mogao/la prijaviti na forum, trebaš se registrirati.<br />Jesi li upisao/la <em>točne podatke</em> za prijavljivanje? Provjeri korisničko ime i zaporku.<br />Jesi li <em>isključen/a</em> s foruma [zabranjen ti je pristup]? Ako jesi, [kod prijavljivanja ćeš vidjeti poruku o tome], kontaktiraj administratora/icu [da saznaš razlog(e) isključenja].<br />Ako si eliminirao/la sve tri gornje mogućnosti, i još uvijek se ne možeš prijaviti, kontaktiraj administratora/icu [da provjeri što (ni)je u redu s tvojim korisničkim računom].',
'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'=>'Dva su moguća razloga: ili si upisao/la <em>netočno</em> korisničko ime i(li) zaporku; ili je administrator/ica <em>izbrisao/la</em> tvoj korisnički račun.<br />Ako je u pitanju potonje: možda nikada nisi ništa postao/la, [uobičajeno je periodično izbrisivanje korisničkih računa korisnika/ca koji/e ništa ne postaju da bi se smanjila veličina baze], pa se pokušaj ponovo registrirati.',
'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'=>'Zašto se “više” ne mogu prijaviti na forum?',
'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'=>'Zašto se ne mogu prijaviti na forum?',
// <!-- Kocka je hičena! -->
'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'=>'Moguće je da je administrator/ica: onemogućio/la korisničko ime kojim se pokušavaš registrirati [ili isto već postoji], onemogućio/la adresu elektroničke pošte kojom se pokušavaš registrirati, isključio/la tvoju IP adresu odnosno onemogućio/la Registraciju da bi spriječio/la otvaranje novih korisničkih računa.<br />Bilo kako bilo, kontaktiraj administratora/icu za pomoć.',
'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'=>'Zašto se ne mogu registrirati?',
'HELP_FAQ_LOGIN_COPPA_ANSWER'=>'COPPA [Child Online Privacy and Protection Act] je pravno pravilo, Sjedinjenih Američkih Država, doneseno 1998. godine, koje nalaže odobrenje od strane roditelja/staratelja za prikupljanje osobnih podataka [od] osoba mlađih od 13 godina.<br />Ako nisi siguran/na odnosi li se spomenuto pravno pravilo na tebe, zatraži pravni savjet od stručne osobe.<br />phpBB Tim ne daje pravne savjete što će reći da je potpuno besmisleno kontaktirati phpBB Tim u vezi bilo kakve pravne stvari koja nije direktno vezana uz phpbb.com Web stranice odnosno phpBB softver.',
'HELP_FAQ_LOGIN_COPPA_QUESTION'=>'Što je COPPA?',
'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'=>'Izbrisuje kolačiće koje je kreirao phpBB, a koji, inače, sadrže informacije o tvojem prijavljivanju, pregledanim/pročitanim forumima/temama/postovima i sl.<br />Ako imaš problema s prijavljivanjem/odjavljivanjem, [obično] pomaže izbrisivanje kolačića.',
'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'=>'Što “Izbriši kolačiće” radi?',
'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'=>'Nije smak svijeta! Jest da je tvoja trenutna zaporka izgubljena [jer je kriptirana u bazi i ne može ti biti ponovo poslana], no, možeš zatražiti novu.<br />Klikneš na <em>Prijava</em> te na stranici koja će ti se otvoriti klikneš na <em>Zaboravio/la sam zaporku</em>. Upišeš tražene podatke... Daljnje upute će ti stići elektroničkom poštom.',
'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'=>'Izgubio/la sam zaporku!',
'HELP_FAQ_LOGIN_REGISTER_ANSWER'=>'Ne trebaš, ako administrator/ica nije postavio/la uvjet da samo registrirane osobe mogu pregledavati forum/postati.<br />Bilo kako bilo, Registracijom ćeš dobiti pristup dodatnim opcijama koje nisu dostupne neregistriranim osobama [avatari, privatne poruke, elektronička pošta, korisničke grupe, itd.].<br />S obzirom da Registracija traje svega nekoliko minuta, preporučljivo je registrirati se.',
'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'=>'Jesi li upisao/la točno <em>korisničko ime</em> i <em>zaporku</em>?<br />Ako jesi, dogodila se jedna od dvije moguće stvari: ako si prilikom Registracije, a COPPA podrška je bila omogućena, kliknuo/la na <em>Slažem se i imam manje od 13 godina</em> trebat ćeš slijediti upute koje su ti stigle elektroničkom poštom; ili je možda potrebna aktivacija tvojeg korisničkog računa [za što si vidio/la obavijest ili prilikom same Registracije ili ti je stigla elektroničkom poštom].<br />Ako si eliminirao/la obje gornje mogućnosti, i još uvijek se ne možeš prijaviti, kontaktiraj administratora/icu [da provjeri što (ni)je u redu s tvojim korisničkim računom].',
'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'=>'Zašto se ne mogu prijaviti na forum “po prvi put”?',
'HELP_FAQ_LOGIN_REGISTER_QUESTION'=>'Zašto se trebam registrirati?',
'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'=>'Tri su moguća razloga:<br /> - ili nisi registriran(a)/prijavljen(a);<br /> - ili je administrator/ica onemogućio/la privatne poruke za cijeli forum;<br /> - ili je administrator/ica tebi onemogućio/la slanje privatnih poruka.<br />U potonjem slučaju zatraži objašnjenje od administratora/ice.',
'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'=>'Zašto ne mogu [po]slati privatne poruke?',
'HELP_FAQ_PMS_SPAM_ANSWER'=>'Obrazac elektroničke pošte foruma uključuje osiguranje koje prati korisnike/ce koji/e šalju poruke. Obavijesti porukom elektroničke pošte administratora/icu o problemu [priloži čitavu poruku, uključujući i zaglavlje - ono sadrži detalje o korisniku/ci koji/a je poslao/la poruku]. Po primitku tvoje poruke, administrator/ica može poduzeti [za to predviđene] mjere.',
'HELP_FAQ_PMS_SPAM_QUESTION'=>'Kome prijaviti spam odnosno uvredljive poruke dobivene od korisnika/ce foruma?',
'HELP_FAQ_PMS_UNWANTED_ANSWER'=>'U korisničkom profilu <em>[Profil/Postavke]</em>, postavljanjem pravila, možeš blokirati/onemogućiti korisnika(e)/cu(e) da ti šalje(u) privatne poruke [poruke će automatski biti izbrisane].<br />Ako dobivaš neželjene privatne poruke od određenog/e korisnika/ce, obavijesti administratora/icu [ima ovlasti spriječiti korisnika(e)/cu(e) u slanju privatnih poruka ikome].',
'HELP_FAQ_PMS_UNWANTED_QUESTION'=>'Kako onemogućiti pojedine korisnike/ce da mi šalju privatne poruke?',
'HELP_FAQ_POSTING_BUMP_ANSWER'=>'Klikom na link “Bumpiraj” što će temu postaviti na vrh prve stranice foruma. Ako ne vidiš link, bumpiranje je ili onemogućeno ili treba proći određen vremenski period od zadnjeg posta(nja)/bumpiranja. Temu možeš bumpirati i postanjem posta, no, obrati pažnju na pravila foruma jer postoji mogućnost da je pravilima zabranjeno bumpiranje postanjem.',
'HELP_FAQ_POSTING_BUMP_QUESTION'=>'Kako mogu bumpirati temu?',
'HELP_FAQ_POSTING_CREATE_ANSWER'=>'Klikneš na odgovarajući gumb na forumu/temi [npr. <em>nova tema</em>, <em>odgovori</em>...].<br />Radnje koje (ne)možeš raditi su uvijek prikazane na dnu ekrana foruma/teme [npr. <em>Možeš započinjati nove teme</em>, <em>Ne možeš započinjati nove teme</em>...].<br />Ovisno o tome kako je administrator/ica odredio/la, postanje može biti omogućeno svima ili, pak, samo registriranim korisnicima/ama.',
'HELP_FAQ_POSTING_CREATE_QUESTION'=>'Kako mogu postati [objaviti] temu/post na forum(u)?',
'HELP_FAQ_POSTING_DRAFT_ANSWER'=>'Omogućuje pohranjivanje [skice] posta/poruke, koji/a naknadno može biti završen/a i postan/poslana, a što je moguće iz korisničkog profila <em>[Profil/Postavke]</em> odnosno prilikom postanja [<em>Učitaj</em>].',
'HELP_FAQ_POSTING_DRAFT_QUESTION'=>'Čemu služi gumb “Pohrani” prilikom postanja/pisanja poruke(a)?',
'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'=>'Post možeš urediti/uređivati, [bilo kada odnosno, ako je administrator/ica tako odredio/la, samo određeno vremensko razdoblje nakon postanja posta odnosno uopće ne], klikom na gumb <em>uredi</em>.<br />Ako je u međuvremenu netko odgovorio na tvoj post, a ti ga naknadno urediš, primijetit ćeš da se “u postu pojavila” rečenica koja govori o tome koliko si puta i kada zadnji put uredio/la post [rečenica se neće pojaviti ako nije bilo odgovora na post].<br />Post možeš izbrisati klikom na gumb <em>izbriši</em>. Primijetit ćeš da neke postove nećeš moći izbrisati [npr. ako je u međuvremenu netko odgovorio na njih odnosno, ako je administrator/ica tako odredio/la, uopće ne].<br />Postoji mogućnost da administrator(ica)/moderator(ica) izmijeni/izbriše tvoj post [u prvom slučaju bi svakako trebao/la napisati opasku što je i zašto izmijenio/la].',
'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'=>'Kako mogu urediti/izbrisati post?',
'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'=>'Nekim tematskim forumima mogu pristupiti samo određeni/e korisnici/e i(li) korisničke grupe. Za pregledavanje, postanje... na takvim forumima treba ti posebna autorizacija koju možeš (za)tražiti/dobiti samo od moderatora(ice)/administratora(ice).',
'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'=>'Zašto ne mogu pristupiti tematskom forumu?',
'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'=>'Mogućnost dodavanja privitaka, na forumu(ima) za grupu(e)/korisnika(cu) daje administrator/ica foruma.<br />Ako ne možeš doda(va)ti privitke, moguće je da je administrator/ica onemogućio/la dodavanje privitaka baš za taj određen forum na kojem si pokušao/la dodati privitak/ke odnosno da samo određeni/e korisnici(e)/grupe mogu dodavati privitke na tom forumu.<br />Ako ti nije jasno zašto [baš] ti ne možeš doda(va)ti privitke, kontaktiraj administratora/icu.',
'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'=>'Zašto ne mogu dodavati privitke?',
'HELP_FAQ_POSTING_POLL_ADD_ANSWER'=>'Maksimalan limit odgovora [opcija] određuje administrator/ica. Ako smatraš da bi taj broj trebalo povećati, kontaktiraj administratora/icu.',
'HELP_FAQ_POSTING_POLL_ADD_QUESTION'=>'Zašto ne mogu dodati još [više] odgovora [opcija]?',
'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'=>'Kada započneš [otvoriš] novu temu [ili izmijeniš prvi post postojeće teme - ako imaš dopuštenje] vidjet ćeš formu <em>Kreiranje ankete</em> ispod okvira za pisanje teksta posta [ako to ne vidiš, vjerojatno nemaš dopuštenje za kreiranje anketa]. Upišeš pitanje i [barem] dva moguća odgovora [svaki u zaseban redak], kojih maksimalan limit određuje administrator/ica. Možeš postaviti (i) vremensko ograničenje trajanja ankete [upišeš broj dana; 0=neograničeno], [broj] koliko opcija korisnik/ca može odabrati prilikom glasovanja te o(ne)mogućiti “predomišljanje” [“ponovljeno” glasovanje (poništenje danog/ih glasa/ova te glasovanje za drugu/e opciju/e)].',
'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'=>'Kako mogu kreirati anketu?',
'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'=>'Ankete može urediti/uređivati/izbrisati samo ona/j koja/i ih je i kreirala/o, moderator/ica i(li) administrator/ica. Da bi izmijenio/la anketu, ako imaš dopuštenje, urediš prvi post u temi [ako je kreirana, anketa se uvijek nalazi u prvom postu u temi]. Ti anketu možeš izmijeniti samo ako nitko još nije glasovao, dok ju moderatori(ce)/administratori(ce) mogu mijenjati bilo kada.<br />Anketu možeš izbrisati samo ako nitko još nije glasovao.',
'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'=>'Kako mogu urediti/izbrisati anketu?',
'HELP_FAQ_POSTING_QUEUE_ANSWER'=>'Administrator/ica može donijeti odluku prema kojoj je na [određenom(im)] forumu(ima) potrebno odobrenje da bi post(ovi) bio(li) postan(i) ili te je administrator/ica pridružio/la korisničkoj grupi članovima/icama koje postove treba odobriti da bi bili objavljeni. Za detalje, kontaktiraj administratora/icu.',
'HELP_FAQ_POSTING_QUEUE_QUESTION'=>'Zašto [moj] post treba biti odobren?',
'HELP_FAQ_POSTING_REPORT_ANSWER'=>'Mogućnost prijave post(ov)a daje administrator/ica foruma.<br />Ako je prijavljivanje postova omogućeno, kod posta kojeg želiš prijaviti nalazi se gumb klik na kojeg će te provesti kroz postupak prijave posta.',
'HELP_FAQ_POSTING_REPORT_QUESTION'=>'Kako mogu prijaviti post?',
'HELP_FAQ_POSTING_SIGNATURE_ANSWER'=>'Potpis možeš napraviti/uređivati u svom korisničkom profilu <em>[Profil/Postavke]</em>.<br />Ako si upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a u neki post/poruku ne želiš dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke odoznačiš opciju dodavanja potpisa.<br />Ako nisi upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a u neki post/poruku želiš dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke označiš opciju dodavanja potpisa.',
'HELP_FAQ_POSTING_SIGNATURE_QUESTION'=>'Kako mogu dodati potpis?',
'HELP_FAQ_POSTING_WARNING_ANSWER'=>'Svaki/a administrator/ica postavlja vlastita pravila koja vrijede na [njegovom(im)/njezinom(im)] forumu/ima. Ne vrijede na svim forumima ista pravila. Ako misli da si prekršio/la [jedno od/više] pravila, može te upozoriti. Ako dobiješ upozorenje, imaj na umu da je to odluka administratora/ice foruma te da phpBB Limited nema ništa s time.',
'HELP_FAQ_POSTING_WARNING_QUESTION'=>'Zašto sam dobio/la upozorenje?',
'HELP_FAQ_SEARCH_BLANK_ANSWER'=>'Pretraživanje je rezultiralo s previše rezultata koje server nije mogao obraditi. Budi određeniji/a te pokušaj [s] naprednim pretražnikom.',
'HELP_FAQ_SEARCH_BLANK_QUESTION'=>'Zašto mi se “pojavila” prazna stranica?',
'HELP_FAQ_SEARCH_FORUM_ANSWER'=>'Upisivanjem termina u kućicu za pretraživanje na početnoj stranici/forumu/temi odnosno klikom na <em>Pretražnik/Napredno pretraživanje</em> [link se nalazi na svim stranicama i vodi na formu naprednog pretraživanja].',
'HELP_FAQ_SEARCH_FORUM_QUESTION'=>'Kako mogu pretraživati forum?',
'HELP_FAQ_SEARCH_MEMBERS_ANSWER'=>'Klikom na <em>Članstvo</em>, link se nalazi na svim stranicama, otvorit će se stranica, s popisom članova/ica foruma, na kojoj se nalazi forma za pretraživanje [<em>Pronađi korisničko ime</em>].',
'HELP_FAQ_SEARCH_MEMBERS_QUESTION'=>'Kako mogu (pre)traži(va)ti korisnike/ce?',
'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'=>'Vjerojatno si upisao/la previše [uobičajenih] termina koje phpBB ne indeksira ili si bio/la previše nejasan(a)/neodređen(a). Budi određeniji/a te pokušaj [s] naprednim pretražnikom.',
'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'=>'Zašto pretraživanje nije dalo rezultat(a)e?',
'HELP_FAQ_SEARCH_OWN_ANSWER'=>'Klikom na link <em>Tvoji postovi</em>, koji se nalazi u korisničkom profilu <em>[Profil/Postavke] (na INFO dijelu Početne izborničke stranice)</em>, odnosno na stranici <em>Članstva</em>, koja prikazuje [tvoj] profil, odnosno izborom opcije <em>Tvoji postovi</em>, s padajućeg izbornika <em>Linki</em>, možeš pronaći vlastite postove, dok teme koje si pokrenuo/la možeš pronaći naprednim pretražnikom.',
'HELP_FAQ_SEARCH_OWN_QUESTION'=>'Kako mogu pronaći [sve] vlastite postove/teme?',
'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'=>'Prilikom pregledavanja postova moguće je vidjeti dvije slike ispod korisničkih imena.<br />Prva slika, statusnica, povezana je sa statusom korisnika/ce; obično su to zvjezdice/blokovi koji označavaju: koliko je postova postao/la korisnik/ca odnosno funkciju korisnika/ce na forumu [npr. administrator/ica].<br />Ispod nje se može nalaziti veća slika zvana avatar [obično jedinstvena/osobna za svakog/u korisnika/cu].<br />Dopuštenja o korištenju statusnica/avatara, kao i izbor dostupnosti istih, daje administrator/ica foruma [slobodno ga/ju kontaktiraj (sa) zamolbom o dopuštenju statusnica/avatara ako isto/a nije dao/la].',
'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'=>'Avatara možeš dodati u svom korisničkom profilu <em>[Profil/Postavke]</em> putem jedne od sljedeće četiri metode: korištenjem Gravatara, (iza)biranjem iz Galerije avatara, linkanjem na avatara odnosno pohranjivanjem avatara.',
'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'=>'Kako mogu dodati avatara?',
'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'=>'Što trebam napraviti da bi se vidjela slika ispod mojeg korisničkog imena?',
'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'=>'Sve tvoje postavke, ako si registriran/a, pohranjene su u bazi.<br /><em>Prijaviš se</em> i klikneš na link <em>Profil/Postavke</em> što će te odvesti na stranicu na kojoj možeš promijenite sve svoje postavke.',
'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'=>'Kako mogu promijeniti svoje postavke?',
'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'=>'Ako je administrator/ica omogućio/la slanje poruka elektroničkom poštom korisnicima/ama foruma putem ugrađenog obrasca elektroničke pošte: tu opciju mogu koristiti samo registrirani/e korisnici/e [čime se sprječava zlouporaba forumova sustava elektroničke pošte od strane anonimnih osoba].',
'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'=>'Zašto se trebam prijaviti ako želim korisniku/ci foruma poslati poruku elektroničkom poštom?',
'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'=>'U korisničkom profilu [<em>Profil/Postavke</em>] upališ opciju <em>Sakrij moj online status</em> [čime ćeš (p)ostati vidljiv/a samo sebi i administratoru/ici, a za ostale ćeš postati skriven/a].',
'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'=>'Kako mogu onemogućiti pojavu mog korisničkog imena na online popisu?',
/**
O hrvatskom jezičnom paketu
	Tko i kako do - original?
Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je: Ančica Sečan Matijaščić.
Zadnju verziju ovog mog kompletnog prijevoda možeš preuzeti sa: ancica.sunceko.net</a>.
	Smijem li “preraditi”/“prerađivati” ovaj prijevod?
Smiješ, uz uvjet: da mene, kao originalnu autoricu ovog mog kompletnog prijevoda, ne izbrišeš, (a) što znači da niti smiješ izbrisati moje podatke niti smiješ sebe odnosno ikoga/išta drugo potpisati kao autora/icu ovog mog kompletnog prijevoda.
Ako napraviš ikakve izmjene ovog mog prijevoda, dužan/na si to naznačiti na sljedeći način:
	- u datoteci “common.php”, pod “translation_info”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš, gornje (IiP odnosno P) može biti link], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu;
	- 3.1.x ~ u datoteci “help_faq.php”, pod “Tko i kako do - prerade?”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš (i) link do tebe odnosno kako te (pro)naći], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu, [jasno je, samo po sebi, da: “O hrvatskom jezičnom paketu”/“Tko i kako do - original?”/“Smijem li “preraditi”/“prerađivati” ovaj prijevod?” (“naslove”/“sadržaj”) ne smiješ izbrisati/“preraditi”/“prerađivati”];
		odnosno
	- 3.2.x ~ u datoteci “help/faq.php”, pod “help_faq_usersettings_language_answer”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš (i) link do tebe odnosno kako te (pro)naći], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu.
Iz gornjeg je razvidno da ne dopuštam uporabu/objavu, kako, ovog mog kompletnog prijevoda ako izbrišeš moje podatke iz njega, tako (ni), preradu ovog mog kompletnog prijevoda ako nije naznačeno, izričito (i to) u skladu s gornjom uputom, da se radi o preradi ovog mog kompletnog prijevoda [naime, tijekom godina, počev od 2003., do [(a), nažalost, i dalje (i)] danas, 2017., Netom su se počele pojavljivati razno razne “prerade” ovog mog kompletnog prijevoda, “izvitoperenog” do te mjere da se činilo kao da se radi o radu nepismene osobe, koja jedva natuca hrvatski jezik, a pravopis i gramatika su joj nepoznati pojmovi, (a) pri čemu nije bilo navedeno da se radilo o “prtljanju” po mom radu i tko ga je upropastio/la odnosno “moji originali”, ali, potpisani od strane osoba koje prstom nisu mrdnule osim što su moje podatke zamijenile svojima, plus minus “varijacije na temu”, (a) što je: nedopustivo(!)].
Danas će biti toplo i sunčano.
	Tko i kako do - prerade?
Clara pacta, boni amici! (;
*/
'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'=>'Je. phpBB je [lokaliziran] preveden na više od 50 jezika.<br />Ako administrator/ica <em>nije instalirao/la</em> jezični paket koji želiš, pitaj ga/ju može li ga instalirati.<br />Ako ne postoji prijevod na tvoj jezik, slobodno ga napravi (a) više informacija o čemu možeš (pro)naći na <a href="https://www.phpbb.com/">phpBB</a>&reg; stranicama.<br /><br /><strong>O hrvatskom jezičnom paketu<br /></strong>Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je: <a href="http://ancica.sunceko.net/">Ančica Sečan Matijaščić</a>.<br />Zadnju verziju ovog mog kompletnog prijevoda možeš preuzeti sa: <a href="http://ancica.sunceko.net">ancica.sunceko.net</a>.',
/**
O hrvatskom jezičnom paketu
	Tko i kako do - original?
Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je: Ančica Sečan Matijaščić.
Zadnju verziju ovog mog kompletnog prijevoda možeš preuzeti sa: ancica.sunceko.net</a>.
	Smijem li “preraditi”/“prerađivati” ovaj prijevod?
Smiješ, uz uvjet: da mene, kao originalnu autoricu ovog mog kompletnog prijevoda, ne izbrišeš, (a) što znači da niti smiješ izbrisati moje podatke niti smiješ sebe odnosno ikoga/išta drugo potpisati kao autora/icu ovog mog kompletnog prijevoda.
// <!-- Kocka je hičena! -->
Ako napraviš ikakve izmjene ovog mog prijevoda, dužan/na si to naznačiti na sljedeći način:
	- u datoteci “common.php”, pod “translation_info”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš, gornje (IiP odnosno P) može biti link], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu;
	- 3.1.x ~ u datoteci “help_faq.php”, pod “Tko i kako do - prerade?”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš (i) link do tebe odnosno kako te (pro)naći], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu, [jasno je, samo po sebi, da: “O hrvatskom jezičnom paketu”/“Tko i kako do - original?”/“Smijem li “preraditi”/“prerađivati” ovaj prijevod?” (“naslove”/“sadržaj”) ne smiješ izbrisati/“preraditi”/“prerađivati”];
		odnosno
	- 3.2.x ~ u datoteci “help/faq.php”, pod “help_faq_usersettings_language_answer”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ako želiš (i) link do tebe odnosno kako te (pro)naći], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu.
Iz gornjeg je razvidno da ne dopuštam uporabu/objavu, kako, ovog mog kompletnog prijevoda ako izbrišeš moje podatke iz njega, tako (ni), preradu ovog mog kompletnog prijevoda ako nije naznačeno, izričito (i to) u skladu s gornjom uputom, da se radi o preradi ovog mog kompletnog prijevoda [naime, tijekom godina, počev od 2003., do [(a), nažalost, i dalje (i)] danas, 2017., Netom su se počele pojavljivati razno razne “prerade” ovog mog kompletnog prijevoda, “izvitoperenog” do te mjere da se činilo kao da se radi o radu nepismene osobe, koja jedva natuca hrvatski jezik, a pravopis i gramatika su joj nepoznati pojmovi, (a) pri čemu nije bilo navedeno da se radilo o “prtljanju” po mom radu i tko ga je upropastio/la odnosno “moji originali”, ali, potpisani od strane osoba koje prstom nisu mrdnule osim što su moje podatke zamijenile svojima, plus minus “varijacije na temu”, (a) što je: nedopustivo(!)].
Danas će biti toplo i sunčano.
	Tko i kako do - prerade?
Clara pacta, boni amici! (;
*/
'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'=>'Je li moguć prikaz sučelja foruma na drugom/im jeziku/cima?',
'HELP_FAQ_USERSETTINGS_RANK_ANSWER'=>'Većina foruma koristi statuse za prikaz broja postova koje je postao/la određeni/a korisnik/ca te za identifikaciju korisnika/ca koji/e obavljaju određene funkcije na forumu [obično oni/e imaju poseban status, npr. administratori/ce, moderatori/ce].<br />U pravilu, svoj status ne možeš direktno promijeniti.<br />Zloupotrebljavanje foruma, u smislu postanja puno postova samo zato da bi se dosegao što veći status, nema nikakvog smisla jer administratori(ce)/moderatori(ce) mogu <em>smanjiti</em> nečiji status [npr. smanjenjem broja postova...].',
'HELP_FAQ_USERSETTINGS_RANK_QUESTION'=>'Kako mogu promijeniti svoj status?',
'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'=>'Ako si siguran/na da si postavio/la točnu <em>vremensku zonu</em>, ali je vrijeme i dalje netočno prikazano, najvjerojatniji razlog je da server nije dobro podešen. Ako je potonje u pitanju, molim(o), obavijesti administratora/icu [da ispravi grešku].',
'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'=>'Zašto je vrijeme i dalje prikazano netočno iako sam promijenio/la vremensku zonu?',
'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'=>'Zanemarimo li mogućnost, što se vrlo rijetko događa, da server nije dobro podešen, vrijeme je gotovo uvijek točno prikazano, no, može biti da je ono što vidiš vrijeme <em>druge vremenske zone</em>. Ako je to slučaj, promijeni postavke svojeg korisničkog profila tako da izabereš onu vremensku zonu koja odgovara području u kojem se nalaziš, npr. Zagreb. Uzmi u obzir da mijenjanje vremenske zone, kao i većinu postavki, može napraviti samo registrirani/a korisnik/ca.',
'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'=>'Zašto je vrijeme prikazano netočno?',
));
