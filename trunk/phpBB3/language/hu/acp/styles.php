<?php
/**
*
* acp_styles [Hungarian]
*
* @package language
* @version $Id: styles.php,v 1.11 2007-09-08 10:57:27 fberci Exp $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'A képkészletek felelősek a fórum által használt összes gombért, ikonért stb., és más nem megjelenéstől függő képekért. Itt szerkesztheted, exportálhatod, illetve törölheted a már létező képkészleteket, vagy aktiválhatod az újakat.',
	'ACP_STYLES_EXPLAIN'	=> 'Itt a fórumon elérhető megjelenéseket tudod kezelni. Egy megjelenés egy sablonból, egy stílusból és egy képkészletből áll. A megjelenéseket módosíthatod, törölheted, deaktiválhatod, újraaktiválhatod, vagy készíthetsz, illetve importálhatsz újakat is. Az elnőzet funkció segítségével azt is megnézheted, hogy egy megjelenés hogyan fog kinézni. A jelenlegi alapértelmezett megjelenés egy csillaggal van megjelölve (*). Emellett minden megjelenés mellett megjelenik, hányan használják, azonban ebben az értékben nem jelentkezik a felhasználói sablon felülírás hatása.', //?
	'ACP_TEMPLATES_EXPLAIN'	=> 'A sablonkészletek felelősek a fórum szerkezetének generálásához használt kódért. Itt szerkesztheted, törölheted, illetve exportálathod a már meglévő sablonkészleteket, vagy importálhatsz újakat.', //? preview-t kihagytam
	'ACP_THEMES_EXPLAIN'	=> 'Itt létrehozhatsz, telepíthetsz, szerkeszthetsz, törölhetsz, illetve exportálhatsz stílusokat. Egy stílus színek és képek kombinációja, mely alkalmazásra kerül a sablonon, és ezáltal megadja a fórum alap kinézetét. A lehetőségek bősége a szerver és a phpBB konfigurációjától függ, további információért lásd a dokumentációt. Kérjük, vedd figyelembe, hogy egy új stílus létrehozásánál egy stílus használata kiindulásként csak opcionális.', //?
	'ADD_IMAGESET'			=> 'Képkészlet létrehozása',
	'ADD_IMAGESET_EXPLAIN'	=> 'Itt egy új képkészletet tudsz létrehozni. A szerver konfigurációjától és az állományok jogosultságától függően további lehetőségeid is lehetnek. Például, lehet, hogy az új képkészletet ráalapozhatod egy már meglévőre. Továbbá, lehet, hogy feltölthetsz, vagy importálhatsz (a store könyvtárból) egy képkészlet csomagot. Ha feltöltesz, vagy importálsz egy csomagot, lehetőséged van rá, hogy a képkészlet neve a csomag nevéből kerüljön megállapításra (ehhez hagyd üresen a képkészlet neve mezőt).',
	'ADD_STYLE'				=> 'Megjelenés létrehozása',
	'ADD_STYLE_EXPLAIN'		=> 'Itt egy új megjelenést tudsz létrehozni. A szerver konfigurációjától és az állományok jogosultságától függően további lehetőségeid is lehetnek. Például, lehet, hogy az új megjelenést ráalapozhatod egy már meglévőre. Továbbá, lehetőséged lehet rá, hogy feltölts, vagy importálj (a store könyvtárból) egy megjelenés csomagot. Ha feltöltesz, vagy importálsz egy csomagot, a megjelenés neve automatikusan megállapításra kerül.', //?
	'ADD_TEMPLATE'			=> 'Sablon létrehozása',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Itt egy új sablont tudsz létrehozni. A szerver konfigurációjától és az állományok jogosultságától függően további lehetőségeid is lehetnek. Például, lehet, hogy az új sablont ráalapozhatod egy már meglévőre. Továbbá, lehet, hogy feltölthetsz, vagy importálhatsz (a store könyvtárból) egy sablon csomagot. Ha feltöltesz, vagy importálsz egy csomagot, lehetőséged van rá, hogy a sablon neve a csomag nevéből kerüljön megállapításra (ehhez hagyd üresen a sablon neve mezőt).',
	'ADD_THEME'				=> 'Stílus létrehozása',
	'ADD_THEME_EXPLAIN'		=> 'Itt egy új stílust tudsz létrehozni. A szerver konfigurációjától és az állományok jogosultságától függően további lehetőségeid is lehetnek. Például, lehet, hogy az új stílust ráalapozhatod egy már meglévőre. Továbbá, lehetőséged lehet rá, hogy feltölts, vagy importálj (a store könyvtárból) egy stílus csomagot. Ha feltöltesz, vagy importálsz egy csomagot, lehetőséged van rá, hogy a stílus neve a csomag nevéből kerüljön megállapításra (ehhez hagyd üresen a stílus neve mezőt).',
	'ARCHIVE_FORMAT'		=> 'Csomag típusa', //? "Archive file type"
	'AUTOMATIC_EXPLAIN'		=> 'Hagyd üresen, hogy a rendszer automatikusan próbálja megállapítani.',

	'BACKGROUND'			=> 'Háttér',
	'BACKGROUND_COLOUR'		=> 'Háttérszín',
	'BACKGROUND_IMAGE'		=> 'Háttérkép',
	'BACKGROUND_REPEAT'		=> 'Háttérismétlődés',
	'BOLD'					=> 'Félkövér',

	'CACHE'							=> 'Gyorsítótár',
	'CACHE_CACHED'					=> 'Gyorsítótárazva',
	'CACHE_FILENAME'				=> 'Sablon állomány',
	'CACHE_FILESIZE'				=> 'Állomány mérete',
	'CACHE_MODIFIED'				=> 'Módosítva',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Biztosan újra akarod tölteni a képkészlet adatait? A képkészlet konfigurációs állománya felül fogja írni a képkészlet-szerkesztővel végzett változtatásokat.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Biztosan törölni akarod az összes sablon állományod gyorsítótárazott változatát?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Biztosan újra akarod tölteni a sablon adatokat az adatbázisban a fájlrendszerben lévőkkel? Ezzel felül fognak íródni a sablonszerkesztővel végzett változtatások, melyeket azalatt történtek, hogy a sablon az adatbázisban volt tárolva.',
	'CONFIRM_THEME_REFRESH'			=> 'Biztosan újra akarod tölteni a stílus adatokat az adatbázisban a fájlrendszerben lévőkkel? Ezzel felül fognak íródni a stílusszerkesztővel végzett változtatások, melyeket azalatt történtek, hogy a stílus az adatbázisban volt tárolva.',
	'COPYRIGHT'						=> 'Copyright', //? kell valami?
	'CREATE_IMAGESET'				=> 'Új képkészlet létrehozása',
	'CREATE_STYLE'					=> 'Új megjelenés létrehozása',
	'CREATE_TEMPLATE'				=> 'Új sablonkészlet létrehozása',
	'CREATE_THEME'					=> 'Új stílus létrehozása',
	'CURRENT_IMAGE'					=> 'Jelenlegi kép',

	'DEACTIVATE_DEFAULT'		=> 'Nem tudod deaktiválni az alapértelmezett megjelenést.',
	'DELETE_FROM_FS'			=> 'Törlés a fájlrendszerből',
	'DELETE_IMAGESET'			=> 'Képkészlet törlése',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Itt törölni tudod a kiválasztott képkészletet az adatbázisból. Továbbá, ha van jogosultságod rá, a fájlrendszerből is eltávolíthatod. Kérjük, vedd figyelembe, hogy ezt a műveletet nem lehet visszacsinálni. Ha törölted a képkészletet, az végleg eltávolításra került. Ajánlott előbb kiexportálni, hogy esetlegesen később lehessen használni.',
	'DELETE_STYLE'				=> 'Megjelenés törlése',
	'DELETE_STYLE_EXPLAIN'		=> 'Itt törölni tudod a kiválasztott megjelenést. A megjelenés alkotóelemeit itt nem tudod eltávolítani, ezeket a saját oldalukon kell megtenned. Vigyázz a megjelenések törlésénél, nincs lehetőség visszacsinálásra.',
	'DELETE_TEMPLATE'			=> 'Sablon törlése',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Itt törölni tudod a kiválasztott sablonkészletet az adatbázisból. Továbbá, ha van jogosultságod rá, a fájlrendszerből is eltávolíthatod. Kérjük, vedd figyelembe, hogy ezt a műveletet nem lehet visszacsinálni. Ha törölted a sablonkészletet, az végleg eltávolításra került. Ajánlott előbb kiexportálni, hogy esetlegesen később lehessen használni.',
	'DELETE_THEME'				=> 'Stílus törlése',
	'DELETE_THEME_EXPLAIN'		=> 'tt törölni tudod a kiválasztott stílust az adatbázisból. Továbbá, ha van jogosultságod rá, a fájlrendszerből is eltávolíthatod. Kérjük, vedd figyelembe, hogy ezt a műveletet nem lehet visszacsinálni. Ha törölted a stílust, az végleg eltávolításra került. Ajánlott előbb kiexportálni, hogy esetlegesen később lehessen használni.',
	'DETAILS'					=> 'Adatok', //? Részletek?
	'DIMENSIONS_EXPLAIN'		=> 'Ha igenre állítod, a szélesség/magasság érték is hozzáadásra kerül.', //? "Selecting yes here will include width/height parameters." include 'Méretek tartalmazása'

	'EDIT_DETAILS_IMAGESET'				=> 'Képkészlet adatok szerkesztése',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Itt szerkeszteni tudod a képkészlet egyes adatait, mint például a nevét.',
	'EDIT_DETAILS_STYLE'				=> 'Megjelenés szerkesztése',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Az alábbi űrlap használatával módosíthatod ezt a megjelenést. Megváltoztathatod a sablon, a stílus és a képkészlet kombinációját, amely meghatározza magát a megjelenést. Emellett a megjelenést alapértelmezetté is teheted.', //? a már létező megjelenést?
	'EDIT_DETAILS_TEMPLATE'				=> 'Sablon adatok szerkesztése',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Itt szerkeszteni tudod a sablon egyes adatait, mint például a nevét. Emellett meg lehet rá a lehetőséged, hogy megválaszd, a sablon az adatbázisban vagy a fájlrendszerben kerüljön tárolásra. Ez a lehetőség a PHP konfigurációdtól függ, és hogy a sablonkészlet írható-e a webszerver által.',
	'EDIT_DETAILS_THEME'				=> 'Stílusadatok szerkesztése',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Itt szerkeszteni tudod a stílus egyes adatait, mint például a nevét. Emellett meg lehet rá a lehetőséged, hogy megválaszd, a stílus az adatbázisban vagy a fájlrendszerben kerüljön tárolásra. Ez a lehetőség a PHP konfigurációdtól függ, és hogy a sablonkészlet írható-e a webszerver által.',
	'EDIT_IMAGESET'						=> 'Képkészlet szerkesztése',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Itt szerkeszteni tudod a képkészlet egyes képeit, melyek meghatározzák a képkészletet. A képek mellé megadhatod a méretüket is. A méret megadása nem kötelező, de segíthet megoldani egyes böngészőkben fellépő megjelenítési hibákat. Ha nem adod meg, egy nagyon kicsit csökkentheted az adatbázis-bejegyzés méretét.',
	'EDIT_TEMPLATE'						=> 'Sablon szerkesztése',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Itt szerkeszteni tudod a sablonkészleted. Kérjük, ne feledd, hogy a szerkesztés maradandó, az elküldés után nem lehet visszacsinálni. Ha a PHP tud írni a style könyvtárban lévő sablon állományokba, akkor minden változtatás közvetlenül ezekbe az állományokba kerül. Ha a PHP nem tud írni ezekbe az állományokba, a változtatások csak az adatbázisban kerülnek elmentésre. Kérjük, légy figyelmes a sablonok szerkesztésénél, ne felejtsd el lezárni az összes sablon változót ({XXXX}) és a feltételes szerkezeteket.', //?
	'EDIT_TEMPLATE_STORED_DB'			=> 'A sablon állomány nem volt írható, ezért a sablonkészlet az adatbázisban került eltárolásra, ami így már tartalmazza a módosítást.', //?
	'EDIT_THEME'						=> 'Stílus szerkesztése',
	'EDIT_THEME_EXPLAIN'				=> 'Itt szerkeszteni tudod a kiválasztott stílust, megváltoztathatod a színeket, képeket stb.',
	'EDIT_THEME_STORED_DB'				=> 'A stíluslap állomány nem volt írható, ezért a stíluslap az adatbázisban került eltárolásra, ami így már tartalmazza a módosítást.',
	'EDIT_THEME_STORE_PARSED'			=> 'A stílusnak szüksége van rá, hogy a stíluslap fel legyen dolgozva. Ez csak akkor lehetséges, ha az az adatbázisban van tárolva.',
	'EXPORT'							=> 'Exportálás',

	'FOREGROUND'			=> 'Előtér',
	'FONT_COLOUR'			=> 'Betűszín',
	'FONT_FACE'				=> 'Betűtípus',
	'FONT_FACE_EXPLAIN'		=> 'Több betűtípust is megadhatsz, vesszővel elválasztva. Ha a felhasználónak nincs telepítve az első betűtípus, akkor a legelső működő lesz kiválasztva.',
	'FONT_SIZE'				=> 'Betűméret',

	'GLOBAL_IMAGES'			=> 'Globáli',

	'HIDE_CSS'				=> 'CSS kód elrejtése', //? "Hide raw CSS" raw magyar megfelelője? - bár ezt most úgysem használják

	'IMAGE_WIDTH'				=> 'Kép szélessége',
	'IMAGE_HEIGHT'				=> 'Kép magassága',
	'IMAGE'						=> 'Kép',
	'IMAGE_NAME'				=> 'Kép neve',
	'IMAGE_PARAMETER'			=> 'Parametér',
	'IMAGE_VALUE'				=> 'Érték',
	'IMAGESET_ADDED'			=> 'Az új képkészlet hozzáadásra került a fájlrendszerbe.',
	'IMAGESET_ADDED_DB'			=> 'Az új képkészlet hozzáadásra került az adatbázisba.',
	'IMAGESET_DELETED'			=> 'A képkészlet sikeresen törlésre került.',
	'IMAGESET_DELETED_FS'		=> 'A képkészlet eltávolításra került az adatbázisból, de lehet hogy, maradt néhány állomány a fájlrendszerben.',
	'IMAGESET_DETAILS_UPDATED'	=> 'A képkészlet adatai sikeresen frissítésre kerültek.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Kérünk, válassz ki egy csomagformátumot.', //?
	'IMAGESET_ERR_COPY_LONG'	=> 'A copyright nem lehet hosszabb 60 karakternél.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'A képkészlet neve csak alfanumerikus karaktereket, -, +, _ jelet, valamint szóközt tartalmazhat.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Már létezik képkészlet ilyen névvel.',
	'IMAGESET_ERR_NAME_LONG'	=> 'A képkészlet neve nem lehet hosszabb 30 karakternél.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'A megadott csomag nem tartalmaz helyes képkészletet.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'El kell látnod névvel a képkészletet.',
	'IMAGESET_EXPORT'			=> 'Képkészlet exportálása',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Itt kiexportálhatod a képkészletet egy csomagba. A csomag tartalmaznia fogja a szükséges adatatokat, hogy a képkészletet később telepíteni lehessen egy másik fórumon. Megválaszthatod, hogy közvetlenül le szeretnéd tölteni az állományt, vagy a store könyvtárba helyeznéd el, hogy később letöltsd FTP-n keresztül.',
	'IMAGESET_EXPORTED'			=> 'A képkészlet sikeresen kiexportálásra került, és el lett tárolva a %s helyen.', //?
	'IMAGESET_NAME'				=> 'Képkészlet neve',
	'IMAGESET_REFRESHED'		=> 'A képkészlet sikeresen újratöltésre került.',
	'IMAGESET_UPDATED'			=> 'A képkészlet sikeresen frissítésre került.',
	'ITALIC'					=> 'Dőlt',

	'IMG_CAT_BUTTONS'		=> 'Honosított gombok', //?
	'IMG_CAT_CUSTOM'		=> 'Egyéni képek',
	'IMG_CAT_FOLDERS'		=> 'Téma ikonok',
	'IMG_CAT_FORUMS'		=> 'Fórum ikonok',
	'IMG_CAT_ICONS'			=> 'Általános ikonok',
	'IMG_CAT_LOGOS'			=> 'Logók',
	'IMG_CAT_POLLS'			=> 'Szavazás képek',
	'IMG_CAT_UI'			=> 'Általános felhasználói felületi elemek',
	'IMG_CAT_USER'			=> 'Kiegészítő képek', //? Additional

	'IMG_SITE_LOGO'			=> 'Fő logó',
	'IMG_UPLOAD_BAR'		=> 'Feltöltéselőrehaladottság-mutató csík', //?
	'IMG_POLL_LEFT'			=> 'Szavazás bal vég',
	'IMG_POLL_CENTER'		=> 'Szavazás közép',
	'IMG_POLL_RIGHT'		=> 'Szavazás jobb vég',
	'IMG_ICON_FRIEND'		=> 'Hozzáadás barátnak',
	'IMG_ICON_FOE'			=> 'Hozzáadás ellenségnek',

	'IMG_FORUM_LINK'			=> 'Link fórum',
	'IMG_FORUM_READ'			=> 'Fórum',
	'IMG_FORUM_READ_LOCKED'		=> 'Lezárt fórum',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Alfórum',
	'IMG_FORUM_UNREAD'			=> 'Fórum új hozzászólásokkal',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Lezárt fórum új hozzászólásokkal',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Alfórum új hozzászólásokkal',
	'IMG_SUBFORUM_READ'			=> 'Alfórum magyarázat', //? legend
	'IMG_SUBFORUM_UNREAD'		=> 'Alfórum új hozzászólásokkal magyarázat',
	
	'IMG_TOPIC_MOVED'			=> 'Áthelyezett téma',

	'IMG_TOPIC_READ'				=> 'Téma',
	'IMG_TOPIC_READ_MINE'			=> 'Téma saját hozzászólással ', //? "Topic posted to" 'Hozzászólt téma'
	'IMG_TOPIC_READ_HOT'			=> 'Népszerű téma',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Népszerű téma saját hozzászólással',
	'IMG_TOPIC_READ_LOCKED'			=> 'Lezárt téma',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Lezárt téma saját hozzászólással',

	'IMG_TOPIC_UNREAD'				=> 'Téma új hozzászólással',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Téma saját és új hozzászólással',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Népszerű téma új hozzászólással',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Népszerű téma saját és új hozzászólással',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Lezárt téma új hozzászólással',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Lezárt téma saját és új hozzászólással',

	'IMG_STICKY_READ'				=> 'Kiemelt téma',
	'IMG_STICKY_READ_MINE'			=> 'Kiemelt téma saját hozzászólással',
	'IMG_STICKY_READ_LOCKED'		=> 'Lezárt kiemelt téma',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Lezárt kiemelt téma saját hozzászólással',
	'IMG_STICKY_UNREAD'				=> 'Kiemelt téma új hozzászólással',
	'IMG_STICKY_UNREAD_MINE'		=> 'Kiemelt téma saját és új hozzászólással',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Lezárt kiemelt téma új hozzászólással',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Lezárt kiemelt téma saját és új hozzászólással',

	'IMG_ANNOUNCE_READ'					=> 'Közlemény',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Közlemény saját hozzászólással',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Lezárt közlemény',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Lezárt közlemény saját hozzászólással',
	'IMG_ANNOUNCE_UNREAD'				=> 'Közlemény új hozzászólással',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Közlemény saját és új hozzászólással',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Lezárt közlemény új hozzászólással',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Lezárt közlemény saját és új hozzászólással',

	'IMG_GLOBAL_READ'					=> 'Globális', //? közlemény?
	'IMG_GLOBAL_READ_MINE'				=> 'Globális saját hozzászólással',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Lezárt globális',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Lezárt globális saját hozzászólással',
	'IMG_GLOBAL_UNREAD'					=> 'Globális új hozzászólással',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Globális új és saját hozzászólással',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Lezárt globális új hozzászólással',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Lezárt globális saját és új hozzászólással',

	'IMG_PM_READ'		=> 'Olvasott privát üzenet',
	'IMG_PM_UNREAD'		=> 'Olvasatlan privát üzenet',

	'IMG_ICON_BACK_TOP'		=> 'Vissza a tetejére',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-mail küldése',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Üzenet küldése',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Honlap',

	'IMG_ICON_POST_DELETE'			=> 'Hozzászólás törlése',
	'IMG_ICON_POST_EDIT'			=> 'Hozzászólás szerkesztése',
	'IMG_ICON_POST_INFO'			=> 'Hozzászólás adatai',
	'IMG_ICON_POST_QUOTE'			=> 'Hozzászólás idézése',
	'IMG_ICON_POST_REPORT'			=> 'Hozzászólás jelentése',
	'IMG_ICON_POST_TARGET'			=> 'Minihozzászólás', //?
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Új minihozzászólás',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Csatolmány',
	'IMG_ICON_TOPIC_LATEST'			=> 'Utolsó hozzászólás',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Utolsó olvasatlan hozzászólás',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Jelentett hozzászólás',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Jóváhagyatlan hozzászólás',

	'IMG_ICON_USER_ONLINE'		=> 'Online felhasználó',
	'IMG_ICON_USER_OFFLINE'		=> 'Offline felhasználó',
	'IMG_ICON_USER_PROFILE'		=> 'Profil megtekintése',
	'IMG_ICON_USER_SEARCH'		=> 'Hozzászólások keresése',
	'IMG_ICON_USER_WARN'		=> 'Felhasználó figyelmeztetése',

	'IMG_BUTTON_PM_FORWARD'		=> 'Privát üzenet továbbítása',
	'IMG_BUTTON_PM_NEW'			=> 'Új privát üzenet',
	'IMG_BUTTON_PM_REPLY'		=> 'Válasz privát üzenetre',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Lezárt téma',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Új téma',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Hozzászólás a témához',

	'IMG_USER_ICON1'		=> 'Felhasználói kép 1.',
	'IMG_USER_ICON2'		=> 'Felhasználói kép 2.',
	'IMG_USER_ICON3'		=> 'Felhasználói kép 3.',
	'IMG_USER_ICON4'		=> 'Felhasználói kép 4.',
	'IMG_USER_ICON5'		=> 'Felhasználói kép 5.',
	'IMG_USER_ICON6'		=> 'Felhasználói kép 6.',
	'IMG_USER_ICON7'		=> 'Felhasználói kép 7.',
	'IMG_USER_ICON8'		=> 'Felhasználói kép 8.',
	'IMG_USER_ICON9'		=> 'Felhasználói kép 9.',
	'IMG_USER_ICON10'		=> 'Felhasználói kép 10.',

	'INCLUDE_DIMENSIONS'		=> 'Méretek megadása', //? "Include dimensions" 'Méretek tartalmazása'
	'INCLUDE_IMAGESET'			=> 'Képkészlet tartalmazása', //? mellékelése? hozzáadása?
	'INCLUDE_TEMPLATE'			=> 'Sablon tartalmazása',
	'INCLUDE_THEME'				=> 'Stílus tartalmazása',
	'INSTALL_IMAGESET'			=> 'Képkészlet telepítése',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Itt telepíteni tudod a kiválasztott képkészletet. Ha szeretnéd, módosíthatsz egyes adatokat, vagy használhatod az alapértelmezett értékeket.',
	'INSTALL_STYLE'				=> 'Megjelenés telepítése',
	'INSTALL_STYLE_EXPLAIN'		=> 'Itt telepíteni tudsz egy új megjelenést és, ha kell, az alkotóelemeit. Ha a szükséges megjelenés alkotóelemek már telepítve vannak, nem lesznek felülírva. Néhány megjelenésnek szüksége van rá, hogy egyes megjelenés alkotóelemek már telepítve legyenek. Ha egy ilyen megjelenést próbálsz telepíteni, de nincsenek meg a megfelelő alkotóelemek, értesítve leszel.',
	'INSTALL_TEMPLATE'			=> 'Sablon telepítése',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Itt telepíteni tudsz egy új sablonkészletet. A szervered konfigurációjától függően több választási lehetőséged is lehet ezzel kapcsolatban.',
	'INSTALL_THEME'				=> 'Stílus telepítése',
	'INSTALL_THEME_EXPLAIN'		=> 'Itt telepíteni tudod a kiválasztott stílust. Ha szeretnéd, módosíthatsz egyes adatokat, vagy használhatod az alapértelmezett értékeket.',
	'INSTALLED_IMAGESET'		=> 'Telepített képkészletek',
	'INSTALLED_STYLE'			=> 'Telepített megjelenések',
	'INSTALLED_TEMPLATE'		=> 'Telepített sablonok',
	'INSTALLED_THEME'			=> 'Telepített stílusok',

	'LINE_SPACING'				=> 'Sorköz',
	'LOCALISED_IMAGES'			=> 'Honosított', //?

	'NO_CLASS'					=> 'Az osztály nem található a stíluslapban.',
	'NO_IMAGESET'				=> 'A képkészlet nem található a fájlrendszerben.',
	'NO_IMAGE'					=> 'Nincs kép',
	'NO_IMAGE_ERROR'			=> 'A kép nem található a fájlrendszerben.',
	'NO_STYLE'					=> 'A megjelenés nem található a fájlrendszerben.',
	'NO_TEMPLATE'				=> 'A sablon nem található a fájlrendszerben.',
	'NO_THEME'					=> 'A stílus nem található a fájlrendszerben.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Nincs telepítetlen képkészlet.',
	'NO_UNINSTALLED_STYLE'		=> 'Nincs telepítetlen megjelenés.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Nincs telepítetlen sablon.',
	'NO_UNINSTALLED_THEME'		=> 'Nincs telepítetlen stílus.',
	'NO_UNIT'					=> 'Nincs',

	'ONLY_IMAGESET'			=> 'Ez az egyetlen megmaradt képkészlet, nem törölheted.',
	'ONLY_STYLE'			=> 'Ez az egyetlen megmaradt megjelenés, nem törölheted.',
	'ONLY_TEMPLATE'			=> 'Ez az egyetlen megmaradt sablonkészlet, nem törölheted.',
	'ONLY_THEME'			=> 'Ez az egyetlen megmaradt stílus, nem törölheted.',
	'OPTIONAL_BASIS'		=> 'Fakultatív kiindulási megjelenés', //?

	'REFRESH'					=> 'Újratöltés',
	'REPEAT_NO'					=> 'Ne',
	'REPEAT_X'					=> 'Csak vízszintesen',
	'REPEAT_Y'					=> 'Csak függőlegesen',
	'REPEAT_ALL'				=> 'Mindkét irányba',
	'REPLACE_IMAGESET'			=> 'Képkészlet helyettesítése',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Ez a képkészlet fogja helyettesíteni a most töröltet, azokban a megjelenésekben, melyek ezt használták.',
	'REPLACE_STYLE'				=> 'Megjelenés helyettesítése',
	'REPLACE_STYLE_EXPLAIN'		=> 'Ez a megjelenés fogja helyettesíteni a most töröltet, azoknak a felhasználóknak, akik ezt használták.',
	'REPLACE_TEMPLATE'			=> 'Sablon helyettesítése',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Ez a sablonkészlet fogja helyettesíteni a most töröltet, azokban a megjelenésekben, melyek ezt használták.',
	'REPLACE_THEME'				=> 'Stílus helyettesítése',
	'REPLACE_THEME_EXPLAIN'		=> 'Ez a stílus fogja helyettesíteni a most töröltet, azokban a megjelenésekben, melyek ezt használták.',
	'REQUIRES_IMAGESET'			=> 'Ennek a megjelenésnek szüksége van rá, hogy a %s képkészlet telepítve legyen.',
	'REQUIRES_TEMPLATE'			=> 'Ennek a megjelenésnek szüksége van rá, hogy a %s sablonkészlet telepítve legyen.',
	'REQUIRES_THEME'			=> 'Ennek a megjelenésnek szüksége van rá, hogy a %s stílus telepítve legyen.',

	'SELECT_IMAGE'				=> 'Kép kiválasztása',
	'SELECT_TEMPLATE'			=> 'Sablon állomány kiválasztása',
	'SELECT_THEME'				=> 'Stílus állomány kiválasztása',
	'SELECTED_IMAGE'			=> 'Kiválasztott kép',
	'SELECTED_IMAGESET'			=> 'Kiválasztott képkészlet',
	'SELECTED_TEMPLATE'			=> 'Kiválasztott sablon',
	'SELECTED_TEMPLATE_FILE'	=> 'Kiválasztott sablon állomány',
	'SELECTED_THEME'			=> 'Kiválasztott stílus',
	'SELECTED_THEME_FILE'		=> 'Kiválasztott stílus állomány',
	'STORE_DATABASE'			=> 'Adatbázis',
	'STORE_FILESYSTEM'			=> 'Fájlrendszer',
	'STYLE_ACTIVATE'			=> 'Aktiválás',
	'STYLE_ACTIVE'				=> 'Aktív',
	'STYLE_ADDED'				=> 'A megjelenés sikeresen felvételre került.',
	'STYLE_DEACTIVATE'			=> 'Deaktiválás',
	'STYLE_DEFAULT'				=> 'Alapértelmezett megjelenéssé tétel',
	'STYLE_DELETED'				=> 'A megjelenés sikeresen törlésre került.',
	'STYLE_DETAILS_UPDATED'		=> 'A megjelenés sikeresen szerkesztésre került.',
	'STYLE_ERR_ARCHIVE'			=> 'Kérünk, válassz ki egy csomagformátumot.',
	'STYLE_ERR_COPY_LONG'		=> 'A copyright nem lehet hosszabb 60 karakternél.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Legalább egy megjelenés alkotóelemet ki kell választanod.',
	'STYLE_ERR_NAME_CHARS'		=> 'A megjelenés neve csak alfanumerikus karaktereket, -, +, _ jelet, valamint szóközt tartalmazhat.',
	'STYLE_ERR_NAME_EXIST'		=> 'Már létezik megjelenés ilyen névvel.',
	'STYLE_ERR_NAME_LONG'		=> 'A megjelenés neve nem lehet hosszabb 30 karakternél.',
	'STYLE_ERR_NO_IDS'			=> 'Ki kell választanod egy sablont, egy stílust és egy képkészletet a megjelenéshez.',
	'STYLE_ERR_NOT_STYLE'		=> 'Az importált vagy feltöltött állomány nem tartalmazott egy helyes megjelenés csomagot.',
	'STYLE_ERR_STYLE_NAME'		=> 'El kell látnod névvel a megjelenést',
	'STYLE_EXPORT'				=> 'Megjelenés exportálása',
	'STYLE_EXPORT_EXPLAIN'		=> 'Itt kiexportálhatod a képkészletet egy csomagba. A megjelenésnek nem kell tartalmazni az összes alkotóelemét, de egyet legalább kel. Például, ha készítettél egy stílust és egy képkészletet egy széles körben használt sablonhoz, elég csak csak a stílust és a képkészletet kiexportálnod, a sablont kihagyhatod. Megválaszthatod, hogy közvetlenül le szeretnéd tölteni az állományt, vagy a store könyvtárba helyeznéd el, hogy később letöltsd FTP-n keresztül.',
	'STYLE_EXPORTED'			=> 'A megjelenés sikeresen kiexportálásra került, és el lett tárolva a %s helyen.',
	'STYLE_IMAGESET'			=> 'Képkészlet',
	'STYLE_NAME'				=> 'Megjelenés neve',
	'STYLE_TEMPLATE'			=> 'Sablon',
	'STYLE_THEME'				=> 'Stílus',
	'STYLE_USED_BY'				=> 'Használók száma (robotok beleértve)',

	'TEMPLATE_ADDED'			=> 'A sablonkészlet felvételre került, és el lett tárolva a fájlrendszerben.',
	'TEMPLATE_ADDED_DB'			=> 'A sablonkészlet felvételre került, és el lett tárolva az adatbázisban.',
	'TEMPLATE_CACHE'			=> 'Sablon gyorsítótár',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Alapértelmezetten a phpBB gyorsítótárazza a sablonok lefordított változatát. Ezzel minden oldalletöltésnél csökkenti a szerver terhelését és így az oldal generálásának idejét is. Itt meg tudod tekinteni a gyorsítótárban lévő állományokat, valamint törölheted az egyes állományokat vagy akár a gyorsítótár teljes tartalmát.',
	'TEMPLATE_CACHE_CLEARED'	=> 'A sablon gyorsítótár sikeresen kiürítésre került.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Nincs gyorsítótárazott sablon.',
	'TEMPLATE_DELETED'			=> 'A sablonkészlet sikeresen törlésre került.',
	'TEMPLATE_DELETED_FS'		=> 'A sablonkészlet eltávolításra került az adatbázisból, de lehet hogy, maradt néhány állomány a fájlrendszerben.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'A sablon adatai sikeresen frissítésre kerültek.',
	'TEMPLATE_EDITOR'			=> 'HTML kódos sablonszerkesztő', //??
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Sablonszerkesztő magassága',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Kérünk, válassz ki egy csomagformátumot.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'A gyorsítárazott sablon állományok tárolására használt cache könyvtárt nem sikerült megnyitni.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'A copyright nem lehet hosszabb 60 karakternél.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'A sablon neve csak alfanumerikus karaktereket, -, +, _ jelet, valamint szóközt tartalmazhat.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Már létezik sablonkészlet ilyen névvel.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'A sablon neve nem lehet hosszabb 30 karakternél.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'A megadott csomag nem tartalmaz helyes sablonkészletet.',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'El kell látnod névvel a sablont.',
	'TEMPLATE_EXPORT'			=> 'Sablon kiexportálása',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Itt kiexportálhatod a sablonkészletet egy csomagba. A csomag tartalmaznia fogja a szükséges adatatokat, hogy a sablont később telepíteni lehessen egy másik fórumon. Megválaszthatod, hogy közvetlenül le szeretnéd tölteni az állományt, vagy a store könyvtárba helyeznéd el, hogy később letöltsd FTP-n keresztül.',
	'TEMPLATE_EXPORTED'			=> 'A sablon sikeresen kiexportálásra került, és el lett tárolva a %s helyen.',
	'TEMPLATE_FILE'				=> 'Sablon állomány',
	'TEMPLATE_FILE_UPDATED'		=> 'A sablon állomány sikeresen frissítésre került',
	'TEMPLATE_LOCATION'			=> 'Sablonok tárolásának helye',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'A képek mindig a fájlrendszerben kerülnek eltárolásra.',
	'TEMPLATE_NAME'				=> 'Sablon neve',
	'TEMPLATE_REFRESHED'		=> 'A sablon sikeresen újratöltésre került.',

	'THEME_ADDED'				=> 'Az új stílus hozzáadásra került a fájlrendszerbe.',
	'THEME_ADDED_DB'			=> 'Az új stílus hozzáadásra került az adatbázisba.',
	'THEME_CLASS_ADDED'			=> 'Az egyéni osztály sikeresen hozzáadásra került.',
	'THEME_DELETED'				=> 'A stílus sikeresen törlésre került.',
	'THEME_DELETED_FS'			=> 'A stílus eltávolításra került az adatbázisból, de lehet hogy, maradt néhány állomány a fájlrendszerben.',
	'THEME_DETAILS_UPDATED'		=> 'A stílus adatai sikeresen frissítésre kerültek.',
	'THEME_EDITOR'				=> 'Stílusszerkesztő',
	'THEME_EDITOR_HEIGHT'		=> 'Stílusszerkesztő magassága',
	'THEME_ERR_ARCHIVE'			=> 'Kérünk, válassz ki egy csomagformátumot.',
	'THEME_ERR_CLASS_CHARS'		=> 'Csak alfanumerikus karakterek, valamint a ., :, -, _, # jelek használhatók osztálynevekben.',
	'THEME_ERR_COPY_LONG'		=> 'A copyright nem lehet hosszabb 60 karakternél.',
	'THEME_ERR_NAME_CHARS'		=> 'A stílus neve csak alfanumerikus karaktereket, -, +, _ jelet, valamint szóközt tartalmazhat.',
	'THEME_ERR_NAME_EXIST'		=> 'Már létezik stílus ilyen névvel.',
	'THEME_ERR_NAME_LONG'		=> 'A stílus neve nem lehet hosszabb 30 karakternél.',
	'THEME_ERR_NOT_THEME'		=> 'A megadott csomag nem tartalmaz helyes stílust.',
	'THEME_ERR_REFRESH_FS'		=> 'A stílus a fájlrendszerben van tárolva, ezért nem szükséges újratölteni.',
	'THEME_ERR_STYLE_NAME'		=> 'A megadott csomag nem tartalmaz helyes stílust.',
	'THEME_FILE'				=> 'Stílus állomány',
	'THEME_EXPORT'				=> 'Stílus exportálása',
	'THEME_EXPORT_EXPLAIN'		=> 'Itt kiexportálhatod a stílust egy csomagba. A csomag tartalmaznia fogja a szükséges adatatokat, hogy a stílust később telepíteni lehessen egy másik fórumon. Megválaszthatod, hogy közvetlenül le szeretnéd tölteni az állományt, vagy a store könyvtárba helyeznéd el, hogy később letöltsd FTP-n keresztül.',
	'THEME_EXPORTED'			=> 'A stílus sikeresen kiexportálásra került, és el lett tárolva a %s helyen.',
	'THEME_LOCATION'			=> 'Stíluslap tárolásának helye',
	'THEME_LOCATION_EXPLAIN'	=> 'A képek mindig a fájlrendszerben kerülnek eltárolásra.',
	'THEME_NAME'				=> 'Stílus neve',
	'THEME_REFRESHED'			=> 'A stílus sikeresen újratöltésre került.',
	'THEME_UPDATED'				=> 'A stílus sikeresen frissítésre került.',

	'UNDERLINE'				=> 'Aláhúzás',
	'UNINSTALLED_IMAGESET'	=> 'Telepítetlen képkészletek',
	'UNINSTALLED_STYLE'		=> 'Telepítetlen megjelenések',
	'UNINSTALLED_TEMPLATE'	=> 'Telepítetlen sablonok',
	'UNINSTALLED_THEME'		=> 'Telepítetlen stílusok',
	'UNSET'					=> 'Nem beállított', //? nem is használják...

));

?>