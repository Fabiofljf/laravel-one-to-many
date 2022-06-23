# Project laravel-auth

1. Creazione della repo;
2. Creazione del file in locale con il terminale:
- composer create-project --prefer-dist laravel/laravel:^7.0 laravel-auth;
3. Installazione dipendenze:
- npm i;
4. Installazione bootstrap:
- npm i bootstrap;
5. First push.
6. Installazione UI:
- composer require laravel/ui:^2.4;
7. Installazione UI vue:
- php artisan ui vue --auth;
8. Accesso a MySQL:
- mysql -uroot -proot;
9. Creazione database (mysql):
- create database laravel_auth_60;
10. Correzione credenziali file .env;
11. Far girare npm:
- npm install;
- npm run dev;
12. Avvio serve e npm run wacth;

### Struttura - Controllers
1. Creazione cartella Admin
- Inserire HomeController
2. Creazione cartella Guest
### Struttura - Web.php
1. Aggiungo:
- use Illuminate\Support\Facades\Auth;
2. Commento via la rotta iniziale // return view('welcome');
3. Raggruppiamo tutte le rotte per la parte di amministrazione del sito;
4. Aggiungo prima rotta dentro la funizione (dashboard);
5. Aggiungo rotta di fallback che va a mappare tutte le rotte non intercettate nelle istruzioni precedenti.



13. Secondo Push.
14. cambiare in RouteServiceProvider route da home in admin;

### Struttura - Views
1. Creazione cartella admin
    - Inserisco home.blade.php;

### Struttura - cartelle
Views>layouts:
- Creazione di due layout differenti, uno per admin e uno per guest;
Resources>sass:
- Creazione di due css differenti, uno per admin e uno per guest;

15. Modifica il file webpack.mix.js;
16. Resource>js:
- Creo nuovo file admin js;


slug per parametro in url