<?php defined('EF5_SYSTEM') || exit;

return array(
	'Charset' => 'UTF-8',
	'xml_lang' => 'pl',
	'eXtreme-Fusion :version - Setup' => 'eXtreme-Fusion :version - Instalacja',
	'Step 1: Locale' => 'Krok 1: Język',
	'Step 2: Checking server configuration' => 'Krok 2: Sprawdzanie konfiguracji serwera',
	'Step 3: File and Folder Permissions Test' => 'Krok 3: Sprawdzenie praw dostępu do plików i&nbsp;katalogów',
	'Step 4: Database Settings' => 'Krok 4: Ustawienia bazy danych',
	'Step 5: Head Admin Details' => 'Krok 5: Dane głównego administratora',
	'Step 6: Final Settings' => 'Krok 6: Końcowe ustawienia',
	'Finish' => 'Zakończ',
	// Permissions
	'Perm: admin login' => 'Logowanie do Panelu Admina.',
	'Perm: admin bbcodes' => 'Zarządzanie tagami BBCodes.',
	'Perm: admin blacklist' => 'Dostęp do czarnej listy.',
	'Perm: admin comments' => 'Dostęp do zarządzania komentarzami.',
	'Perm: admin logs' => 'Dostęp do logów strony.',
	'Perm: admin urls' => 'Dostęp do generatora linków.',
	'Perm: admin news_cats' => 'Dostęp do kategorii newsów.',
	'Perm: admin news' => 'Dodawanie newsów z poziomu administratora.',
	'Perm: admin panels' => 'Dostęp do zarządzania panelami.',
	'Perm: admin permissions' => 'Możliwość dodawania nowych uprawnień.',
	'Perm: admin phpinfo' => 'Informacje PHP serwera.',
	'Perm: admin groups' => 'Dodawanie nowych grup użytkownika.',
	'Perm: admin security' => 'Polityka bezpieczeństwa',
	'Perm: admin settings' => 'Ustawienia główne systemu.',
	'Perm: admin settings_banners' => 'Zarządzanie banerami',
	'Perm: admin settings_cache' => 'Pamięć podręczna',
	'Perm: admin settings_time' => 'Zarządzanie datą i godziną.',
	'Perm: admin settings_registration' => 'Dostęp do ustawień rejestracji.',
	'Perm: admin settings_misc' => 'Dostęp do ustawień różnych.',
	'Perm: admin settings_users' => 'Dostęp do ustawień użytkowników.',
	'Perm: admin settings_ipp' => 'Ilość elementów na stronie.',
	'Perm: admin settings_logs' => 'Dostęp do ustawień logów admina.',
	'Perm: admin navigations' => 'Nawigacja strony',
	'Perm: admin smileys' => 'Dostęp do emotikon na stronie',
	'Perm: admin submissions' => 'Dostęp do nadesłanych materiałów',
	'Perm: admin upgrade' => 'Możliwość aktualizowania systemu.',
	'Perm: admin user_fields' => 'Możliwość dodawania nowych pól użytkownika.',
	'Perm: admin user_fields_cats' => 'Możliwość dodawania kategorii pól użytkownika.',
	'Perm: admin users' => 'Możliwość zarządzania kontami użytkowników.',
	'Perm: user login' => 'Logowanie do serwisu.',
	'Perm: comment' => 'Zamieszczenie komentarzy',
	'Perm: comment edit' => 'Modyfikowanie własnego komentarza w określonym przedziale czasowym od jego dodania.',
	'Perm: comment edit all' => 'Modyfikowanie komentarzy swoich oraz innych użytkowników',
	'Perm: comment delete' => 'Usuwanie własnego komentarza w określonym przedziale czasowym od jego dodania.',
	'Perm: comment delete all' => 'Usuwanie komentarzy swoich oraz innych uzytkowników',
	'Group: admin' => 'Administratorzy są to ludzie, którzy cały czas czuwają nad stroną.',
	'Group: user' => 'Uprawnienie to posiada podstawowe zezwolenia m.in. Możliwość logowania się.',
	'Group: guest' => 'Osoba odwiedzająca stronę bez logowania się.',
	//Step 1
	'Please select the required locale (language):' => 'Wybierz język strony:',
	'Download more locales from <a href="http://www.extreme-fusion.org/">extreme-fusion.org</a>' => 'Inne wersje językowe do pobrania na stonie <a href="http://www.extreme-fusion.org/">extreme-fusion.org</a>',
	'I accept BSD License' => 'Akceptuje warunki licencji BSD',
	//Step 2
	'Writeable' => 'Zapisywalny',
	'Unwriteable' => 'Niezapisywalny',
	'In order for setup to continue, the following files/folders must be writeable:' => 'Poniższe pliki i&nbsp;katalogi muszę być zapisywalne, aby poprawnie zakończyć instalację:',
	'Write permissions check passed, click Next to continue.' => 'Prawa dostępu do plików prawidłowe, naciśnij Dalej w&nbsp;celu kontynuacji.',
	'Write permissions check failed, please CHMOD files/folders marked Unwriteable.' => 'Prawa dostępu do plików nieprawidłowe, sprawdź uprawnienia dla zaznaczonych plików i&nbsp;folderów.',
	'Refresh' => 'Odśwież',
	'PHP Version Error' => 'Twój serwer nie spełnia wymagań systemu: posiada interpreter PHP starszy od wersji :php_required.<br />
							Co możesz zrobić:
							<ul>
							<li>Skorzystaj z Panelu Zarządzania Serwerem i opcji "wybór interpretera PHP", by użyć nowszego - uwaga: nie każdy usługodawca hostingowy udostępnia takie narzędzia</li>
							<li>Zainstaluj nowszą wersje PHP z pakietów dostępnych na stronie producenta - dla zaawansowanych</li>
							<li>Skontaktuj się z Działem Pomocy Technicznej twojego serwera, by uzyskać pomoc</li>
							</ul>',
	'Extension error' => 'Nie znaleziono wymaganego rozszerzenia :extension_error. Należy je załadować przez odpowiednią konfigurację serwera.',
	'Files has not been changed.' => 'Nie zmieniono plików.',
	// Step 3 - Access criteria
	'Please enter your MySQL database access settings.' => 'Wpisz ustawienia dla Twojej bazy danych MySQL.',
	'Database Hostname:' => 'Adres hosta:',
	'Database Username:' => 'Nazwa użytkownika:',
	'Database Password:' => 'Hasło do bazy danych:',
	'Database Name:' => 'Nazwa bazy danych:',
	'Database Port:' => 'Port bazy danych:',
	'Table Prefix:' => 'Prefiks tabeli:',
	'Cookie Prefix:' => 'Prefiks ciasteczek:',
	'Cache Prefix:' => 'Prefiks cache:',
	'URL:' => 'Adres strony:',
	// Step 4 - Database Setup
	'Advanced' => 'Zaawansowane',
	'Database connection established.' => 'Połączono z bazą danych.',
	'Config file successfully written.' => 'Konfiguracja została zapisana poprawnie.',
	'Database tables created.' => 'Utworzono tabele w&nbsp;bazie danych.',
	'Error:' => 'Błąd:',
	'Unable to create database tables.' => 'Brak możliwości utworzenia tabel w&nbsp;bazie danych.',
	'Unable to write config file.' => 'Brak możliwości zapisu pliku konfiguracyjnego.',
	'Please ensure config.php is writable.' => 'Sprawdź, czy plik config.php jest zapisywalny.',
	'Could not write or delete MySQL tables.' => 'Nie można było zapisać lub usunąć tabel MySQL.',
	'Please make sure your MySQL user has read, write and delete permission for the selected database.' => 'Sprawdź, czy podany przez Ciebie użytkownik bazy danych ma prawa odczytu, zapisu oraz usuwania danych w&nbsp;wybranej bazie danych.',
	'Table prefix error.' => 'Prefiks tabeli jest w&nbsp;użyciu.',
	'The specified table prefix is already in use.' => 'Podany przez Ciebie prefiks tabeli jest już zajęty. Podaj inny prefiks.',
	'Unable to connect with MySQL database.' => 'Brak możliwości połączenia z&nbsp;bazą danych.',
	'The specified MySQL database does not exist.' => 'Podana baza danych MySQL nie istnieje',
	'Unable to connect with MySQL.' => 'Brak możliwości połączenia z&nbsp;bazą danych.',
	'Please ensure your MySQL username and password are correct.' => 'Sprawdź ustawienia, nazwę użytkownika oraz hasło do Twojej bazy danych MySQL.',
	'There are empty fields left!' => 'Pozostawiono niewypełnione pola!',
	'Please make sure you have filled out all the MySQL connection fields.' => 'Sprawdź, czy wszystkie pola są wypełnione.',
	'Tables prefix (Advanced settings) is already in use or prefix has not been written, and tables prefix exist in the database with the same name as that system is trying to create. Please enter a different prefix for tables.' => 'Prefiks tabel (Zaawansowane ustawienia) jest już w użyciu lub niepodano prefiksu, a w bazie istnieją tabele o takiej samej nazwie jak te, które system próbuje utworzyć. Należy podać inny prefiks dla tabel.',
	'UWAGA! Jeżeli po zakończeniu instalacji wystąpią problemy z linkami i adresami URL (błędy 404), należy przeinstalować system nie zaznaczając poniższego pola lub zmienić ustawienia $_route w pliku config.php.' => 'NOTE! If after installation you experience problems with links and URLs (error 404), you must reinstall the system without checking the box below, or change the $ _route in config.php.',
	'The names of the files listed below please change with the instructions.' => 'Nazwy poniższych plików proszę zmienić według instrukcji.',
	'The folders and files listed below must be set writeable (chmod 777).' => 'Poniższym katalogom i plikom należy ustawić zapisywalność (chmod 777).',
	'modRewrite warning' => 'Instalator nie mógł ustalić, czy twój serwer obsługuje modRewrite.<br />
	Zaznacz to pole, jeżeli jesteś pewny, że wymieniony moduł jest dostępny. <br />
	Odpowiada on za tworzenie linków przyjaznych wyszukiwarkom.', 
	'FURL warning' => 'Instalator rozpoznał, że używasz innego serwera niż Apache.<br />
	Aby móc korzystać z linków przyjaznych wyszukiwarkom, serwer musi obsługiwać ścieżki PATH_INFO.<br />
	Po zakończeniu instalacji system spróbuje ustalić, czy są one dostępne, przy czym występuje ryzyko pomyłki.<br />
	Aby temu zapobiec, zaznacz poniższe pole, jeżeli masz pewność, iż twój serwer obsługuje PATH_INFO.',
	// Step 5 - Super Admin login
	'Super Admin login details' => 'Wpisz dane głównego administratora',
	'Username:' => 'Nazwa użytkownika:',
	'Login Password:' => 'Hasło logowania:',
	'Repeat Login password:' => 'Powtórz hasło logowania:',
	'Email address:' => 'Adres e-mail:',
	// Step 6 - User details validation
	'User name contains invalid characters.' => 'Nazwa użytkownika zawiera nieobsługiwane znaki.',
	'User name field can not be left empty.' => 'Pole nazwa użytkownika nie może być puste!',
	'Your login does not appear to be valid.' => 'Nazwa  użytkownika jest niepoprawna.',
	'Your two login passwords do not match.' => 'Hasła użytkownika nie pasują do siebie.',
	'Invalid login password, please use alpha numeric characters only.<br />Password must be a minimum of 6 characters long.' => 'Nieprawidłowe hasło użytkownika, proszę o&nbsp;korzystanie wyłącznie ze znaków alfanumerycznych.<br />Hasło musi zawierać minimum 6 znaków.',
	'Login password fields can not be left empty' => 'Pole hasło użytkownika nie może być puste!',
	'Your email address does not appear to be valid.' => 'Podano nieprawidłowy adres e-mail.',
	'Email field can not be left empty.' => 'Pole adres e-mail nie może być puste!',
	'Setup complete' => '<div class="valid">Zakończono instalację. Dziękujemy za wybranie eXtreme-Fusion 5 - Ninja Edition!</div>',
	'Your user settings are not correct:' => 'Podane dane użytkownika zawierają następujące błędy:',
	'Administrator account has not been created.' => 'Konto administratora nie zostało utworzone.',
	//Welcome Message
	'Welcome to your site' => 'Witaj na nowej stronie.',
	'Welcome to eXtreme-Fusion CMS. Thank for using our CMS, Please turn off the maintenance mode in security, onces you have finished configuring your site.' => 'Dziękujemy za korzystanie z systemu eXtreme-Fusion. Tryb prac na serwerze można wyłączyć w Panelu Administratora w dziale Polityki bezpieczeństwa.',
	// Stage 6 - News Categories
	'Bugs' => 'Błędy',
	'Downloads' => 'Download',
	'eXtreme-Fusion' => 'eXtreme-Fusion',
	'Games' => 'Gry',
	'Graphics' => 'Grafika',
	'Hardware' => 'Sprzęt',
	'Journal' => 'Dziennik',
	'Members' => 'Użytkownicy',
	'Mods' => 'Modyfikacje',
	'Movies' => 'Filmy',
	'Network' => 'Sieć',
	'News' => 'Newsy',
	'Security' => 'Bezpieczeństwo',
	'Software' => 'Oprogramowanie',
	'Themes' => 'Skórki',
	'Windows' => 'Windows',
	// Stage 6 - Panels
	'Navigation' => 'Nawigacja',
	'Online Users' => 'Aktualnie online',
	'Welcome Message' => 'Powitanie',
	'User Panel' => 'Panel Użytkownika',
	// Step 6 - Navigation Links
	'Home' => 'Strona główna',
	'News Cats' => 'Kategorie newsów',
	'Contact' => 'Kontakt',
	'Search' => 'Szukaj',
	'Submit News' => 'Dodaj newsa',
	// Stage 6 - User Field Categories
	'Contact Information' => 'Informacje kontaktowe',
	'Information' => 'Informacje',
	'Miscellaneous' => 'Różne',
	'First name' => 'Imię',
	'Date of birth' => 'Data urodzenia',
	'Website' => 'Strona WWW',
	'Living place' => 'Miejscowość',
	'Signature' => 'Podpis',
	'Rewrite info' => 'Twój serwer umożliwia korzystanie z modułu mod_rewrite, lecz nie ma uprawnień do automatycznej zmiany nazwy pliku. Jeśli chcesz z niego skorzystać do tworzenia linków przyjaznych dla wyszukiwarek, zmień nazwę pliku "rewrite" na ".htaccess". W przeciwnym przypadku, po prostu zignoruj ten komunikat.',
	// Example news
	'Example news title' => 'Witaj na stronie internetowej opartej o eXtreme-Fusion 5',
	'Example news content' => '<p style="text-align: center;">
	To co tu widzisz, jest zbudowane dzięki darmowemu Systemowi Zarządzania Treścią (CMS) <a href="http://extreme-fusion.org/">eXtreme-Fusion 5</a>.</p>
<p>
	Jeśli jesteś Administratorem tej strony, zaloguj się przez formularz widoczny po prawej stronie.<br />
	Następnie przejdź do Panelu Zarządzania, by dokonać konfiguracji, dodać treść lub utworzyć nowe konta użytkowników.</p>
<p>
	Rozbudowa Twojej strony www odbywa się przez instalację Moduł&oacute;w, dla przykładu Punktacji, zachęcającej do aktywności.</p>
<p style="text-align: center;">
	Jeżeli nie jesteś Administratorem tej strony, ale chcesz posiadać własny serwis internetowy, to przejdź na nasz <a href="http://extreme-fusion.org/">Support</a>, skąd pobierzesz system EF5 oraz otrzymasz pomoc od Społeczności.<br />
	&nbsp;</p>
',
	'Example news url' => 'witaj_na_stronie_internetowej_opartej_o_extreme-fusion_5',
	'Example news description' => 'To co tu widzisz, jest zbudowane dzięki darmowemu Systemowi Zarządzania Treścią (CMS) eXtreme-Fusion 5.',
	// Some additional informations
	'The installation was interrupted. The system can be unstable.' => 'Instalacja została przerwana. System może nie działać stabilnie.',
	'Start the installation again.' => 'Zacznij instalację ponownie',
	'Stop the installation or start from the begining.' => 'Przerwij instalację lub zacznij od nowa.',
	'Stop installation' => 'Przerwij instalację.',
);
