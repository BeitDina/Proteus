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
 * Ελληνική μετάφραση από την ομάδα του phpbbgr.com
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
	'HELP_BBCODE_BLOCK_IMAGES'					=> 'Εμφάνιση εικόνων στις δημοσιεύσεις',
	'HELP_BBCODE_BLOCK_INTRO'					=> 'Εισαγωγή',
	'HELP_BBCODE_BLOCK_LINKS'					=> 'Δημιουργία Συνδέσμων',
	'HELP_BBCODE_BLOCK_LISTS'					=> 'Δημιουργία λίστας',
	'HELP_BBCODE_BLOCK_OTHERS'					=> 'Άλλα Θέματα',
	'HELP_BBCODE_BLOCK_QUOTES'					=> 'Παράθεση και εμφάνιση κειμένου με σταθερό πλάτος',
	'HELP_BBCODE_BLOCK_TEXT'					=> 'Μορφοποίηση Κειμένου',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'		=> 'Τα συνημμένα μπορούν τώρα να τοποθετηθούν σε οποιοδήποτε μέρος της δημοσίευσης, χρησιμοποιώντας τον νέο <strong>[attachment=][/attachment]</strong> BBCode, εάν η λειτουργία συνημμένων έχει ενεργοποιηθεί από τον διαχειριστή του συστήματος συζητήσεων και αν σας δίνονται τα κατάλληλα δικαιώματα για να δημιουργήσετε συνημμένα. Στην οθόνη δημοσίευσης υπάρχει ένα αναπτυσσόμενο πλαίσιο (αντιστοίχως ένα κουμπί) για την τοποθέτηση ενσωματωμένων συνημμένων.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Προσθήκη συνημμένων μέσα σε μια δημοσίευση',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'			=> 'Το phpBB περιλαμβάνει ένα BBCode για να ενσωματώνετε εικόνες στις δημοσιεύσεις. Δύο πολύ σημαντικά πράγματα που πρέπει να θυμάστε όταν χρησιμοποιείτε αυτήν την ετικέτα είναι: πολλά μέλη δεν εκτιμούν πολλές εικόνες να εμφανίζονται σε μια δημοσίευση και, δεύτερον, αυτή η εικόνα πρέπει να είναι ήδη διαθέσιμη στο διαδίκτυο (δεν μπορεί να υπάρχει μόνο στον υπολογιστή σας, για παράδειγμα, εκτός και αν διαθέτετε έναν διακομιστή ιστού!). Για να εμφανίσετε μια εικόνα πρέπει να περικλείσετε τη διεύθυνση URL που παραπέμπει στην εικόνα με <strong>[img][/img]</strong> ετικέτες. Για παράδειγμα:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Όπως θα παρατηρήσατε στην ενότητα URL παραπάνω, μπορείτε να περικλείσετε την εικόνα σε μια <strong>[url][/url]</strong> ετικέτα, εάν το επιθυμείτε, π.χ.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />θα δημιουργήσει:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'			=> 'Προσθήκη εικόνας σε μια δημοσίευση',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'			=> 'Ο BBCode είναι μία ιδιαίτερη εφαρμογή της HTML. Η δυνατότητα χρήσης BBCode σε δημοσιεύσεις σας στη Δ. Συζήτηση καθορίζεται από τον διαχειριστή. Επιπρόσθετα, μπορείτε να απενεργοποιήσετε τον BBCode σε μια δημοσίευση μέσω της φόρμας υποβολής. Ο BBCode είναι παρόμοιος με τη σύνταξη HTML. Οι εντολές της περικλείονται σε αγκύλες [ και ] αντί &lt; και &gt; και προσφέρει μεγαλύτερο έλεγχο του τι και πώς αυτό θα εμφανίζεται στην οθόνη. Ανάλογα με το πρότυπο που χρησιμοποιείτε, μπορεί να διαπιστώσετε ότι η προσθήκη BBCode στις δημοσιεύσεις σας γίνεται πολύ εύκολη με χρήση κουμπιών πάνω από το πεδίο μηνύματος στη φόρμα υποβολής.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'			=> 'Τι είναι o BBCode;',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'			=> 'Ο BBCode του phpBB υποστηρίζει διάφορους τρόπους δημιουργίας URIs (Uniform Resource Indicators) περισσότερο γνωστό ως διευθύνσεις URL.<ul><li>Ο πρώτος από αυτούς χρησιμοποιεί <strong>[url=][/url]</strong> ετικέτες, οτιδήποτε και αν πληκτρολογήσετε μετά το = θα το αναγκάσει το περιεχόμενο του να συμπεριφέρεται ως μια διεύθυνση URL. Για παράδειγμα, για σύνδεση προς το phpBB.com χρησιμοποιήστε:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Επισκεφτείτε το phpBB!<strong>[/url]</strong><br /><br />Αυτό θα δημιουργήσει τον παρακάτω σύνδεσμο, <a href="https://www.phpbb.com/">Επισκεφτείτε το phpBB!</a> Παρακαλώ σημειώστε ότι ο σύνδεσμος ανοίγει στο ίδιο παράθυρο ή σε ένα νέο παράθυρο ανάλογα με τις προτιμήσεις των μελών του προγράμματος περιήγησης.</li><li>Αν θέλετε η ίδια διεύθυνση URL να εμφανίζεται ως σύνδεσμος μπορείτε να το κάνετε αυτό με την απλή χρήση:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Αυτό θα δημιουργήσει τον παρακάτω σύνδεσμο, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Επιπρόσθετα, η phpBB προσφέρει μια δυνατότητα που ονομάζεται <i>Magic Links</i>, αυτή θα μετατρέψει κάθε συντακτικά σωστή διεύθυνση URL σε έναν σύνδεσμο, χωρίς να χρειάζεται να ορίζουμε επιπλέον ετικέτες ούτε καν το πρόθεμα https://. Για παράδειγμα γράφοντας www.phpbb.com μέσα στο μήνυμα σας αυτόματα θα οδηγήσει στο <a href="http://www.phpbb.com/">www.phpbb.com</a> ως σύνδεσμος όταν εμφανίζετε το μήνυμα.</li><li>Το ίδιο πράγμα ισχύει και για τις διευθύνσεις ηλεκτρονικού ταχυδρομείου, μπορείτε να καθορίσετε είτε μια διεύθυνση ρητά για παράδειγμα:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />το οποίο εμφανίζει <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ή μπορείτε να πληκτρολογήσετε μόνο no.one@domain.adr στο μήνυμά σας και θα μετατραπεί αυτόματα όταν το προβάλετε.</li></ul>Όπως συμβαίνει με όλες τις ετικέτες BBCode μπορείτε να περικλείσετε σε όλες τις διευθύνσεις URL οποιαδήποτε από τις άλλες ετικέτες, όπως <strong>[img][/img]</strong> (δείτε την επόμενη καταχώρηση), <strong>[b][/b]</strong>, κ.λ.π. Όπως και με τις ετικέτες μορφοποίησης, είναι στο χέρι σας να διασφαλιστεί το σωστό άνοιγμα και κλείσιμο με ορθή ακολουθία, για παράδειγμα το:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />δεν <span style="text-decoration: underline">είναι</span> σωστό, ως αποτέλεσμα το μήνυμα σας μπορεί να διαγραφεί, για αυτό προσέχετε.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'			=> 'Δημιουργία συνδέσμων',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'			=> 'Ο δεύτερος τύπος λίστας, λίστα με αρίθμηση, σας δίνει τον έλεγχο στο τι εμφανίζεται πριν από κάθε αντικείμενο. Για να δημιουργήσετε μια λίστα με αρίθμηση χρησιμοποιείστε <strong>[list=1][/list]</strong> για να δημιουργήσετε μια αριθμητική λίστα ή, εναλλακτικά, <strong>[list=a][/list]</strong> για αλφαβητική λίστα. Όπως και με τη λίστα με κουκκίδες, τα αντικείμενα προσδιορίζονται με τη χρήση <strong>[*]</strong>. Για παράδειγμα:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Να πληρώσω τον λογαριασμό<br /><strong>[*]</strong>Να αγοράσω γάλα του παιδιού<br /><strong>[*]</strong>Να πετάξω τον υπολογιστή μου<br /><strong>[/list]</strong><br /><br />θα παράγει τα ακόλουθα:<ol style="list-style-type: decimal;"><li>Να πληρώσω τον λογαριασμό</li><li>Να αγοράσω γάλα του παιδιού</li><li>Να πετάξω τον υπολογιστή μου</li></ol>Ενώ, για μια αλφαβητική λίστα θα χρησιμοποιήσετε:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Η πρώτη πιθανή απάντηση<br /><strong>[*]</strong>Η δεύτερη πιθανή απάντηση<br /><strong>[*]</strong>Η τρίτη πιθανή απάντηση<br /><strong>[/list]</strong><br /><br />δίνει<ol style="list-style-type: lower-alpha"><li>Η πρώτη πιθανή απάντηση</li><li>Η δεύτερη πιθανή απάντηση</li><li>Η τρίτη πιθανή απάντηση</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Η πρώτη πιθανή απάντηση<br /><strong>[*]</strong>Η δεύτερη πιθανή απάντηση<br /><strong>[*]</strong>Η τρίτη πιθανή απάντηση<br /><strong>[/list]</strong><br /><br />θα παράγει τα ακόλουθα<ol style="list-style-type: upper-alpha"><li>Η πρώτη πιθανή απάντηση</li><li>Η δεύτερη πιθανή απάντηση</li><li>Η τρίτη πιθανή απάντηση</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Η πρώτη πιθανή απάντηση<br /><strong>[*]</strong>Η δεύτερη πιθανή απάντηση<br /><strong>[*]</strong>Η τρίτη πιθανή απάντηση<br /><strong>[/list]</strong><br /><br />θα παράγει τα ακόλουθα<ol style="list-style-type: lower-roman"><li>Η πρώτη πιθανή απάντηση</li><li>Η δεύτερη πιθανή απάντηση</li><li>Η τρίτη πιθανή απάντηση</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Η πρώτη πιθανή απάντηση<br /><strong>[*]</strong>Η δεύτερη πιθανή απάντηση<br /><strong>[*]</strong>Η τρίτη πιθανή απάντηση<br /><strong>[/list]</strong><br /><br />θα παράγει τα ακόλουθα<ol style="list-style-type: upper-roman"><li>Η πρώτη πιθανή απάντηση</li><li>Η δεύτερη πιθανή απάντηση</li><li>Η τρίτη πιθανή απάντηση</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'		=> 'Δημιουργία λίστας με αρίθμηση',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'		=> 'Ο BBCode υποστηρίζει δύο τύπους λίστας, με κουκκίδες και με αρίθμηση. Είναι ουσιαστικά το ίδιο σαν τα ισοδύναμά τους HTML. Μια λίστα με κουκκίδες εμφανίζει κάθε αντικείμενο στη λίστα σας διαδοχικά το ένα μετά το άλλο δημιουργώντας εσοχές στο καθένα με μια κουκκίδα. Για να δημιουργήσετε μια λίστα με κουκκίδες χρησιμοποιήστε <strong>[list][/list]</strong> διαχωρίζοντας το κάθε τμήμα της λίστας χρησιμοποιώντας <strong>[*]</strong>. Για παράδειγμα, αν θέλετε μια λίστα με τα αγαπημένα σας χρώματα, μπορείτε να χρησιμοποιήσετε:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Κόκκινο<br /><strong>[*]</strong>Μπλε<br /><strong>[*]</strong>Κίτρινο<br /><strong>[/list]</strong><br /><br />Αυτό θα δημιουργήσει την παρακάτω λίστα:<ul><li>Κόκκινο</li><li>Μπλε</li><li>Κίτρινο</li></ul><br />Εναλλακτικά μπορείτε να προσδιορίσετε τον τύπο της κουκίδας της λίστας χρησιμοποιώντας <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, ή <strong>[list=square][/list]</strong>',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'		=> 'Δημιουργία λίστας με κουκκίδες',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'			=> 'Εάν είστε διαχειριστής με τα ανάλογα δικαιώματα σε αυτό το σύστημα συζητήσεων, μπορείτε να προσθέσετε περαιτέρω ετικέτες BBCode μέσω του τμήματος BBCodes.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'		=> 'Μπορώ να προσθέσω τις δικές μου εντολές;',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Αν θέλετε να εμφανίσετε ένα κομμάτι του κώδικα ή οτιδήποτε χρειάζεται σταθερό πλάτος π.χ. Courier γραμματοσειρά θα πρέπει να περικλείσετε το κείμενο σε <strong>[code][/code]</strong> ετικέτες, π.χ.<br /><br /><strong>[code]</strong>echo &quot;Αυτό είναι ένα τμήμα κώδικα&quot;;<strong>[/code]</strong><br /><br />Όλη η μορφοποίηση που χρησιμοποιείται στο εσωτερικό <strong>[code][/code]</strong> ετικετών, διατηρείται όταν αργότερα την προβάλετε.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'			=> 'Εμφάνιση κώδικα ή σταθερού-πλάτους κείμενο',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'			=> 'Υπάρχουν δύο τρόποι που μπορείτε να παραθέσετε κείμενο, με αναφορά και χωρίς.<ul><li>Όταν χρησιμοποιείτε τη λειτουργία παράθεσης κειμένου για να δοθεί απάντηση σε μια δημοσίευση στο σύστημα συζητήσεων θα πρέπει να λάβετε υπόψη ότι το κείμενο που προστίθεται στο παράθυρο του μηνύματος περικλείεται σε ένα <strong>[quote=&quot;&quot;][/quote]</strong> πλαίσιο. Αυτή η μέθοδος επιτρέπει την παράθεση με αναφορά σε πρόσωπο ή ότι άλλο θέλετε εσείς να βάλετε! Για παράδειγμα, για να παραθέσουμε ένα μικρό κομμάτι του κειμένου Ο Κος Κανένας έγραψε θα γράψετε:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Το κείμενο - Ο Κος Κανένας έγραψε - τοποθετείται εδώ<strong>[/quote]</strong><br /><br />Το αποτέλεσμα είναι να προστεθεί αυτόματα το Ο Κος Κανένας έγραψε: πριν το κυρίως κείμενο. Να θυμάστε πως πάντα <strong>πρέπει</strong> να συμπεριλαμβάνετε τα εισαγωγικά &quot;&quot; γύρω από το όνομα της παράθεσης, δεν είναι προαιρετικά!</li><li>Η δεύτερη μέθοδος σας επιτρέπει να παραθέσετε το κείμενο ως έχει. Για να χρησιμοποιήσετε αυτή περικλείσετε το κείμενο σας <strong>[quote][/quote]</strong> ετικέτες. Όταν δείτε το μήνυμα θα δείξει απλώς το κείμενο μέσα σε ένα πλαίσιο αποσπάσματος.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'			=> 'Παράθεση κειμένου σε απάντηση μηνύματος',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'				=> 'Ο BBCode περιλαμβάνει εντολές οι οποίες σας επιτρέπουν να αλλάξετε γρήγορα τον βασικό χαρακτήρα του κειμένου σας. Αυτό επιτυγχάνεται με τους εξής τρόπους: <ul><li>Για να πετύχετε έντονο κείμενο περικλείσετε το με τα <strong>[b][/b]</strong>, π.χ. <br /><br /><strong>[b]</strong>Γεια σας<strong>[/b]</strong><br /><br />θα εμφανίζεται: <strong>Γεια σας</strong></li><li>Για υπογραμμισμένο κείμενο χρησιμοποιήστε <strong>[u][/u]</strong>, για παράδειγμα:<br /><br /><strong>[u]</strong>Καλή μέρα<strong>[/u]</strong><br /><br />θα εμφανίζεται: <span style="text-decoration: underline">Καλή μέρα</span></li><li>Για πλάγια γραφή χρησιμοποιήστε <strong>[i][/i]</strong>, π.χ.<br /><br />Αυτό είναι <strong>[i]</strong>Καταπληκτικό!<strong>[/i]</strong><br /><br />θα εμφανισθεί ως: Αυτό είναι <i>Καταπληκτικό!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'			=> 'Πώς να κάνω το κείμενο μου έντονο, πλάγιο και υπογραμμισμένο',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'				=> 'Για να αλλάξετε το χρώμα ή το μέγεθος του κειμένου σας μπορούν να χρησιμοποιηθούν οι ακόλουθες ετικέτες. Να έχετε υπόψη ότι η τελική εμφάνιση εξαρτάται και από το λειτουργικό και το πρόγραμμα περιήγησης που χρησιμοποιείται: <ul><li>Η αλλαγή του χρώματος του κειμένου επιτυγχάνεται με το να το περικλείσετε σε <strong>[color=][/color]</strong>. Μπορείτε να χρησιμοποιήσετε ένα χρώμα με την τυποποιημένη ονομασία του (Αγγλικά red, blue, yellow, κ.λ.π.) ή σε δεκαεξαδική μορφή π.χ. #FFFFFF, #000000. Για παράδειγμα, για να δημιουργήσετε κόκκινο κείμενο μπορείτε να χρησιμοποιήσετε:<br /><br /><strong>[color=red]</strong>Γεια σας!<strong>[/color]</strong><br /><br />ή<br /><br /><strong>[color=#FF0000]</strong>Γεια σας!<strong>[/color]</strong><br /><br />Και τα δύο θα εμφανίσουν: <span style="color:red">Γεια σας!</span></li><li>Αλλαγή του μεγέθους της γραμματοσειράς γίνετε με παρόμοιο τρόπο χρησιμοποιώντας το <strong>[size=][/size]</strong>. Αυτή η ετικέτα εξαρτάται από το πρότυπο που έχει επιλέξει το μέλος αλλά η συνιστώμενη μορφή είναι μια αριθμητική τιμή που αντιπροσωπεύει το μέγεθος του κειμένου σε επί τοις εκατό, αρχίζοντας από 20 (πολύ μικρό) έως 200 (πολύ μεγάλο) από προεπιλογή. Για παράδειγμα:<br /><br /><strong>[size=30]</strong>ΜΙΚΡΟ<strong>[/size]</strong><br /><br />θα είναι γενικώς <span style="font-size:30%;">ΜΙΚΡΟ</span><br /><br />ενώ:<br /><br /><strong>[size=200]</strong>ΜΕΓΑΛΟ!<strong>[/size]</strong><br /><br />θα είναι: <span style="font-size:200%;">ΜΕΓΑΛΟ!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'			=> 'Πώς αλλάζω το χρώμα ή το μέγεθος του κειμένου',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'			=> 'Ναι, φυσικά μπορείτε, για παράδειγμα, για να πάρετε την προσοχή κάποιου μπορείτε να γράψετε:<br /><br /><strong>[size=200][color=red][b]</strong>ΠΡΟΣΟΧΗ!<strong>[/b][/color][/size]</strong><br /><br />αυτό θα εμφανίζεται: <span style="color:red;font-size:200%;"><strong>ΠΡΟΣΟΧΗ!</strong></span><br /><br />Δεν συνιστούμε την αλόγιστη χρήση του κειμένου που μοιάζει με αυτό όμως! Να θυμάστε ότι είναι στο χέρι σας, ο συγγραφέας, να εξασφαλίσει ότι οι ετικέτες πρέπει να τερματίζονται σωστά. Για παράδειγμα, η παρακάτω σύνταξη είναι εσφαλμένη:<br /><br /><strong>[b][u]</strong>Σφάλμα σύνταξης<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'			=> 'Μπορώ να συνδυάσω τις ετικέτες μορφοποίησης;',
));