<?php
/* $Id$ */

$charset = 'iso-8859-9';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Byte', 'KB', 'MB', 'GB');
//veritabanlar� terminolojisinde terc�meye pek m�sait olmayan index ve unique s�zc�kleri aynen kullan�ld�: uniqe=e�siz,tek
$day_of_week = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
$month = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Eri�im engellendi';
$strAction = 'Eylem';
$strAddDeleteColumn = 'S�tun alan� Ekle/Sil';
$strAddDeleteRow = 'Kriter sat�r� Ekle/Sil';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni ayr�cal�k ekle';
$strAddPrivMessage = 'Yeni ayr�cal�k eklediniz..';
$strAddSearchConditions = 'Arama durumu ekle ("where" c�mleci�i i�in):';
$strAddToIndex = '%s s�tununu(s�tunlar&#305;na) index ekle';
$strAddUser = 'Yeni kullan�c� ekle';
$strAddUserMessage = 'Yeni bir kullan�c� eklediniz.';
$strAffectedRows = 'Etkilenen sat�rlar:';
$strAfter = 'Sonuna %s';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Yeni kayit ekle';
$strAll = 'T�m�';
$strAlterOrderBy = 'Tabloyu de�i�tir ve �una g�re s�rala:';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAnIndex = '%s �zerinde yeni bir index eklendi';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi s�tun';
$strAnyDatabase = 'Herhangi veritaban�';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullan�c�';
$strAPrimaryKey = '%s �zerinde birincil index eklendi';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablonun ba��nda';
$strAtEndOfTable = 'Tablonun sonunda';
$strAttr = '�zellikler';

$strBack = 'Geri';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - d�zenlemeyiniz';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = ' SQL-sorgusu';
$strBookmarkThis = 'Bu SQL-sorgusunu i�aretle';
$strBookmarkView = 'Sadece g�zat';
$strBrowse = 'Tara';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'mySQL uzant�s�n� y�kleyemiyor,<br />l�tfen PHP ayarlar�n� kontrol ediniz.';
$strCantRenameIdxToPrimary = 'Index\'i PRIMARY olarak adland&#305;r&#305;mazs&#305;n&#305;z!';
$strCardinality = 'En �nemli';
$strCarriage = 'Enter Karakteri: \\r';
$strChange = 'De�i�tir';
$strChangePassword = '�ifre De�i�tir';
$strCheckAll = 'T�m�n� se�';
$strCheckDbPriv = 'Veritaban� �nceliklerini kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strColumn = 'S�tun';
$strColumnNames = 'S�tun adlar�';
$strCompleteInserts = 'Tamamlanm�� eklemeler';
$strConfirm = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz?';
$strCookiesRequired = 'Cookieler a�&#305;k olmal&#305;d&#305;r.';
$strCopyTable = 'Tabloyu (veritaban�<b>.</b>tablo) kopyala:';
$strCopyTableOK = '%s tablosu %s �zerine kopyaland�.';
$strCreate = 'Git';
$strCreateIndex = '%s s�tununda yeni bir index olu&#351;tur';
$strCreateIndexTopic = 'Yeni bir index olu&#351;tur';
$strCreateNewDatabase = 'Yeni veritaban� olu�tur';
$strCreateNewTable = '%s veritaban� �zerinde yeni bir tablo olu�tur';
$strCriteria = 'Kriter';

$strData = 'Veri';
$strDatabase = 'Veritaban� ';
$strDatabaseHasBeenDropped = '%s veritaban� kald�r�ld�.';
$strDatabases = 'veritabanlar�';
$strDatabasesStats = 'Veritaban� istatistikleri';
$strDatabaseWildcard = 'Veritaban� (* izin verili):';
$strDataOnly = 'Sadece veri';
$strDefault = 'Varsay�lan';
$strDelete = 'Sil';
$strDeleted = 'Sat�r silindi.';
$strDeletedRows = 'Silinen sat�rlar:';
$strDeleteFailed = 'Silme s�ras�nda hata olu�tu!';
$strDeleteUserMessage = '%s kullan�c�s�n� sildiniz.';
$strDescending = 'Azalan';
$strDisplay = 'G�r�nt�le';
$strDisplayOrder = 'G�r�n�m d�zeni:';
$strDoAQuery = '"�rnekle sorgu" yap (joker: "%")';
$strDocu = 'D�k�mantasyon';
$strDoYouReally = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz? ';
$strDrop = 'Kald�r';
$strDropDB = 'Veritaban�\'n� kald�r %s';
$strDropTable = 'Tablo\'yu kald�r';
$strDumpingData = 'Tablo d�k�m verisi';
$strDynamic = 'dinamik';

$strEdit = 'D�zenle';
$strEditPrivileges = '�ncelikleri D�zenle';
$strEffective = 'Efektif';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� bir sonuc k�mesi d�nd�rd� ( s�f�r sat�r).';
$strEnd = 'Son';
$strEnglishPrivileges = ' Not: mySQL  �ncelik adlar� �ngilizce olarak belirtilmi�tir ';
$strError = 'Hata';
$strExtendedInserts = 'Geni�letilmi� eklemeler';
$strExtra = 'Ayr�ca';

$strField = 'Alan';
$strFieldHasBeenDropped = '%s alan� kald�r�lm��t�r';
$strFields = 'Alanlar';
$strFieldsEmpty = ' Alan say�s� bo�! ';
$strFieldsEnclosedBy = 'Alan ay�r�c� i�aret';//it does not seem well but just works
$strFieldsEscapedBy = 'Ka��� simgesi(�zel i�aretler i�in)';//it does not seem well but just works
$strFieldsTerminatedBy = 'Alan bitirici i�aret';//it does not stand seem but just works
$strFixed = 'sabit';
$strFlushTable = 'Tabloyu kapat("FLUSH")';
$strFormat = 'Bi�im';
$strFormEmpty = 'Form\'da eksik de�er !';
$strFullText = 'T�m metinler';
$strFunction = 'Fonksiyon';

$strGenTime = '��kt� Tarihi';
$strGo = 'Git';
$strGrants = 'Haklar';
$strGzip = '"gziplenmi�"';

$strHasBeenAltered = 'd�zenlendi.';
$strHasBeenCreated = 'yarat�ld�.';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'Resmi phpMyAdmin Web Sayfas�';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Y�kleme Sayfas�';
$strHost = 'Sunucu:';
$strHostEmpty = 'Sunucu ismi alan� doldurulmad�!';

$strIdxFulltext = 'T�m metinler';
$strIfYouWish = 'E�er bir tablo\'nun sadece baz� s�tunlar�n� y�klemek istiyorsan�z,virg�llerle ayr�lm�� bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strIndex = 'Index';
$strIndexes = 'Index\'ler';
$strIndexHasBeenDropped = '%s index\'i silindi.';
$strIndexName = 'Index ismi :';
$strIndexType = 'Index tipi :';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir sat�r olarak ekle';
$strInsertedRows = 'Eklenen sat�rlar:';
$strInsertNewRow = 'Yeni sat�r ekle';
$strInsertTextfiles = 'Tablo i�ine metin dosyas� ekle';
$strInstructions = 'Talimatlar';
$strInUse = 'kullan�mda';
$strInvalidName = '"%s" s�zc��� kullan�lamayan s�zc�k.Veritaban�/tablo/alan ismi olarak kullanamass�n�z, you can\'t use it as a database/table/field name.';

$strKeepPass = '�ifreyi de�i�tirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';

$strLength = 'Boyut';
$strLengthSet = 'Boyut/De�erler*';
$strLimitNumRows = 'Sayfa ba&#351;&#305;na kay&#305;t say&#305;s&#305;';
$strLineFeed = 'Sat�r: \\n';
$strLines = 'Sat�rlar';
$strLinesTerminatedBy = 'Sat�r sonu';
$strLocationTextfile = 'Dosyadan y�kle';
$strLogin = 'Login';
$strLogout = '��k��';
$strLogPassword = '&#350;ifre:';
$strLogUsername = 'Kullan&#305;c&#305; Ad&#305;:';

$strModifications = 'De�i�iklikler kaydedildi';
$strModify = 'De�i�tir';
$strModifyIndexTopic = 'Index d�zenle';
$strMoveTable = 'Tabloyu (veritaban�<b>.</b>tablo) ta��:';
$strMoveTableOK = '%s tablosu %s �zerine ta��nd�.';
$strMySQLReloaded = 'MySQL yeniden y�klendi.';
$strMySQLSaid = 'MySQL ��kt�s�: ';
$strMySQLServerProcess = 'MySQL %pma_s1% -- �al��t��� ortam --) %pma_s2% �al��t��� sistem -- %pma_s3%';
$strMySQLShowProcess = '��lemleri g�ster';
$strMySQLShowStatus = 'MySQL �al��ma zaman� bilgisini g�ster';
$strMySQLShowVars = 'MySQL sistem de�i�kenlerini g�ster';

$strName = '�sim';
$strNext = 'Sonraki';
$strNo = 'Hay�r';
$strNoDatabases = 'Veritaban� yok';
$strNoDropDatabases = '"DROP DATABASE" c�mlesi burada kullan�lamaz.';
$strNoFrames = 'phpMyAdmin frame destekli bir taray&#305;c&#305; ile daha iyi �al&#305;&#351;maktad&#305;r...';
$strNoIndex = 'Index tan&#305;mlanmad&#305;!';
$strNoIndexPartsDefined = 'Index k&#305;sm&#305; tan&#305;mlanmad&#305;!';
$strNoModification = 'De�i�iklik yok';
$strNone = 'Hi�biri';
$strNoPassword = '�ifre yok';
$strNoPrivileges = 'Ayr�cal�k yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak i�in yeterli haklara sahip de�ilsiniz!';
$strNoTablesFound = 'Veritaban�\'nda tablo bulunamad�.';
$strNotNumber = 'Bu bir say� de�il!';
$strNotValidNumber = ' ge�erli bir sat�r say�s� de�il!';
$strNoUsersFound = 'Kullan�c�(lar) bulunamad�.';
$strNull = 'Bo�';

$strOftenQuotation = 'S�k kullan�lan aktarma i�aretleri.SE��ME BA�LI,sadece char ve varchar alanlar�n�n "enclosed-by" karakteri ile �evrenelece�i anlam�na gelir..';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = '�zel karakterleri yazmak ve okumak i�in kontroller.Opsiyonel';
$strOptionally = 'Se�ime Ba�l�';
$strOr = 'veya';
$strOverhead = 'Kullan&#305;lamayan Veri';

$strPartialText = 'B�l�msel Metinler';
$strPassword = '�ifre';
$strPasswordEmpty = '�ifre alan� doldurulmad�!';
$strPasswordNotSame = 'Girilen �ifreler ayn� de�il!';
$strPHPVersion = 'PHP S�r�m�';
$strPmaDocumentation = 'phpMyAdmin d�k�mantasyonu';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin de�eri  konfigurasyon dosyas�n�n i�inde verilmelidir!';
$strPos1 = 'Ba�lang��';
$strPrevious = '�nceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal&#305;d&#305;r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece</b> bir anahtar&#305;n ismi <b>olmal&#305;d&#305;r!</b>)';
$strPrintView = 'Yaz�c� g�r�nt�s�';
$strPrivileges = '�ncelikler';
$strProperties = '�zellikler';

$strQBE = '�rnekle sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Veritaban� �zerinde SQL-sorgusu&nbsp;<b>%s</b>:';

$strRecords = 'Kay�tlar';
$strReferentialIntegrity = 'Referans b�t�nl���n� kontrol et.';
$strReloadFailed = 'MySQL yeniden y�klenmesi ger�ekle�tirilemedi.';
$strReloadMySQL = 'MySQL\'i yeniden y�kle';
$strRememberReload = 'Server\'� yeniden y�klemeyi unutmay�n�z.';
$strRenameTable = 'Tablonun ismini �una de�i�tir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adland�r�ld�';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerde�i�tir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile de�i�tir';
$strReset = 'S�f�rla';
$strReType = 'Yeniden gir';
$strRevoke = 'Ge�ersiz k�l';
$strRevokeGrant = 'Hak ge�ersiz k�l';
$strRevokeGrantMessage = '%s i�in Grant �nceli&#287;ini kald&#305;rd&#305;n&#305;z';
$strRevokeMessage = '%s\'in �nceliklerini kald&#305;rd&#305;n&#305;z';
$strRevokePriv = 'Ayr�cal�klar� ge�ersiz k�l';
$strRowLength = 'Sat�r boyu';
$strRows = 'Sat�r Say�s�';
$strRowsFrom = '(kay�t)ba�layaca�� kay�t :';
$strRowSize = ' Sat�r boyutu ';
$strRowsModeHorizontal= 'yatay';
$strRowsModeOptions= '%s modunda ve %s h�cre sonra ba&#351;l&#305;&#287;&#305; tekrarla';
$strRowsModeVertical= 'dikey';
$strRowsStatistic = 'Sat�r istatisti�i';
$strRunning = '-- �al��t��� ortam --) %s';
$strRunQuery = 'Sorguyu �al��t�r';
$strRunSQLQuery = '%s veritaban� �zerinde sorgu/sorgular �al��t�r';

$strSave = 'Kaydet';
$strSelect = 'Se�';
$strSelectADb = 'L�tfen bir veritaban&#305; se�iniz';
$strSelectAll = 'T�m�n� se�';
$strSelectFields = 'Alan se� (en az bir):';
$strSelectNumRows = 'sorgu i�erisinde';
$strSend = 'Dosya olarak kaydet';
$strServerChoice = 'Server se�imi';
$strServerVersion = 'Server s�r�m�';
$strSetEnumVal = 'E�er alan tipi "enum" veya  "set" ise , l�tfen verileri �u formata g�re giriniz: \'a\',\'b\',\'c\'...<br>E�er bu de�erler aras�na backslash ("\") veya tek t�rnak koyman�z gerekirse ("\'"),bunun i�in backslash kullan�n (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'G�ster:';
$strShowAll = 'T�m�n� g�ster';
$strShowCols = 'B�t�n s�tunlar� g�ster';
$strShowingRecords = 'Kay�tlar� g�steriyor';
$strShowPHPInfo = 'PHP bilgisini g�ster';
$strShowTables = 'Tablolar� g�ster';
$strShowThisQuery = ' Bu sorguyu burda yine g�ster ';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSort = 'S�rala';
$strSpaceUsage = 'Kullan�lan alan';
$strSQLQuery = 'SQL-sorgusu';
$strStatement = '�fadeler';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yap� ve Veri';
$strStrucDrop = '\'Drop table\' ekle';
$strStrucExcelCSV = 'MS Excel verisi i�in CSV';
$strStrucOnly = 'Sadece yap�';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz ba�ar�yla �al��t�r�lm��t�r';
$strSum = 'toplam';

$strTable = 'tablo ';
$strTableComments = 'Tablo yorumlar�';
$strTableEmpty = 'Tablo ismi bo�!';
$strTableHasBeenDropped = '%s tablosu kald�r�lm��t�r';
$strTableHasBeenEmptied = '%s tablosu bo�alt�lm��t�r';
$strTableHasBeenFlushed = '%s tablosu ba&#351;ar&#305;yla kapat&#305;lm&#305;&#351;t&#305;r.';
$strTableMaintenance = 'Tablo bak�m�';
$strTables = '%s tablo';
$strTableStructure = 'Tablo i�in tablo yap�s�';
$strTableType = 'Tablo tipi';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan d�zenlenmeyebilir ';
$strTheContent = 'Dosyan�z�n i�eri�i eklendi.';
$strTheContents = 'Dosyan�n i�eri�i tablonun i�eri�ini ayn� birincil veya unique anahtar de�erli s�tunlar i�in yer de�i�tirir..';
$strTheTerminator = 'Alan bitimini belirten i�aret.';
$strTotal = 'toplam';
$strType = 'Tip';

$strUncheckAll = 'Hi�birisini Se�me';
$strUnique = 'Unique';
$strUnselectAll = 'Hi�birisini se�me';
$strUpdatePrivMessage = '%s i�in olan ayr�cal�klar� g�ncellediniz.';
$strUpdateProfile = 'Profil g�ncelle:';
$strUpdateProfileMessage = 'Profil g�ncellendi.';
$strUpdateQuery = 'Sorguyu g�ncelle';
$strUsage = 'Kullan�m';
$strUseBackquotes = 'Tablo ve alan isimleri i�in ters t�rnak " ` " i�aretini kullan';
$strUser = 'Kullan�c�:';
$strUserEmpty = 'Kullan�c� ismi alan� doldurulmad�!';
$strUserName = 'Kullan�c� ismi';
$strUsers = 'Kullan�c�lar';
$strUseTables = 'Tablolar� kullan';

$strValue = 'De�er';
$strViewDump = 'Tablo\'nun d�k�m(�ema)\'�n� g�ster';
$strViewDumpDB = 'Veritaban�\'n�n d�k�m(�ema)\'�n� g�ster';

$strWelcome = 'HO�GELD�N�Z: %s';
$strWithChecked = 'se�ilileri:';
$strWrongUser = 'Hatal� kullan�c�/parola. Eri�im engellendi.';

$strYes = 'Evet';

$strZip = '"ziplenmi�"';

// To translate
$strLinksTo = 'Links to';  //to translate
$strExport = 'Export';  //to translate
$strOperations = 'Operations';  //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strOptions = 'Options';  //to translate
$strStructure = 'Structure';  //to translate
$strRelationView = 'Relation view';  //to translate
$strDumpXRows = 'Dump %s rows starting at row %s.'; //to translate
$strSQL = 'SQL'; //to translate
$strLinkNotFound = 'Link not found';  //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strPageNumber = 'Page number:';  //to translate
$strShowGrid = 'Show grid';  //to translate
$strShowColor = 'Show color';  //to translate
$strShowTableDimension = 'Show dimension of tables';  //to translate
$strPdfInvalidPageNum = 'Undefined PDF page number!';  //to translate
$strPdfInvalidTblName = 'The "%s" table does not exist!';  //to translate
$strChangeDisplay = 'Choose Field to display';  //to translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate
$strSearch = 'Search';//to translate
$strSearchFormTitle = 'Search in database';//to translate
$strSearchInTables = 'Inside table(s):';//to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';//to translate
$strSearchOption1 = 'at least one of the words';//to translate
$strSearchOption2 = 'all words';//to translate
$strSearchOption3 = 'the exact phrase';//to translate
$strSearchOption4 = 'as regular expression';//to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';//to translate
$strSearchType = 'Find:';//to translate
$strSplitWordsWithSpace = 'Words are splitted by a space character (" ").';//to translate
?>
