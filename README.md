# orlikOn
 amateur games creator

### Start:
Edit .env file  -> orlikon_db, GENERATE APK KEY
composer install --no-scripts
php artisan db:seed
php artisan route:list

### TODO:
- [x] Game show (trener, tabela players - imiona i telefony)
- [x] Nie wyświetlaj nie przyjdę
- [x] Inne formatowanie dla GOŚĆ
- [ ] Kolejka priorytetowa dla gry (Zapisani mają pierwszeństwo, później goście)
- [x] odnośnik z Game.show na boisko.info
- [x] hour_* DO 24.00
- [ ] Różne dni, różne godziny otwarcia
- [ ] godzina gier zależna od godziny otwarcia boiska
- [ ] godzina gier zależna od istniejących gier
- [ ] różne godziny otwarcia orlika
- [ ] Game Controller: Store!
- [ ] formularz bez pól id-pitch, id-user
- [ ] Użytkownicy
- [ ] Metoda Delete

### Inne:
- [x] Zobacz boisko na Google maps
- [ ] Dodaj zdjęcie boiska
- [ ] TrustRate
- [ ] status gracza w meczu
- [ ] Komentarze pod grą
- [ ] share game
- [ ] css a.pitch-title:hover animation
- [ ] harmonogram orlika
- [ ] rezerwowi