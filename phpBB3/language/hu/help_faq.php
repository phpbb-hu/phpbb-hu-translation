<?php
/** 
*
* help_faq [Hungarian]
*
* @package language
* @version $Id: help_faq.php,v 1.7 2007-04-22 19:11:52 fberci Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/

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

$help = array(
	array(
		0 => '--',
		1 => 'Belépési és regisztrációs kérdések'
	),
	array(
		0 => 'Miért nem tudok beléni?',
		1 => 'Ennek számos oka lehet. Először is ellenőrizd, hogy jól adtad-e meg a felhasználóneved és a jelszavad. Ha igen, lépj kapcsolatba a fórum adminisztrátorával, hogy meggyőződj róla, nem lettél kitiltva. Az is lehetséges, hogy a weboldal üzemeltetőjének oldalán lépett fel valamilyen konfigurációs hiba, melyet javítaniuk kéne.' //? talán átírhatnánk az értelmét...
	),
	array(
		0 => 'Miért kell egyáltalán regisztrálnom?',
		1 => 'A regisztráció nem feltétlenül kötelező, a fórum adminisztrátorán múlik, hogy megköveteli-e hozzászólások küldéséhez. Mindemellett a regisztrációval plusz lehetőségek is elérhetővé válnak a számodra, mint például avatar használata, privát üzenetek, illetve e-mailek küldése, csatlakozás csoportokhoz stb. A regisztráció csupán néhány másodpercet vesz igénybe, így javasoljuk, hogy éljél vele.'
	),
	array(
		0 => 'Miért kerülök kiléptetésre automatikusan?', //? 'Miért lép ki automatikusan a rendszerből?'
		1 => 'Ha belépéskor nem jelölöd be az <em>Automatikus bejelentkezés</em> opciót, a rendszer csak egy előre meghatározott ideig hagy belépve. Ez a viselkedés meggátolja az azonosítóddal való visszaélést. A tartós belépve maradáshoz jelöld be az említett opciót. Ezen funkció használata nem ajánlott, ha nyilvános helyről használod a fórumot, például könyvtárból, internetkávézóból vagy egyetemi laborból. Ha nem látod a jelölőnégyzeted, az adminisztrátor valószínűleg kikapcsolta ezt a funkciót.'
	),
	array(
		0 => 'Hogyan tudom megakadályozni, hogy mások lássák, mikor vagyok jelen?',
		1 => 'A Felhasználói vezérlőpultban a „Fórum beállítások” menüpont alatt található a „Jelenlét elrejtése” beállítás. Ha ezt <samp>Igen</samp>re állítod, csak az adminisztrátorok, a moderátorok, illetve saját magad fogod látni, hogy jelen vagy-e.' //? _egy_ beállítás
	),
	array(
		0 => 'Elfelejtettem a jelszavamat!',
		1 => 'Semmi pánik! A jelszavad ugyan nem lehet utólag kideríteni, de lehetőséged van új készítésére. Ehhez menj a belépés oldalra, majd kattints az <em>Elfelejtettem a jelszavam</em> linkre. Kövesd az utasításokat, és rövid belül újra be kell tudnod lépned.'
	),
	array(
		0 => 'Regisztráltam, de mégsem tudok belépni',
		1 => 'Először is ellenőrizd le, hogy helyesen adtad-e meg a felhasználóneved és a jelszavad. Ha igen, akkor két dolog történhetett. Amennyiben a COPPA-támogatás be van kapcsolva, és a regisztráció során a <em>13 évesnél fiatalabb vagyok</em> linkre kattintottál, követned kell a kapott utasításokat. Ha nem ez a helyzet, akkor valószínű, hogy aktiválnod kell az azonosítód. Számos fórum megköveteli, hogy az új azonosítók aktiválásra kerüljenek, mielőtt használatba lehetne venni őket. Ezt vagy az adminisztrátornak vagy a felhasználónak kell megtennie. Mindenesetre a regisztrációnál elvileg tájékoztatásra kerültél, hogy szükséges-e az azonosító aktiválása. Ha kaptál egy e-mailt, akkor kövesd az utasításait, ha nem, lehet, hogy rossz e-mail címet adtál meg. Az aktiváció megkövetelésének egyik célja a <em>rosszindulatú</em> felhasználók névtelen rongálásának megakadályozása. Ha biztos vagy benne, hogy helyes e-mail címet adtál meg, próbálj meg kapcsolatba lépni a fórum adminisztrátorával.' // Ezt is át kéne írni, angolból lett fordítva - és ez eléggé látszik is rajta
	),
	array(
		0 => 'Korábban regisztráltam magam, azonban már nem tudok belépni?!',
		1 => 'Ennek a leggyakoribb oka, hogy hibás felhasználónevet vagy jelszót adtál meg (ezekkel az adatokkal kapcsolatban nézd meg az e-mailt, melyet a regisztrációkor kaptál), vagy az adminisztrátor valamilyen okból kifolyólag törölte az azonosítód. Ez utóbbinak egy lehetséges oka, hogy nem küldtél egy hozzászólást se. Néhány fórumon ugyanis szokás, hogy bizonyos időközönként eltávolítják az olyan felhasználókat, akik nem küldtek hozzászólást, hogy csökkentsék az adatbázis méretét. Próbálj meg újra regisztrálni, és bekapcsolódni a beszélgetésekbe.'
	),
	array(
		0 => 'Mi az a COPPA?',
		1 => 'A COPPA, vagyis az 1998-as „Child Online Privacy and Protection Act” (gyerekek online adatvédelméről intézkedő törvény) egy egyesült állomokbeli törvény, mely megköveteli a honlapoktól, hogy írásos szülői vagy gondviselői beleegyezéssel rendelkezzenek 13 éven aluli személyektől való adatgyűjtéshez. Ez a törvény csak az Amerikai Egyesült Államokban lévő szervereken működő fórumokra érvényes, tehát Magyarországon nem. Ha nem vagy biztos benne, hogy ez a törvény vonatkozik-e rád, vagy a fórumra, melyre regisztrálsz, kérj jogi segítséget. Kérjük tartsd szem előtt, hogy a phpBB csapat nem tud jogi tanácsot adni, és az alább leírtakon kívül semmilyen aggály esetén sem hozzájuk kell fordulni.', //? az első mondatot kicsit leegyszerűsítettem - úgy se lényegesek a részletek
	),
	array(
		0 => 'Miért nem tudok regisztrálni?',
		1 => 'Lehet, hogy a weboldal tulajdonosa letiltotta az IP-címed vagy a regisztrálni kívánt felhasználónevet. Az is előfordulhat, hogy a regisztráció kikapcsolásra került, hogy ne tudjanak új felhasználók regisztrálni. További segítségért lépj kapcsolatba a fórum adminisztrátorával.',
	),
	array(
		0 => 'Mit csinál a „Fórum sütik törlése”?',
		1 => 'Ez a funkció törli az összes phpBB3 által küldött sütit. A sütik feladata az azonosítás, illetve a beléptetés, valamint – ha a fórum tulajdonosa beállítota – a hozzászólások olvasottságának követése és ehhez hasonló funkciók.',
	),
	array(
		0 => '--',
		1 => 'Felhasználói beállítások'
	),
	array(
		0 => 'Hogyan tudom megváltoztatni a beállításaimat?',
		1 => 'Amennyiben regisztrált felhasználó vagy, minden beállításod az adatbázisban kerül tárolásra. Ezek megváltoztatásához kattins a <em>Felhasználói vezérlőpult</em> linkre (általában az oldal tetején található). Itt megváltoztathatod az összes beállításodat.'
	),
	array(
		0 => 'Nem pontos az idő!',
		1 => 'Habár ritkán előfordulnak olyan szerverek, melyeken nem pontos az idő, valószínűleg nem ez a helyzet. Feltehetően az időpontok más időzóna szerint kerülnek megjelenítésre, mint amiben vagy. Ez esetben változtasd meg az időzónád a tartózkodási helyednek megfelelően. Kérjük vedd figyelembe, hogy az időzónát – mint a legtöbb más felhasználói beállítást – csak regisztrált felhasználók változtathatják meg. Tehát ha még nem regisztráltál, ez egy jó alakalom, hogy megtedd.'
	),
	array(
		0 => 'Megváltoztattam az időzónát, de még mindig pontatlan az idő!',
		1 => 'Ha biztos vagy benne, hogy helyes időzónát adtál meg, és a nyári időszámítást is jól állítottad be, de az idő még mindig más, akkor a szerver órája pontatlan – ezt az adminisztrátoroknak javítaniuk kell majd.' //? adminisztrátoroknak javítaniuk kell majd??; más - pontatlan
	),
	array(
		0 => 'A használni kívánt nyelv nincs a listában!',
		1 => 'Ennek az az oka, hogy az adminisztrátor nem telepítette a megfelelő nyelvi csomagot, vagy hogy még nem készült fordítás a kívánt nyelvre. Kérd meg az adminisztrátort, hogy telepítse a nyelvi csomagot, amennyiben viszont még nem létezik, nyugodtan készítsd el a fordítást. További információért keresd fel a phpBB Csoport weboldalát (a link az oldal alján található).'
	),
	array(
		0 => 'Hogyan jeleníthetek meg egy képet a nevem alatt?',
		1 => 'A hozzászólások megtekintésénél a felhasználónév alatt két kép szerepelhet. Az első a rangot mutatja (ezek általában csillagok vagy más elemek formájában kerülnek megjelenítésre, a számuk mutatja mennyi hozzószólást küldtél eddig a fórumon, vagy hogy milyen státuszod van). Ez alatt lehet egy nagyobb kép, az avatar, mely a legtöbb felhasználónak egyedi és személyes. A fórum adminisztrátorától függ, hogy engedélyezett-e az avatarok használata, illetve milyen módot lehet megadni ezt a képet. Ha nem tudsz avatart használni, az az adminisztrátor döntése, tájékozódj nála az okokról.'
	),
	array(
		0 => 'Hogyan tudom megváltoztatni a rangomat?',
		1 => 'Általában a felhasználók nem tudják közvetlenül megváltoztatni a rangjukat. A legtöbb fórumon arra használják a rangokat, hogy jelezzék a felhasználó hozzászólásainak számát, illetve hogy megkülönböztessenek néhány felhasználót, mint például az adminisztrátorokat és a moderátorokat, akik speciális ranggal rendelkezhetnek. Kérünk ne szólj hozzá feleslegesen a témákhoz, csak hogy növeld a hozzászólásaid számát, hiszen valószínű, hogy ezt a moderátorok fel fogják fedezni, és egyszerűen csökkenteni fogják a hozzászólásaid számát.'
	),
	array(
		0 => 'Miért kell bejelentkeznem e-mail küldéséhez?',
		1 => 'Csak regisztrált felhasználók küldhetnek e-mailt a beépített e-mail funkció segítségével (ha az adminisztrátor bekapcsolta ezt a lehetőséget). Ez a névtelen emberek nemkívánt leveleinek elkerülése végett van így. '
	),
	array(
		0 => '--',
		1 => 'Posting Issues'
	),
	array(
		0 => 'How do I post a topic in a forum?',
		1 => 'To post a new topic in one of the forums, click the relevant button on either the forum or topic screens. You may need to register before you can post a message, the facilities available to you are listed at the bottom of the forum and topic screens (the <em>You can post new topics, You can vote in polls, etc.</em> list).'
	),
	array(
		0 => 'How do I edit or delete a post?',
		1 => 'Unless you are the board admin or forum moderator you can only edit or delete your own posts. You can edit a post (sometimes for only a limited time after it was made) by clicking the <em>edit</em> button for the relevant post. If someone has already replied to the post you will find a small piece of text output below the post when you return to the topic, which lists the number of times you edited it along with when. This will not appear if no one has replied, nor will not appear if moderators or administrators edit the post though they may leave a note as to why they’ve edited the post at their own disgression. Please note that normal users cannot delete a post once someone has replied.'
	),
	array(
		0 => 'How do I add a signature to my post?',
		1 => 'To add a signature to a post you must first create one, this is done via your profile. Once created you can check the <em>Add Signature</em> box on the posting form to add your signature. You can also add a signature by default to all your posts by checking the appropriate radio box in your profile (you can still prevent a signature being added to individual posts by un-checking the add signature box on the posting form).'
	),
	array(
		0 => 'How do I create a poll?',
		1 => 'Creating a poll is easy, when you post a new topic (or edit the first post of a topic, if you have permission) you should see an <em>Add Poll</em> form below the main posting box (if you cannot see this then you probably do not have rights to create polls). You should enter a title for the poll and then at least two options (to set an option type in the poll question and click the <em>Add option</em> button. You can also set a time limit for the poll, 0 is an infinite poll. There will be a limit to the number of options you can list, this is set by the board administrator.'
	),
	array(
		0 => 'How do I edit or delete a poll?',
		1 => 'As with posts, polls can only be edited by the original poster, a moderator or board admin. To edit a poll click the first post in the topic (this always has the poll associated with it). If no one has cast a vote then users can delete the poll or edit any poll option, however if people have already placed votes only moderators or administrators can edit or delete it. This is to prevent people rigging polls by changing options mid-way through a poll'
	),
	array(
		0 => 'Why can’t I access a forum?',
		1 => 'Some forums may be limited to certain users or groups. To view, read, post, etc. you may need special authorization, only the forum moderator and board admin can grant this access, you should contact them.'
	),
	array(
		0 => 'Why can’t I vote in polls?',
		1 => 'Only registered users can vote in polls (so as to prevent spoofing of results). If you have registered and still cannot vote then you probably do not have appropriate access rights.'
	),
	array(
		0 => 'Why can’t I add attachments?',
		1 => 'The ability to add attachments can be done on a per forum, per group, or per user basis. The board administrator may not have allowed attachments to be added for the specific forum you are posting in, or perhaps only the administrator group can post attachments. Contact the board administrator if you are unsure about why you are unable to add attachments.'
	),
	array(
		0 => 'Why did I receive a warning?',
		1 => 'Each board administrator has their own set of rules for their site. If they feel you have broken one of their rules, they may issue you a warning. Please note that this is the board administrator’s decision, and the phpBB Group does not have anything to do with the warning on the given site.'
	),
	array(
		0 => 'How can I report posts to a moderator?',
		1 => 'If the board administrator has allowed it, go to the post you want to report and you should see a button that is for reporting posts. Clicking this will walk you through the steps necessary to report the post.'
	),
	array(
		0 => 'What is the “Save” button for in topic posting?',
		1 => 'This allows you to save messages to be completed and submitted at a later date. To reload them, go to the User Control Panel and follow the self explanatory options there.'
	),
	array(
		0 => 'Why does my post need to be approved?',
		1 => 'The board administrator may decide that the forum you are posting to needs to have posts reviewed first. It is also possible that the administrator has placed you in to a group of users whom he or she feels is a group that needs to have their posts reviewed before being submitted to the site. Please contact the board administrator for further details.'
	),
	array(
		0 => 'How do I bump my topic?',
		1 => 'By clicking the “Bump topic” link when you are viewing it, you can “bump” the topic to the top of the forum on the first page. However, if you do not see this, then topic bumping is disabled. It is also possible to bump the topic simply by replying to it. However, be sure to follow the rules of the site you are visiting.'
	),
	array(
		0 => '--',
		1 => 'Formatting and Topic Types'
	),
	array(
		0 => 'What is BBCode?',
		1 => 'BBCode is a special implementation of HTML, whether you can use BBCode is determined by the administrator (you can also disable it on a per post basis from the posting form). BBCode itself is similar in style to HTML, tags are enclosed in square braces [ and ] rather than &lt; and &gt; and it offers greater control over what and how something is displayed. For more information on BBCode see the guide which can be accessed from the posting page.'
	),
	array(
		0 => 'Can I use HTML?',
		1 => 'No. It is not possible to post HTML on this board and have it rendered as HTML. Most formatting which can be carried out using HTML can also be applied using BBCode instead.'
	),
	array(
		0 => 'What are Smilies?',
		1 => 'Smilies, or Emoticons are small graphical images which can be used to express some feeling using a short code, e.g. :) means happy, :( means sad. The full list of emoticons can be seen via the posting form. Try not to overuse smilies though, they can quickly render a post unreadable and a moderator may decide to edit them out or remove the post altogether. The board administrator may also have set a limit to the number of such smilies you may use within a post.'
	),
	array(
		0 => 'Can I post images?',
		1 => 'Yes, images can be shown in your posts. However; if the administrator has allowed attachments, you may be able to upload the image to the board. Otherwise, you must link to an image stored on a publicly accessible web server, e.g. http://www.example.com/my-picture.gif. You cannot link to pictures stored on your own PC (unless it is a publicly accessible server) nor images stored behind authentication mechanisms, e.g. hotmail or yahoo mailboxes, password protected sites, etc. To display the image use the BBCode [img] tag.'
	),
	array(
		0 => 'What are global announcements?',
		1 => 'Global announcements contain important information and you should read them as soon as possible. Global announcements will appear at the top of every forum and also within your User Control Panel. Whether or not you can post a global announcement depends on the permissions required, these are set by the administrator.'
	),
	array(
		0 => 'What are announcements?',
		1 => 'Announcements often contain important information for the forum you are currently reading and you should read them as soon as possible. Announcements appear at the top of every page in the forum to which they are posted. As with global announcements, whether or not you can post an announcement depends on the permissions required, these are set by the administrator.'
	),
	array(
		0 => 'What are sticky topics?',
		1 => 'Sticky topics appear below any announcements within the forum and only on the first page. They are often quite important so you should read them where possible. As with announcements the board administrator determines what permissions are required to post sticky topics in each forum.'
	),
	array(
		0 => 'What are locked topics?',
		1 => 'Locked topics are set this way by either the forum moderator or board administrator. You cannot reply to locked topics and any poll it contained is automatically ended. Topics may be locked for many reasons.'
	),
	array(
		0 => 'What are topic icons?',
		1 => 'Topic icons are images which can be associated with posts to indicate their content. The ability to use topic icons depends on the permissions set by the administrator.'
	),
	array(
		0 => '--',
		1 => 'User Levels and Groups'
	),
	array(
		0 => 'What are Administrators?',
		1 => 'Administrators are people assigned the highest level of control over the entire board. These people can control all facets of board operation which includes setting permissions, banning users, creating usergroups or moderators, etc, dependant on the board founder and what permissions he or she has given the other administrators. They can also have full moderator capabilities in all the forums, depending on what the board founder has allowed.'
	),
	array(
		0 => 'What are Moderators?',
		1 => 'Moderators are individuals (or groups of individuals) whose job it is to look after the running of the forums from day to day. They have the power to edit or delete posts and lock, unlock, move, delete and split topics in the forum they moderate. Generally moderators are there to prevent people going <em>off-topic</em> or posting abusive or offensive material.'
	),
	array(
		0 => 'What are Usergroups?',
		1 => 'Usergroups are a way in which board administrators can group users. Each user can belong to several groups (this differs from most other boards) and each group can be assigned individual access rights. This makes it easy for administrators to set up several users as moderators of a forum, or to give them access to a private forum, etc.'
	),
	array(
		0 => 'How do I join a Usergroup?',
		1 => 'To join a Usergroup click the Usergroup link within your User Control Panel, you can then view all usergroups. Not all groups are <em>open access</em>, some may require approval to join, some are closed and some may even have hidden memberships. If the group is open then you can join it by clicking the appropriate button. If a group requires approval to join you may request to join it by clicking the appropriate button. The user group leader will need to approve your request, they may ask why you want to join the group. Please do not pester a group leader if they turn your request down, they will have their reasons.'
	),
	array(
		0 => 'How do I become a Usergroup Leader?',
		1 => 'When Usergroups are initially created by the board administrator, they also assign a Usergroup leader. If you are interested in creating a Usergroup then your first point of contact should be the administrator, try sending them a private message.'
	),
	array(
		0 => 'Why do some Usergroups appear in a different colour?',
		1 => 'It is possible for the board administrator to assign a colour to the members of a usergroup to make it easy to identify the members of this group.'
	),
	array(
		0 => 'What is a “Default Usergroup”?',
		1 => 'If you are a member of more than one usergroup, your default is used to determine which group colour and group rank should be shown for you by default. The board administrator may grant you permission to change your default usergroup via your User Control Panel.'
	),
	array(
		0 => 'What is “The team” link?',
		1 => 'This page provides you with a list of the board staff, including board administrators and moderators which includes details of which forums they moderate.'
	),
	array(
		0 => '--',
		1 => 'Private Messaging'
	),
	array(
		0 => 'I cannot send private messages!',
		1 => 'There are three reasons for this; you are not registered and/or not logged on, the board administrator has disabled private messaging for the entire board, or the board administrator has prevented you from sending messages. If it is the latter case you should try asking the administrator why.'
	),
	array(
		0 => 'I keep getting unwanted private messages!',
		1 => 'You may block a user from sending you private messages by using message rules within your User Control Panel. If you are receiving abusive private messages from someone inform the board admin, they have the power to prevent a user from sending private messages at all.'
	),
	array(
		0 => 'I have received a spamming or abusive email from someone on this board!',
		1 => 'We are sorry to hear that. The email form feature of this board includes safeguards to try and track users who send such posts. You should email the board administrator with a full copy of the email you received, it is very important this include the headers (these list details of the user that sent the email). They can then take action.'
	),
	array(
		0 => '--',
		1 => 'Friends and Foes'
	),
	array(
		0 => 'What is my Friends and Foes list?',
		1 => 'You can use these lists to organise other members of the forum. Members added to your friends list will be listed within your User Control Panel for quick access to see their online status and to send them private messages. Subject to template support, posts from these users may also be highlighted. If you add a user to your foes list then any posts made by them will be hidden by default.'
	),
	array(
		0 => 'How can I add / remove users to my friends or foes list?',
		1 => 'You can add users to your list in two ways. Within each user’s profile, there is a link to add them to either your friend or foe list. Alternatively from your User Control Panel, you can directly add users by entering their member name. You may also remove users from your list using the same page.'
	),
	array(
		0 => '--',
		1 => 'Searching the Forums'
	),
	array(
		0 => 'How can I search the forum?',
		1 => 'By entering a search term in the search box located on the index view, forum view or topic view. Advanced search can be accessed by clicking the “Search” link which is available on all pages on the forum.'
	),
	array(
		0 => 'Why does my search return no results?',
		1 => 'Your search was probably too vague and included many common terms which are not indexed by phpBB3. Be more specific and use the options available within Advanced search.'
	),
	array(
		0 => 'Why does my search return a blank page!?',
		1 => 'Your search returned too many results for the webserver to handle. Use Advanced search and be more specific in the terms used and forums that are to be searched.'
	),
	array(
		0 => 'How do I search for members?',
		1 => 'Go to the “Members” page and click the “Find a member” link. Once there, fill out the self explanatory options.'
	),
	array(
		0 => 'How can I find my own posts and topics?',
		1 => 'Your own posts can be retrieved either by clicking the “Search user’s posts” within the User Control Panel or via your own profile page. To search for your topics, use the Advanced search page and fill in the various options appropriately.'
	),
	array(
		0 => '--',
		1 => 'Topic Subscriptions and Bookmarks'
	),
	array(
		0 => 'What is the difference between bookmarking and subscribing?',
		1 => 'Bookmarking in phpBB3 is much like bookmarking in your web browser. You aren’t necessarily alerted when there’s an update, but you can later come back to the topic. To contrast that with subscribing, subscribing will notify you when there is an update to the topic or forum on the board via your preferred method or methods.'
	),
	array(
		0 => 'How do I subscribe to specific forums or topics?',
		1 => 'To subscribe to a specific forum, once you enter the forum, you will see a “Subscribe to forum” link. This will subscribe you to the forum just like you would for a topic. To subscribe to a topic, you can either reply to the topic and check the checkbox to subscribe or you can click the link that says subscribe to topic from within the topic itself.'
	),
	array(
		0 => 'How do I remove my subscriptions?',
		1 => 'To remove your subscriptions, you simply go to your User Control Panel, or UCP for short, and follow the links to your subscriptions.'
	),
	array(
		0 => '--',
		1 => 'Attachments'
	),
	array(
		0 => 'What attachments are allowed on this board?',
		1 => 'Each board administrator can allow or disallow certain attachment types. If you are unsure what is allowed to be uploaded, contact the board administrator for assistance.'
	),
	array(
		0 => 'How do I find all my attachments?',
		1 => 'To find your list of attachments that you have uploaded, go to your User Control Panel, or UCP, and follow the links to the attachments section.'
	),
	array(
		0 => '--',
		1 => 'phpBB 3 Issues'
	),
	array(
		0 => 'Who wrote this bulletin board?',
		1 => 'This software (in its unmodified form) is produced, released and is copyright <a href="http://www.phpbb.com/">phpBB Group</a>. It is made available under the GNU General Public Licence and may be freely distributed, see link for more details'
	),
	array(
		0 => 'Why isn’t X feature available?',
		1 => 'This software was written by and licensed through phpBB Group. If you believe a feature needs to be added then please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the Group uses sourceforge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.'
	),
	array(
		0 => 'Who do I contact about abusive and/or legal matters related to this board?',
		1 => 'You should contact the administrator of this board. If you cannot find who this you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.'
	)
);

?>