<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Iskorišćen tip polja nije validan :type.',
    'options_method_invalid_model' => 'Atribut \':field\' ne vraća validni model. Pokušaj da eksplicitno specificiraš metod opcija za model klase :model.',
    'options_method_not_exists' => 'Model klase :model mora definisati metod :method() koji vraća opcije za polje obrasca \':field\'.',
    'colors_method_not_exists' => 'Model klase :model mora da definiše metod :method() koji vraća heksadecimalne kodove boje za polje obrasca \':field\'.',
  ],
  'widget' => [
    'not_registered' => 'Klasa posredničkog elementa \':name\' nije registrovana',
    'not_bound' => 'Kalasa posredničkog elementa \':name\' nije vezana za kontroler',
  ],
  'page' => [
    'untitled' => 'Bez naziva',
    404 => [
      'label' => 'Stranica nije pronađena',
      'help' => 'Traženi URL nije pronađen. Možda tražiš nešto drugo?',
      'back_link' => 'Nazad na prošlu stranicu',
    ],
    'access_denied' => [
      'label' => 'Pristup odbijen',
      'help' => 'Nemaš odgovarajuće dozvole za pristup ovoj stranici.',
      'cms_link' => 'Nazad na pozadinski sistem',
    ],
    'no_database' => [
      'label' => 'Baza podataka nedostaje',
      'help' => 'Baza podataka je neophodna za pristup pozadinskom sistemu. Proveri da li je baza podataka konfigurisana kako treba i pokušaj ponovo.',
      'cms_link' => 'Nazad na početnu stranicu',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Parcijal \':name\' nije pronađen.',
    'invalid_name' => 'Naziv parcijala nije validan: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Naziv AJAX rukovatelja nije validan: :name.',
    'not_found' => 'AJAX rukovatelj \':name\' nije pronađen.',
  ],
  'account' => [
    'impersonate' => 'Oponašaj korisnika',
    'impersonate_confirm' => 'Da li zaista želiš da oponašaš ovog korisnika? Možeš se vratiti na originalno stanje kada se izloguješ.',
    'impersonate_success' => 'Sada oponašaš ovog korisnika',
    'impersonate_working' => 'Oponašanje...',
    'impersonating' => 'Oponašanje :full_name',
    'stop_impersonating' => 'Prestani sa oponašanjem',
    'unsuspend' => 'Obustavljena suspenzija',
    'unsuspend_confirm' => 'Da li zaista želiš da obustaviš suspenziju za ovog korisnika?',
    'unsuspend_success' => 'Korisnik više nije supsendovan.',
    'unsuspend_working' => 'Obustavljanje suspenzije...',
    'signed_in_as' => 'Ulogovan kao :full_name',
    'sign_out' => 'Izloguj se',
    'login_placeholder' => 'login',
    'password_placeholder' => 'lozinka',
    'enter_email' => 'Unesi svoj email',
    'email_placeholder' => 'email',
    'apply' => 'Primeni',
    'cancel' => 'Otkaži',
    'delete' => 'Izbriši',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Kontrolna tabla',
    'widget_inspector_title' => 'Konfiguracija posredničkog elementa',
    'widget_inspector_description' => 'Konfiguriši izveštaj za posrednički element',
    'widget_columns_label' => 'Širina :columns',
    'widget_columns_description' => 'Širina posredničkog elementa, broj između 1 i 12.',
    'widget_columns_error' => 'Unesi širinu posredničkog elementa kao broj između 1 i 12.',
    'columns' => '{1} kolona|[2,Inf] kolone',
    'widget_new_row_label' => 'Novi red na silu',
    'widget_new_row_description' => 'Postavi posrednički element u novi red.',
    'widget_title_label' => 'Naslov posredničkog elementa',
    'widget_title_error' => 'Naslov za posrednički element je neophodan.',
    'reset_layout_success' => 'Plan je resetovan',
    'make_default_success' => 'Trenutni plan je sada podrazumevani',
    'collapse_all' => 'Sklopi sve',
    'expand_all' => 'Rasklopi sve',
    'status' => [
      'widget_title_default' => 'Status sistema',
      'update_available' => '{0} ispravki dostupno!|{1} ispravka dostupna!|[2,Inf] ispravke dostupne!',
      'updates_pending' => 'Čekaju se ispravke softvera',
      'updates_nil' => 'Softver je ažuriran',
      'updates_link' => 'Ažuriraj',
      'warnings_pending' => 'Neki problemi zahtevaju vašu pažnju',
      'warnings_nil' => 'Nema upozorenja za prikaz',
      'warnings_link' => 'Pogled',
      'core_build' => 'Verzija sistema',
      'event_log' => 'Log događaja',
      'request_log' => 'Log zahteva',
      'app_birthday' => 'Na mreži od',
    ],
    'welcome' => [
      'widget_title_default' => 'Dobrodošli',
      'welcome_back_name' => 'Dobrodošli nazad na :app, :name.',
      'welcome_to_name' => 'Dobrodošli na :app, :name.',
      'first_sign_in' => 'Prvi put ste se ulogovali.',
      'last_sign_in' => 'Vaše poslednje logovanje je bilo na',
      'view_access_logs' => 'Prikaži logove pristupa',
      'nice_message' => 'Lep dan želim!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'list_title' => 'Upravljanje administratorima',
    'new' => 'Novi administrator',
    'first_name' => 'Ime',
    'last_name' => 'Prezime',
    'full_name' => 'Ime i prezime',
    'email' => 'Email',
    'role_field' => 'Rola',
    'role_comment' => 'Role definišu dozvole korisnika, koje mogu biti pregažene na korisničkom nivou ili preko taba za dozvole.',
    'groups' => 'Grupe',
    'groups_comment' => 'Speicificiraj grupe kojima nalog treba pripadati.',
    'avatar' => 'Avatar',
    'password' => 'Lozinka',
    'password_confirmation' => 'Potvrdi lozinku',
    'permissions' => 'Dozvole',
    'account' => 'Nalog',
    'superuser' => 'Super korisnik',
    'superuser_comment' => 'Dozvoli ovom nalogu pristup svim delovima sistema bez ograničenja. Super korisnici mogu dodavati i upravljati drugim korisnicima.',
    'send_invite' => 'Pošalji pozivnicu preko mejla',
    'send_invite_comment' => 'Pošalji poruku dobrodošlice koja sadrži informacije za logovanje.',
    'delete_confirm' => 'Obriši administratora?',
    'return' => 'Nazad na listu administratora',
    'allow' => 'Dozvoli',
    'inherit' => 'Nasledi',
    'deny' => 'Odbij',
    'activated' => 'Aktiviran',
    'last_login' => 'Poslednje logovanje:',
    'created_at' => 'Napravljen:',
    'updated_at' => 'Ažuriran:',
    'deleted_at' => 'Obrisan:',
    'show_deleted' => 'Prikaži izbrisane',
    'group' => [
      'name' => 'Grupe',
      'name_field' => 'Naziv',
      'name_comment' => 'Naziv je prikazan u listi grupa u administratorskom obrascu.',
      'description_field' => 'Opis',
      'is_new_user_default_field_label' => 'Osnovna grupa',
      'is_new_user_default_field_comment' => 'Podrazumevano dodaj nove administratore ovoj grupi.',
      'code_field' => 'Kod',
      'code_comment' => 'Unesi jedinstveni kod ako želiš da pristupaš objektu grupe preko API-ja.',
      'list_title' => 'Upravljaj grupama',
      'new' => 'Nova grupa',
      'delete_confirm' => 'Izbriši ovu administratorsku grupu?',
      'return' => 'Nazad na listu grupa',
      'users_count' => 'Korisnici',
    ],
    'role' => [
      'name' => 'Rola',
      'name_field' => 'Naziv',
      'name_comment' => 'Naziv je prikazan u listi rola u administratorskom obrascu.',
      'description_field' => 'Opis',
      'code_field' => 'Kod',
      'code_comment' => 'Unesi jedinstveni kod ako želiš da pristupaš objektu role preko API-ja.',
      'list_title' => 'Upravljaj rolama',
      'new' => 'Nova rola',
      'delete_confirm' => 'Izbriši ovu administratorsku rolu?',
      'return' => 'Nazad na listu rola',
      'users_count' => 'Korisnici',
    ],
    'preferences' => [
      'not_authenticated' => 'Nema autentifikovanog korisnika za učitavanje ili čuvanje podeski.',
    ],
    'trashed_hint_title' => 'Ovaj nalog je izbrisan',
    'trashed_hint_desc' => 'Ovaj nalog je izbrisan i neće više moći da se koristi za logovanje. Da ga povratiš, klikni na ikonicu u donjem desnom uglu',
  ],
  'list' => [
    'default_title' => 'Lista',
    'search_prompt' => 'Traži...',
    'no_records' => 'Nema zapisa u ovom pogledu.',
    'missing_model' => 'Lista ponašanja korišćena u klasi :class nema definisan model.',
    'missing_column' => 'Nema definicija za sledeće kolone: :columns.',
    'missing_columns' => 'Lista korišćena u klasi :class nema definisane kolone.',
    'missing_definition' => 'Lista ponašanja ne sadrži definiciju za \':field\'.',
    'missing_parent_definition' => 'Lista ponašanja ne sadrži definiciju za \':definition\'.',
    'behavior_not_ready' => 'Lista ponašanja nije inicijalizovana, proveri da li je metoda makeLists() pozvana u kontroleru.',
    'invalid_column_datetime' => 'Vrednost kolone \':column\' nije DateTime objekat, da li ti nedostaje $dates referenca u modelu?',
    'pagination' => 'Prikazani zapisi: :from-:to od ukupno :total',
    'first_page' => 'Prva strana',
    'last_page' => 'Poslednja strana',
    'prev_page' => 'Prošla strana',
    'next_page' => 'Sledeća strana',
    'refresh' => 'Osveži',
    'updating' => 'Ažuriranje...',
    'loading' => 'Učitavanje...',
    'check' => 'Proveri',
    'delete_selected' => 'Izbriši izabrane',
    'delete_selected_empty' => 'Nema izabranih zapisa za brisanje.',
    'delete_selected_confirm' => 'Izbriši izabrane zapise?',
    'delete_selected_success' => 'Izabrani zapisi su obrisani.',
    'column_switch_true' => 'Da',
    'column_switch_false' => 'Ne',
  ],
  'fileupload' => [
    'default_prompt' => 'Klikni na %s ili prevuci fajl ovde za otpremanje',
  ],
  'form' => [
    'create_title' => 'Nova :name',
    'update_title' => 'Izmeni :name',
    'preview_title' => 'Pregledaj :name',
    'restore_success' => ':name povraćen',
    'reset_success' => 'Resetovanje završeno',
    'missing_id' => 'ID obrasca nije specificiran.',
    'missing_model' => 'Ponašanje obrasca koje se koristi u klasi :class nema definisan model.',
    'missing_definition' => 'Ponašanje obrasca ne sadrži sledeće polje: \':field\'.',
    'action_confirm' => 'Da li ste sigurni?',
    'create' => 'Napravi',
    'create_and_close' => 'Napravi i zatvori',
    'creating' => 'Pravljenje...',
    'creating_name' => 'Pravljenje :name...',
    'save' => 'Sačuvaj',
    'save_and_close' => 'Sačuvaj i zatvori',
    'saving' => 'Čuvanje...',
    'saving_name' => 'Čuvanje :name...',
    'delete' => 'Izbriši',
    'deleting' => 'Brisanje...',
    'confirm_delete' => 'Izbriši zapis?',
    'confirm_delete_multiple' => 'Izbriši odabrane zapise?',
    'deleting_name' => 'Brisanje :name...',
    'restore' => 'Povrati',
    'restoring' => 'Vraćanje...',
    'confirm_restore' => 'Da li zaista želite da povratite ovaj zapis?',
    'reset_default' => 'Resetuj na osnovno',
    'resetting' => 'Resetovanje',
    'resetting_name' => 'Resetovanje :name',
    'undefined_tab' => 'Razno',
    'field_off' => 'Isključi',
    'field_on' => 'Uključi',
    'add' => 'Dodaj',
    'apply' => 'Primeni',
    'cancel' => 'Poništi',
    'close' => 'Zatvori',
    'confirm' => 'Potvrdi',
    'reload' => 'Ponovo učitaj',
    'complete' => 'Kompletno',
    'ok' => 'OK',
    'or' => 'ili',
    'confirm_tab_close' => 'Zatvori tab? Nesačuvane promene će biti izgubljene.',
    'behavior_not_ready' => 'Ponašanje obrasca se nije inicijalizovalo, proveri da li je metoda initForm() pozvana.',
    'preview_no_files_message' => 'Nema otpremljenih fajlova.',
    'preview_no_media_message' => 'Nema izabranih medija.',
    'preview_no_record_message' => 'Nema izabranih zapisa.',
    'select' => 'Izaberi',
    'select_all' => 'Izaberi sve',
    'select_none' => 'Ukloni odabire',
    'insert_row' => 'Ubaci red',
    'insert_row_below' => 'Ubaci red ispod',
    'delete_row' => 'Izbriši red',
    'concurrency_file_changed_title' => 'Fajl je izmenjen',
    'concurrency_file_changed_description' => 'Fajl nad kojim je rađeno je u međuvremenu promenjen od strane drugog korisnika. Možeš ponovo da ga učitaš i izgubiš svoje promene, ili ga jednostavno pregaziš.',
    'return_to_list' => 'Nazad na listu',
  ],
  'recordfinder' => [
    'find_record' => 'Pronađi zapis',
    'invalid_model_class' => 'Klasa modela ":modelClass" za pretragu nije validna',
    'cancel' => 'Otkaži',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Relacioni odnos nema konfiguraciju za \':config\'.',
    'missing_definition' => 'Relacioni odnos ne sadrži definiciju za polje \':field\'.',
    'missing_model' => 'Relacioni odnos korišćen u klasi :class nema definisan model.',
    'invalid_action_single' => 'Ova radnja se ne može izvršiti na jednoj vezi.',
    'invalid_action_multi' => 'Ova radnja se ne može izvršiti na više veza.',
    'help' => 'Klikni na element za dodavanje',
    'add' => 'Dodaj',
    'link_selected' => 'Zakači izabrane',
    'cancel' => 'Otkaži',
    'close' => 'Zatvori',
    'create' => 'Napravi',
    'update' => 'Ažuriraj',
    'preview' => 'Pregledaj',
    'remove_name' => 'Ukloni :name',
    'delete_name' => 'Izbriši :name',
    'link' => 'Zakači',
    'unlink_name' => 'Otkači :name',
  ],
  'reorder' => [
    'default_title' => 'Promeni redosled',
    'no_records' => 'Ne postoje elementi za razmeštanje.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' sa odabranim identifikatorom :id nije pronađen',
    'missing_id' => 'ID za pretragu modela nije specificiran.',
    'missing_relation' => 'Model \':class\' ne sadrži definiciju za relaciju: \':relation\'.',
    'missing_method' => 'Model \':class\' ne sadrži metod: \':method\'.',
    'invalid_class' => 'Model :model korišćen u klasi :class nije validan, mora da nasledi klasu \\Model.',
    'mass_assignment_failed' => 'Greška pri masovnom dodeljivanju za atribut modela: \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Saveti za konfigurisanje sistema',
    'tips_description' => 'Postoje problemi na koje bi trebalo da obratiš pažnju da bi konfigurisao sistem kako treba.',
    'permissions' => 'PHP ne može pristupiti direktorijumu :name ili njegovim poddirektorijuma zarad upisivanja. Promeni RWX dozvole na serveru za ovaj direktorijum.',
    'extension' => 'Produžetak za PHP :name nije instaliran. Instaliraj ovu biblioteku i produžetak.',
    'plugin_missing' => 'Produžetak :name je obavezan ali nije instaliran. Instaliraj ovaj produžetak.',
    'debug' => 'Uključen je mod za ispravljanje grešaka što nije preporučljivo.',
    'decompileBackendAssets' => 'Sredstva u pozadinskom sistemu trenutno nisu kompajlovana što nije preporučljivo.',
  ],
  'editor' => [
    'toolbar_buttons_presets' => [
      'default' => 'Osnovna',
      'minimal' => 'Minimalna',
      'full' => 'Kompletna',
    ],
  ],
  'tooltips' => [],
  'mysettings' => [
    'menu_label' => 'Moja podešavanja',
    'menu_description' => 'Podešavanja vezana za administratorski nalog',
  ],
  'myaccount' => [],
  'branding' => [
    'accent_color' => 'Akcentovane boje',
    'menu_mode_inline_no_icons' => 'Uveden (bez ikonica)',
  ],
  'backend_preferences' => [],
  'access_log' => [],
  'filter' => [
    'all' => 'svi',
    'options_method_not_exists' => 'Model klase :model mora definisati povratne opcije metoda :method() za \':filter\' filter.',
    'date_all' => 'svi periodi',
    'number_all' => 'svi brojevi',
  ],
  'import_export' => [
    'row' => 'Red :row',
    'export_error' => 'Greška pri izvozu',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Zapadnoevropski)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Srednjoevropski)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Južnoevropski)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Severnoevropski)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Ćirilični)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arapski)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Grčki)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrejski)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turski)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordijski)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Tajlandski)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltički region)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Keltski)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Zapadnoevropska revizija sa euro znakom)',
      'windows_1250' => 'Windows-1250 (CP1250, Severnoevropski i istočnoevropski)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Otpremi i upravljaj medijima - slikama, video i audio zapisima, dokumentima',
  ],
  'mediafinder' => [
    'label' => 'Pretražuj medije',
    'default_prompt' => 'Klikni na %s dugme za traženje elementa',
    'no_image' => 'Slika nije pronađena',
  ],
  'media' => [
    'menu_label' => 'Mediji',
    'upload' => 'Otpremanje',
    'move' => 'Pomeri',
    'delete' => 'Izbriši',
    'add_folder' => 'Dodaj direktorijum',
    'search' => 'Traži',
    'display' => 'Prikaži',
    'filter_everything' => 'Sve',
    'filter_images' => 'Slike',
    'filter_video' => 'Video zapisi',
    'filter_audio' => 'Audio zapisi',
    'filter_documents' => 'Dokumenta',
    'library' => 'Biblioteka',
    'size' => 'Veličina',
    'title' => 'Naslov',
    'last_modified' => 'Poslednja modifikacija',
    'public_url' => 'URL',
    'click_here' => 'Klikni ovde',
    'thumbnail_error' => 'Greška pri generisanju pregledne slike.',
    'return_to_parent' => 'Nazad na nadređeni direktorijum',
    'return_to_parent_label' => 'Idi nazad ..',
    'nothing_selected' => 'Ništa nije izabrano.',
    'multiple_selected' => 'Više elemenata je izabrano.',
    'uploading_file_num' => 'Otpremi :number fajl(ova)...',
    'uploading_complete' => 'Otpremanje završeno',
    'uploading_error' => 'Otpremanje neuspešno',
    'type_blocked' => 'Fajl je blokiran iz bezbednosnih razloga.',
    'order_by' => 'Sortiraj po',
    'direction' => 'Pravac',
    'direction_asc' => 'Uzlazni',
    'direction_desc' => 'Silazni',
    'folder' => 'Direktorijum',
    'no_files_found' => 'Nijedan fajl nije pronađen.',
    'delete_empty' => 'Izaberi elemente za brisanje.',
    'delete_confirm' => 'Izbriši odabran element(e)?',
    'error_renaming_file' => 'Greška pri promeni naziva elementa.',
    'new_folder_title' => 'Novi direktorijum',
    'folder_name' => 'Naziv direktorijuma',
    'error_creating_folder' => 'Greška pri pravljenju direktorijuma',
    'folder_or_file_exist' => 'Direktorijum ili fajl sa navedenim nazivom već postoji.',
    'move_empty' => 'Izaberi elemente za pomeranje.',
    'move_popup_title' => 'Pomeri fajlove ili direktorijume',
    'move_destination' => 'Odredišni direktorijum',
    'please_select_move_dest' => 'Izaberi odredišni direktorijum.',
    'move_dest_src_match' => 'Izaberi drugi odredišni direktorijum.',
    'empty_library' => 'Otpremi fajlove ili napravi direktorijume.',
    'insert' => 'Ubaci',
    'crop_and_insert' => 'Iseci & ubaci',
    'select_single_image' => 'Izaberi jednu sliku.',
    'selection_not_image' => 'Izabrani element nije slika.',
    'restore' => 'Poništi sve promene',
    'resize' => 'Promeni veličinu...',
    'selection_mode_normal' => 'Normalna',
    'selection_mode_fixed_ratio' => 'Fiksirani odnos',
    'selection_mode_fixed_size' => 'Fiksirana veličina',
    'height' => 'Visina',
    'width' => 'Širina',
    'selection_mode' => 'Mod selekcije',
    'resize_image' => 'Promeni veličinu slike',
    'image_size' => 'Veličina slike:',
    'selected_size' => 'Izabrana veličina:',
  ],
];
