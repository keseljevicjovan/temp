## Projektni-zadatak-laravel-srednjoskolci

Ova aplikacija je napravljena u Laravelu i služi za dijeljenje blogova.
Omogućuje korisnicima kreiranje, uređivanje,brisanje i pregled blogova (postova).
Korisnici mogu da kreiraju, uređuju i brisu svoje postove, dok admini (superadministratori) imaju dodatne permisije za upravljanje postovima i korisnicima u admin panel.

# Instalacija

git clone https://github.com/lucic15/projektni-zadatak-laravel-srednjoskolci.github
cd projektni-zadatak-laravel-srednjoskolci
composer install
php artisan migrate:fresh

Takodje mozete da koristite ugradjene seed-ere umjesto da rucno kucate podatke 

php artisan db:seed

Pokretanje aplikacije se vrse normalno preko 
php artisan serve
